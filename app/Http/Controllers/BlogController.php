<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $blogs = Blog::paginate(5);
        $page = request()->page;
        $lastPage = $blogs->lastPage();
        if ($page === null) {
            $page = 1;
        }
        return view('blogs.index', [
            'blogs' => $blogs,
            'page' => $page,
            'lastPage' => $lastPage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        if (Auth::check()) {
            return view('blogs.create');
        } else {
            return redirect('blog');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBlogRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreBlogRequest $request)
    {
        //    Should check if img_link is an img and if not make img_link null but doesn't work and don't know why
        if (filter_var($request->img_link, FILTER_VALIDATE_URL)) {
            if (!($this->isImage($request->img_link))) {
                $request->merge(['img_link' => null]);
            }
        }

//        $headers = get_headers($request->img_link, 1);
//        if (strpos($headers['Content-Type'], 'image') !== false) {
//            dd("{$request->img_link} is img");
//        } else {
//            dd("$request->img_link} NOPE");
//        }

        Blog::create($request->validate([
            'title' => 'required|string|max:100',
            'paragraph' => 'required|string|max:65534',
            'img_link' => 'nullable|url'
        ]));
        return redirect('/blog');

    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return Application|Factory|View
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Blog $blog
     * @return Application|Factory|View
     */
    public function edit(Blog $blog)
    {
        if (Auth::check()) {
            return view('blogs.edit', ['blog' => $blog]);
        } else {
            return redirect('blog');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateBlogRequest $request
     * @param Blog $blog
     * @return Application|Redirector|RedirectResponse
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        $blog->update($request->validate([
            'title' => 'required|string|max:100',
            'paragraph' => 'required|string|max:65534',
            'img_link' => 'nullable|url'
        ]));

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect('/blog');
    }


    /**
     * Checks if an url is an img
     *
     * @param $url string the url to be tested
     * @return bool returns if the url is an img true or false
     */
    function isImage($url): bool
    {
        $params = array('http' => array(
            'method' => 'HEAD'
        ));
        $ctx = stream_context_create($params);
        $fp = @fopen($url, 'rb', false, $ctx);
        if (!$fp)
            return false;  // Problem with url

        $meta = stream_get_meta_data($fp);
        if ($meta === false) {
            fclose($fp);
            return false;  // Problem reading data from url
        }

        $wrapper_data = $meta["wrapper_data"];
        if (is_array($wrapper_data)) {
            foreach (array_keys($wrapper_data) as $hh) {
                if (substr($wrapper_data[$hh], 0, 19) == "Content-Type: image") // strlen("Content-Type: image") == 19
                {
                    fclose($fp);
                    return true;
                }
            }
        }
        fclose($fp);
        return false;
    }
}

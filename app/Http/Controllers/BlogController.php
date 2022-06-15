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
        return view('blogs.create');
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

//        $headers = get_headers($request->img_link, 1);
//        if (strpos($headers['Content-Type'], 'image') !== false) {
//            dd("{$request->img_link} is img");
//        } else {
//            dd("$request->img_link} NOPE");
//        }


        Blog::create($request->validate([
            'title' => 'required',
            'paragraph' => 'required',
            'img_link' => 'nullable'
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
        return view('blogs.edit', ['blog' => $blog]);
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
            'title' => 'required',
            'paragraph' => 'required',
            'img_link' => 'nullable'
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
}

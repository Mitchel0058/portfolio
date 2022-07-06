<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDashboardRequest;
use App\Http\Requests\UpdateDashboardRequest;
use App\Models\Dashboard;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $dashboards = Dashboard::all();
        return view('dashboards.index', [
            'dashboards' => $dashboards,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDashboardRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreDashboardRequest $request)
    {
        Dashboard::create($request->validate([
            'year' => 'required|integer|min:0',
            'quartile' => 'required|integer|min:0',
            'course' => 'required|string',
            'EC' => 'required|numeric|min:0',
        ]));

        return redirect('/dashboards');
    }

    /**
     * Display the specified resource.
     *
     * @param Dashboard $dashboard
     * @return Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Dashboard $dashboard
     * @return Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDashboardRequest $request
     * @param Dashboard $dashboard
     * @return Application|Redirector|RedirectResponse
     */
    public function update(UpdateDashboardRequest $request, Dashboard $dashboard)
    {
        $dashboard->update($request->validate([
            'year' => 'required|integer|min:0',
            'quartile' => 'required|integer|min:0',
            'course' => 'required|string',
            'EC' => 'required|numeric|min:0',
        ]));

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Dashboard $dashboard
     * @return Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}

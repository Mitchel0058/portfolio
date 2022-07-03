<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExamRequest;
use App\Http\Requests\UpdateExamRequest;
use App\Models\Exam;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        if (Auth::check()) {
            return view('exams.create');
        } else {
            return redirect('dashboards');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreExamRequest $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreExamRequest $request)
    {
        Exam::create($request->validate([
            'dashboard_id' => 'required|integer|min:0',
            'exam_Name' => 'required|string',
            'exam_Grade' => 'nullable|integer|min:0|max:10'
        ]));

        return redirect('/dashboards');
    }

    /**
     * Display the specified resource.
     *
     * @param Exam $exam
     * @return Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Exam $exam
     * @return Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateExamRequest $request
     * @param Exam $exam
     * @return Application|Redirector|RedirectResponse
     */
    public function update(UpdateExamRequest $request, Exam $exam)
    {
        $exam->update($request->validate([
            'dashboard_id' => 'required|integer|min:0',
            'exam_Name' => 'required|string',
            'exam_Grade' => 'nullable|integer|min:0|max:10'
        ]));

        return redirect('/dashboards');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Exam $exam
     * @return Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
}

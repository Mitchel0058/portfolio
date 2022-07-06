@extends('mainLayout')
<title>Dashboard</title>
@section('content')
    <div class="container">
        <div class="bg-darkerblue">
            <div class="d-flex flex-row">
                <div class="w-20 p-3 border border-darkblue rounded text-center h5">Quartile</div>
                <div class="w-20 p-3 border border-darkblue rounded text-center h5">Course</div>
                <div class="w-20 p-3 border border-darkblue rounded text-center h5">EC</div>
                <div class="w-20 p-3 border border-darkblue rounded text-center h5">Exam</div>
                <div class="w-20 p-3 border border-darkblue rounded text-center h5">Exam Grade</div>
                <div class="w-20 p-3 border border-darkblue rounded text-center h5">Course Grade</div>
            </div>

            <div class="d-flex flex-row border border-light my-1">
                <div class="p-2 border border-darkblue rounded w-20 text-center">Quartile 1</div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded">Programme and Career Orientation</div>
                    <div class="p-2 border border-darkblue rounded">Computer Science Basics</div>
                    <div class="p-2 border border-darkblue rounded">Programming Basics</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded h-50">2.5</div>
                    <div class="p-2 border border-darkblue rounded">5</div>
                    <div class="p-2 border border-darkblue rounded">5</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded h-50">Assessment exam</div>
                    <div class="p-2 border border-darkblue rounded">Written exam</div>
                    <div class="p-2 border border-darkblue rounded">Case study exam</div>
                </div>
                <div class="d-flex flex-column w-20">
                    @foreach($dashboards->where('course', 'Programme and Career Orientation')->first()->exam as $exam)
                        <div class="p-2 border border-darkblue rounded h-50">
                            {{$exam->course_Grade === null ? 'N/A' : $exam->course_Grade }}
                        </div>
                    @endforeach
                    @foreach($dashboards->where('course', 'Computer Science Basics')->first()->exam as $exam)
                        <div class="p-2 border border-darkblue rounded">
                            {{ $exam->course_Grade === null ? 'N/A' : $exam->course_Grade  }}
                        </div>
                    @endforeach
                    @foreach($dashboards->where('course', 'Programming Basics')->first()->exam as $exam)
                        <div class="p-2 border border-darkblue rounded">
                            {{ $exam->course_Grade === null ? 'N/A' : $exam->course_Grade  }}
                        </div>
                    @endforeach
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded flex-fill text-center">N/A</div>
                </div>
            </div>

            <div class="d-flex flex-row border border-light my-1">
                <div class="p-2 border border-darkblue rounded w-20 text-center">Quartile 2</div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded h-100">Object Oriented Programming</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded h-100">10</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded">Case study exam</div>
                    <div class="p-2 border border-darkblue rounded">Project</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded">N/A</div>
                    <div class="p-2 border border-darkblue rounded">N/A</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded flex-fill text-center">N/A</div>
                </div>
            </div>

            <div class="d-flex flex-row border border-light my-1">
                <div class="p-2 border border-darkblue rounded w-20 text-center">Quartile 3</div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded">Framework Development 1</div>
                    <div class="p-2 border border-darkblue rounded flex-fill">Framework Project 1</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded">5</div>
                    <div class="p-2 border border-darkblue rounded flex-fill">7.5</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded">Case study exam</div>
                    <div class="p-2 border border-darkblue rounded">Project</div>
                    <div class="p-2 border border-darkblue rounded">Assessment</div>
                    <div class="p-2 border border-darkblue rounded">Report</div>
                </div>

{{--                Potential for editable grades--}}
{{--                <form method="POST" action="/exams/{{ $exam->id }} }}" class="all-unset">--}}
{{--                    @csrf--}}
{{--                    @method('PUT')--}}
{{--                    <div class="p-2 border border-darkblue rounded">--}}
{{--                        <input name="exam {{$exam->id}}" type="number"--}}
{{--                               value="{{ $exam->course_Grade === null ? 'N/A' : $exam->course_Grade  }}"--}}
{{--                               class="all-unset bg-black">--}}
{{--                        <button type="submit"></button>--}}
{{--                    </div>--}}
{{--                </form>--}}

                <div class="d-flex flex-column w-20">
                    @foreach($dashboards->where('course', 'Framework Development 1')->first()->exam as $exam)
                        <div class="p-2 border border-darkblue rounded">
                            {{ $exam->course_Grade === null ? 'N/A' : $exam->course_Grade  }}
                        </div>
                    @endforeach
                    @foreach($dashboards->where('course', 'Framework Project 1')->first()->exam as $exam)
                        <div class="p-2 border border-darkblue rounded">
                            {{ $exam->course_Grade === null ? 'N/A' : $exam->course_Grade  }}
                        </div>
                    @endforeach
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded flex-fill text-center">N/A</div>
                </div>
            </div>

            <div class="d-flex flex-row border border-light my-1">
                <div class="p-2 border border-darkblue rounded w-20 flex-fill text-center">Quartile 4</div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded flex-fill">Portfolio</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded flex-fill">10</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded">Project</div>
                    <div class="p-2 border border-darkblue rounded">Assessment</div>
                </div>
                <div class="d-flex flex-column w-20 ">
                    <div class="p-2 border border-darkblue rounded">N/A</div>
                    <div class="p-2 border border-darkblue rounded flex-fill">N/A</div>
                </div>
                <div class="d-flex flex-column w-20">
                    <div class="p-2 border border-darkblue rounded flex-fill text-center">N/A</div>
                </div>
            </div>
        </div>

        {{-- Database w.i.p. not now. --}}
        {{--        <div class="container">--}}
        {{--            <div class="bg-darkerblue">--}}
        {{--                <div class="d-flex flex-row">--}}
        {{--                    <div class="w-20 p-3 border border-darkblue rounded text-center h5">Quartile</div>--}}
        {{--                    <div class="w-20 p-3 border border-darkblue rounded text-center h5">Course</div>--}}
        {{--                    <div class="w-20 p-3 border border-darkblue rounded text-center h5">EC</div>--}}
        {{--                    <div class="w-20 p-3 border border-darkblue rounded text-center h5">Exam</div>--}}
        {{--                    <div class="w-20 p-3 border border-darkblue rounded text-center h5">Exam Grade</div>--}}
        {{--                    <div class="w-20 p-3 border border-darkblue rounded text-center h5">Course Grade</div>--}}
        {{--                </div>--}}

        {{--                <div class="d-flex flex-row border border-light my-1">--}}
        {{--                    <div class="p-2 border border-darkblue rounded w-20 text-center">Quartile 1</div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        @for($i = 0; $i < count($dashboards->where('Quartile', 1)); $i++)--}}
        {{--                            <div class="p-2 border border-darkblue rounded flex-fill">--}}
        {{--                                {{ $dashboards[$i]->Course }}--}}
        {{--                            </div>--}}
        {{--                        @endfor--}}
        {{--                    </div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        @for($i = 0; $i < count($dashboards->where('Quartile', 1)); $i++)--}}
        {{--                            <div class="p-2 border border-darkblue rounded flex-fill">--}}
        {{--                                {{ $dashboards[$i]->EC }}--}}
        {{--                            </div>--}}
        {{--                        @endfor--}}
        {{--                    </div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        @for($i = 0; $i < count($dashboards->where('Quartile', 1)); $i++)--}}
        {{--                            <div class="p-2 border border-darkblue rounded flex-fill">--}}
        {{--                                {{ $dashboards[$i]->exam[0]->Exam_Name }}--}}
        {{--                            </div>--}}
        {{--                        @endfor--}}
        {{--                    </div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        @for($i = 0; $i < count($dashboards->where('Quartile', 1)); $i++)--}}
        {{--                            <div class="p-2 border border-darkblue rounded flex-fill">--}}
        {{--                                {{ $dashboards[$i]->exam[0]->Grade }}--}}
        {{--                            </div>--}}
        {{--                        @endfor--}}
        {{--                    </div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        <div class="p-2 border border-darkblue rounded flex-fill">--}}
        {{--                            {{ $dashboards[$i]->Course_Grade }}--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--                <div class="d-flex flex-row border border-light my-1">--}}
        {{--                    <div class="p-2 border border-darkblue rounded w-20 text-center">Quartile 2</div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        @for($i = 0; $i < count($dashboards->where('Quartile', 2)); $i++)--}}
        {{--                            <div class="p-2 border border-darkblue rounded flex-fill">--}}
        {{--                                {{ $dashboards[$i]->Course }}--}}
        {{--                            </div>--}}
        {{--                        @endfor--}}
        {{--                    </div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        @for($i = 0; $i < count($dashboards->where('Quartile', 2)); $i++)--}}
        {{--                            <div class="p-2 border border-darkblue rounded flex-fill">--}}
        {{--                                {{ $dashboards[$i]->EC }}--}}
        {{--                            </div>--}}
        {{--                        @endfor--}}
        {{--                    </div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        @for($i = 0; $i < count($dashboards->where('Quartile', 2)); $i++)--}}
        {{--                            <div class="p-2 border border-darkblue rounded flex-fill">--}}
        {{--                                {{ $dashboards->where('Quartile', 2)[$i]->exam[0]->Exam_Name }}--}}
        {{--                            </div>--}}
        {{--                        @endfor--}}
        {{--                    </div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        <div class="p-2 border border-darkblue rounded">N/A</div>--}}
        {{--                        <div class="p-2 border border-darkblue rounded">N/A</div>--}}
        {{--                    </div>--}}
        {{--                    <div class="d-flex flex-column w-20">--}}
        {{--                        <div class="p-2 border border-darkblue rounded flex-fill text-center">N/A</div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
@endsection

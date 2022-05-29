@extends('mainLayout')
@section('content')
    <div class="container">
        <div class="d-flex flex-row bg-darkerblue">
            <div class="w-20 p-3 border border-darkblue rounded text-center h5">Quartile</div>
            <div class="w-20 p-3 border border-darkblue rounded text-center h5">Course</div>
            <div class="w-20 p-3 border border-darkblue rounded text-center h5">EC</div>
            <div class="w-20 p-3 border border-darkblue rounded text-center h5">Exam</div>
            <div class="w-20 p-3 border border-darkblue rounded text-center h5">Grade</div>
        </div>

        <div class="d-flex flex-row bg-darkerblue">
            <div class="p-2 border border-darkblue rounded w-20">Quartile 1</div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">Programme and Career Orientation</div>
                <div class="p-2 border border-darkblue rounded">Computer Science Basics</div>
                <div class="p-2 border border-darkblue rounded">Programming Basics</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">2.5</div>
                <div class="p-2 border border-darkblue rounded">5</div>
                <div class="p-2 border border-darkblue rounded">5</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">Assessment exam</div>
                <div class="p-2 border border-darkblue rounded">Written exam</div>
                <div class="p-2 border border-darkblue rounded">Case study exam</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">N/A</div>
                <div class="p-2 border border-darkblue rounded">N/A</div>
                <div class="p-2 border border-darkblue rounded">N/A</div>
            </div>
        </div>

        <div class="d-flex flex-row bg-darkerblue">
            <div class="p-2 border border-darkblue rounded w-20">Quartile 2</div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded h-100">Object Oriented Programming</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded h-100">10</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">Case study exam</div>
                <div class="p-2 border border-darkblue rounded">Project</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">N/A</div>
                <div class="p-2 border border-darkblue rounded">N/A</div>
            </div>
        </div>

        <div class="d-flex flex-row bg-darkerblue">
            <div class="p-2 border border-darkblue rounded w-20">Quartile 3</div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">Framework Development 1</div>
                <div class="p-2 border border-darkblue rounded flex-fill">Framework Project 1</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">5</div>
                <div class="p-2 border border-darkblue rounded flex-fill">7.5</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">Case study exam</div>
                <div class="p-2 border border-darkblue rounded">Project</div>
                <div class="p-2 border border-darkblue rounded">Assessment</div>
                <div class="p-2 border border-darkblue rounded">Report</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">N/A</div>
                <div class="p-2 border border-darkblue rounded flex-fill">N/A</div>
            </div>
        </div>

        <div class="d-flex flex-row bg-darkerblue">
            <div class="p-2 border border-darkblue rounded w-20">Quartile 2</div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded h-100">Object Oriented Programming</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded h-100">10</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">Case study exam</div>
                <div class="p-2 border border-darkblue rounded">Project</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">N/A</div>
                <div class="p-2 border border-darkblue rounded">N/A</div>
            </div>
        </div>

        <div class="d-flex flex-row bg-darkerblue">
            <div class="p-2 border border-darkblue rounded w-20 flex-fill">Quartile 4</div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded flex-fill">Portfolio</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded flex-fill">10</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded">Project</div>
                <div class="p-2 border border-darkblue rounded">Assessment</div>
            </div>
            <div class="d-flex flex-column w-20 bg-darkerblue">
                <div class="p-2 border border-darkblue rounded flex-fill">N/A</div>
            </div>
        </div>

        {{--        <div class="row bg-darkerblue">--}}
        {{--            <div class="col border border-dark">Quartile</div>--}}
        {{--            <div class="col border border-dark">Course</div>--}}
        {{--            <div class="col border border-dark">EC</div>--}}
        {{--            <div class="col border border-dark">Exam</div>--}}
        {{--            <div class="col border border-dark">Grade</div>--}}
        {{--        </div>--}}
        {{--        <div class="row bg-darkerblue border border-dark h-100"> Test--}}
        {{--            <div class="col">Test 2</div>--}}
        {{--            <div class="row">Test 3</div>--}}
        {{--        </div>--}}
    </div>
@endsection

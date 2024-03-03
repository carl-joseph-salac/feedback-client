@extends('layout.app')

@section('additionalStyle')
    <style>
        table tr td {
            padding: 5px;
        }

        .buttonss{
            width: 85px;
        }

        .btn-secondary {
            width: 65px;
        }
    </style>
@endsection

@section('section')
    <div class="card b-0 rounded-0">
        <div class="row justify-content-center mx-auto step-container">
            <div class="col-md-3 col-4 step-box">
                <h6 class="step-title-0">
                    <span class="fa fa-check"></span>
                    <span class="break-line"></span>
                    <span class="step-title">TERMS AND CONDITIONS</span>
                </h6>
            </div>
            <div class="col-md-3 col-4 step-box">
                <h6 class="step-title-0">
                    <span class="fa fa-check"></span>
                    <span class="break-line"></span>
                    <span class="step-title">FEEDBACK</span>
                </h6>
            </div>
            <div class="col-md-3 col-4 step-box active">
                <h6 class="step-title-0">
                    <span class="fa fa-circle"></span>
                    <span class="break-line"></span>
                    <span class="step-title">CONFIRMATION</span>
                </h6>
            </div>
        </div>

        <div class="container mb-3 mt-0">
            <h6 class="confirm text-center">Review the provided feedback and click ‘Confirm’</h6>
            <div class="container rounded border">
                <div >
                    <form action="{{ route('submitFeedback') }}" method="post">
                        @csrf
                        @method('post')

                        <div class="container">
                            <table>
                                @foreach ($cc as $question)
                                    <tr>
                                        <td><strong>{{ strtoupper($question->question_no) }}</strong> </td>
                                        <td>{{ $question->question }}</td>
                                        <td rowspan="2">
                                            <a href="{{ route($question->question_no . 'Checked',
                                                [
                                                    'buttonLabel' => session('buttonLabel'),
                                                    'cc1Edit' => session('cc1Edit'),
                                                    'cc2Edit' => session('cc2Edit'),
                                                    'cc3Edit' => session('cc3Edit'),
                                                    'cc1' => session('cc1'),
                                                    'cc2' => session('cc2'),
                                                    'cc3' => session('cc3'),
                                                ])
                                            }}"
                                                class="btn btn-success btn-sm rounded-1"
                                                type="button" data-toggle="tooltip"
                                                data-placement="top"
                                                title="Edit">
                                                <i class="fa fa-edit mr-1"></i>
                                                Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="border-bottom">
                                        <td></td>
                                        <td>
                                            <span class="fa fa-circle bg-success"></span>
                                            {{ session($question->question_no) }}
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach ($sqd as $question)
                                    {{-- if SQD5 for Cashier Only --}}
                                    {{-- session(($question->question_no) == 0)  Means that the applicant purpose is not on the Cashier--}}
                                    @if (session($question->question_no) == 0)
                                        <tr class="bg-white">
                                            <td><strong>{{ strtoupper($question->question_no) }}</strong> </td>
                                            <td>{{ $question->question }}</td>
                                            <td rowspan="2">
                                                <button disabled="disabled" class="btn btn-secondary btn-sm">N/A</button>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td></td>
                                            <td>
                                               <i>Not Applicable</i>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td><strong>{{ strtoupper($question->question_no) }}</strong> </td>
                                            <td>{{ $question->question }}</td>
                                            <td rowspan="2">
                                                <a href="{{ route($question->question_no . 'Star') }}" class="btn btn-success btn-sm rounded-1"
                                                    type="button" data-toggle="tooltip" data-placement="top" title="Edit">
                                                    <i class="fa fa-edit mr-1"></i>
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <td></td>
                                            <td>
                                                <span class="fa fa-circle bg-success"></span>
                                                {{ session($question->question_no) }}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                <tr>
                                    <td>
                                        <strong>SUGGESTION</strong>
                                    </td>
                                    <td></td>
                                    <td rowspan="2">
                                        <a href="{{ route('suggestionAnswered') }}" class="btn btn-success btn-sm rounded-1"
                                        type="button" data-toggle="tooltip" data-placement="top" title="Edit" id="suggestion">
                                        <i class="fa fa-edit mr-1"></i>
                                        Edit
                                    </a>
                                    </td>
                                </tr>
                                <tr class="border-bottom">
                                    <td></td>
                                    <td>
                                        <span class="fa fa-circle bg-success"></span>
                                        {{ session('suggestion') }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="container text-center d-flex justify-content-center my-3">
                            <a href="{{ route('suggestionAnswered') }}"
                                class="text-center btn btn-success rounded-1 prev mr-2 buttons">Back</a>
                            <input class="text-center btn btn-success  rounded-1 prev mr-2 buttons" type="submit"
                                value="Confirm" id="confirm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

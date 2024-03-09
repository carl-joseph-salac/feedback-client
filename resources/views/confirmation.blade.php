@extends('layout.app')

@section('additionalStyle')
    <style>
        table tr td {
            padding: 5px;
        }

        .buttons {
            width: 85px;
        }

        .btn-edit,
        .btn-secondary {
            width: 65px;
        }
    </style>
@endsection

@section('section')
    <div class="card b-0 rounded-3">
        @include('layout.depedLogo')
        <div class="row justify-content-center mx-auto step-container text-center">
            <div class="col-4 step-box">
                <h6 class="step-title-0">
                    <span class="fa fa-check"></span>
                    <span class="break-line"></span>
                    <span class="step-title">TERMS AND CONDITIONS</span>
                </h6>
            </div>
            <div class="col-4 step-box">
                <h6 class="step-title-0">
                    <span class="fa fa-check"></span>
                    <span class="break-line"></span>
                    <span class="step-title">FEEDBACK</span>
                </h6>
            </div>
            <div class="col-4 step-box active">
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
                <div>
                    <form action="{{ route('submitFeedback') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="container">
                            <table>
                                @include('confirmationCC')
                                @include('confirmationSqd')
                                @include('confirmationSuggestion')
                            </table>
                        </div>
                        <div class="container text-center d-flex justify-content-center my-3">
                            <input class="text-center btn btn-primary  rounded-1 prev mr-2 buttons"
                            type="submit" value="Confirm" id="confirm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

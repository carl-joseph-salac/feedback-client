@extends('layout.app')

{{-- @section('addtionalStyle')

@endsection

@section('additionalScript')

@endsection --}}

@section('section')
    <div class="card rounded-0">
        <div class="row justify-content-center mx-auto step-container">
            <div class="col-md-3 col-4 step-box">
                <h6 class="step-title-0">
                    <span class="fa fa-check"></span>
                    <span class="break-line"></span>
                    <span class="step-title">TERMS AND CONDITIONS</span>
                </h6>
            </div>
            <div class="col-md-3 col-4 step-box active">
                <h6 class="step-title-0">
                    <span class="fa fa-circle"></span>
                    <span class="break-line"></span>
                    <span class="step-title">FEEDBACK</span>
                </h6>
            </div>
            <div class="col-md-3 col-4 step-box">
                <h6 class="step-title-0">
                    <span class="fa fa-circle"></span>
                    <span class="break-line"></span>
                    <span class="step-title">CONFIRMATION</span>
                </h6>
            </div>
        </div>

        <div class="container mb-3 mt-0">
            <div class="container border">
                <h4 class="heading mb-2 text-center">Feedback</h4>
                <div class="px-4">
                    <p class="mb-3">
                        INSTRUCTIONS: <b>Check mark (√)</b> your answer to the Citizen's Charter (CC) questions. The
                        Citizen's Charter is an official document that reflects the sercvies of a government agency/office
                        including its requirements, fees, and processing times among others.
                    </p>
                    <form action="{{ route('store') }}" method="post" class="mt-2">
                        @csrf
                        @method('post')
                        <table>
                            <tr>
                                <td style="width: 50px;"><strong>{{ strtoupper($cc->question_no) }}</strong></td>
                                <td colspan="3">{{ $cc->question }}</td>
                            </tr>
                            <!-- Add hidden input fields for $cc->question_no and $cc->question -->
                            <input type="hidden" name="question_no" value="{{ $cc->question_no }}">
                            <input type="hidden" name="question" value="{{ $cc->question }}">
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="checkbox" name="cc1" id="cc1"
                                        value="{{ $cc->choices1 }}">
                                </td>
                                <td name="cc1" colspan="2">1. {{ $cc->choices1 }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="checkbox" name="cc2" id="cc2"
                                        value="{{ $cc->choices2 }}">
                                </td>
                                <td name="cc2" colspan="2">2. {{ $cc->choices2 }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="checkbox" name="cc3" id="cc3"
                                        value="3. {{ $cc->choices3 }}">
                                </td>
                                <td name="cc3" colspan="2">3. {{ $cc->choices3 }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="checkbox" name="cc4" id="cc4"
                                        value="4. {{ $cc->choices4 }}">
                                </td>
                                <td name="cc4" colspan="2">4. {{ $cc->choices4 }} </td>
                            </tr>
                        </table>
                        <div class="container text-center d-flex justify-content-center my-3">
                            <input class="btn btn-primary" type="submit" value="Next" id="next">
                            {{-- <a href="{{ route('termsAndCondition') }}"
                                class="text-center btn btn-success rounded-1 prev mr-2">Back</a>
                            <a href="{{ route('cc2') }}" id="next" class="btn btn-success rounded-1 ml-2 disabled">
                                Next
                            </a> --}}
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

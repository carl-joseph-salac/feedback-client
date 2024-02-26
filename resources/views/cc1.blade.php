@extends('layout.app')

@section('addtionalStyle')
    @include('layout.ccStyle')
@endsection

@section('section')
    <div class="card rounded-0">
        @include('layout.feedbackHeader')

        {{-- <div class="container">
            <!-- Display validation error for cc1 -->
            @error('cc1')
                <div class="alert alert-danger alert-dismissable d-flex justify-content-between align-items-center"
                    role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                </div>
            @enderror

            <!-- Display validation error for cc2 -->
            @error('cc2')
                <div class="alert alert-danger alert-dismissable d-flex justify-content-between align-items-center"
                    role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                </div>
            @enderror

            <!-- Display validation error for cc3 -->
            @error('cc3')
                <div class="alert alert-danger alert-dismissable d-flex justify-content-between align-items-center"
                    role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                </div>
            @enderror

            <!-- Display validation error for cc4 -->
            @error('cc4')
                <div class="alert alert-danger alert-dismissable d-flex justify-content-between align-items-center"
                    role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" aria-label="Close" data-bs-dismiss="alert"></button>
                </div>
            @enderror
        </div> --}}

        <div class="container mb-3 mt-0">
            <div class="container border">
                {{-- <h4 class="heading mb-2 text-center">Feedback</h4> --}}
                <div class="px-4">
                    @include('layout.ccInstruction')
                    <form action="{{ route('cc2') }}" method="post" class="mt-2">
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
                                <td><input class="checkboxes" type="checkbox" name="cc1Choices1" id="cc1Choices1"
                                        value="{{ $cc->choices1 }}" {{ session('cc1Choices1') ? 'checked' : '' }}>
                                </td>
                                <td name="cc1" colspan="2">1. {{ $cc->choices1 }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="checkbox" name="cc1Choices2" id="cc1Choices2"
                                        value="{{ $cc->choices2 }}" {{ session('cc1Choices2') ? 'checked' : '' }}>
                                </td>
                                <td name="cc2" colspan="2">2. {{ $cc->choices2 }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="checkbox" name="cc1Choices3" id="cc1Choices3"
                                        value="{{ $cc->choices3 }}" {{ session('cc1Choices3') ? 'checked' : '' }}>
                                </td>
                                <td name="cc3" colspan="2">3. {{ $cc->choices3 }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="checkbox" name="cc1Choices4" id="cc1Choices4"
                                        value="{{ $cc->choices4 }}" {{ session('cc1Choices4') ? 'checked' : '' }}>
                                </td>
                                <td name="cc4" colspan="2">4. {{ $cc->choices4 }} </td>
                            </tr>
                        </table>
                        <div class="container text-center d-flex justify-content-center my-3">
                            <a href="{{ route('termsAndCondition') }}" class="text-center btn btn-success rounded-1 prev mr-2">Back</a>
                            <input class="text-center btn btn-success rounded-1 prev mr-2" type="submit" value="Next" id="next">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additionalScript')
    @include('layout.ccScript')
@endsection

@extends('layout.app')

@section('additionalStyle')
    @include('layout.ccStyle')
@endsection

@section('section')
    <div class="card">
        @include('layout.depedLogo')
        @include('layout.feedbackHeader')
        <div class="container mb-3 mt-0">
            <div class="container rounded border">
                <div class="container px-4 justify-content-center">
                    @include('layout.ccInstruction')
                    <form action="{{ route(session('cc1Edit', 'cc2')) }}" method="post" class="mt-2">
                        @csrf
                        @method('post')
                        <table  class="mx-auto">
                            <tr>
                                <td style="width: 50px;"><strong>{{ strtoupper($cc->question_no) }}</strong></td>
                                <td colspan="2">{{ $cc->question }}</td>
                            </tr>
                            <tr>
                                <td class="d-none d-md-table-cell"></td>
                                <td class="checkboxes text-center">
                                    <input class="radios" type="radio" name="cc1" id="choices1"
                                        value="{{ $cc->choices1 }}" {{ session('cc1') == $cc->choices1 ? 'checked' : '' }}>
                                    <label for="choices1"></label>
                                </td>
                                <td name="choices1" colspan="2">1. {{ $cc->choices1 }}</td>
                            </tr>
                            <tr>
                                <td class="d-none d-md-table-cell"></td>
                                <td class="checkboxes text-center"><input class="radios" type="radio" name="cc1" id="choices2"
                                        value="{{ $cc->choices2 }}" {{ session('cc1') == $cc->choices2 ? 'checked' : '' }}>
                                    <label for="choices2"></label>
                                </td>
                                <td name="choices2" colspan="2">2. {{ $cc->choices2 }} </td>
                            </tr>
                            <tr>
                                <td class="d-none d-md-table-cell"></td>
                                <td class="checkboxes text-center"><input class="radios" type="radio" name="cc1" id="choices3"
                                        value="{{ $cc->choices3 }}" {{ session('cc1') == $cc->choices3 ? 'checked' : '' }}>
                                    <label for="choices3"></label>
                                </td>
                                <td name="choices3" colspan="2">3. {{ $cc->choices3 }} </td>
                            </tr>
                            <tr>
                                <td class="d-none d-md-table-cell"></td>
                                <td class="checkboxes text-center"><input class="radios" type="radio" name="cc1" id="choices4"
                                        value="{{ $cc->choices4 }}"
                                        {{ session('cc1') == $cc->choices4 ? 'checked' : '' }}>
                                    <label for="choices4"></label>
                                </td>
                                <td name="choices4" colspan="2">4. {{ $cc->choices4 }} </td>
                            </tr>
                        </table>
                        <div class="container text-center d-flex justify-content-center my-3">
                            @if (!session('cc1Edit'))
                                <a href="{{ route('termsAndCondition') }}"
                                    class="text-center btn btn-primary rounded-1 prev mr-2 1" id="back">
                                    Back
                                </a>
                            @endif
                            <input class="text-center btn btn-primary rounded-1 prev mr-2" type="submit"
                                value="{{ session('Confirm', 'Next') }}" id="next">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additionalScript')
    @include('layout.ccScript')
    {{-- This code will only run if the user click the edit button of cc1 in confirmation page --}}
    @if (session('cc1Edit'))
        <script>
            /* If cc1 answer is choices number 4 the button will redirect the user to confirmaton page */
            if ('{{ session('cc1') }}' == '{{ session('cc1Choices4') }}')
                $(document).ready(function() {
                    $('.radios').change(function() {
                        if (this.id == 'choices4') {
                            $('#next').val('{{ session('Confirm') }}');
                            $('form').attr('action', '{{ route(session('cc1Edit')) }}');
                        } else {
                            /* This code will only run if the value of cc2 session is equal to 0, which means that cc2 question is not yet answered */
                            /* The button will redirect the user to cc2 question */
                            if ('{{ session('cc2') }}' == 0) {
                                $('#next').val('Next');
                                $('form').attr('action', '{{ route('cc2') }}');
                            }
                        }
                    });
                });
        </script>
    @endif
@endsection

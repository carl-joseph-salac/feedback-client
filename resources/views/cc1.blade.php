@extends('layout.app')

@section('additionalStyle')
    @include('layout.ccStyle')
@endsection

@section('section')
    <div class="card rounded-0">
        @include('layout.feedbackHeader')
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
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="radio" name="cc1" value="{{ $cc->choices1 }}"
                                    {{ session('cc1') == $cc->choices1 ? 'checked' : '' }}>
                                </td>
                                <td name="cc1" colspan="2">1. {{ $cc->choices1 }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="radio" name="cc1" value="{{ $cc->choices2 }}"
                                    {{ session('cc1') == $cc->choices2 ? 'checked' : '' }}>
                                </td>
                                <td name="cc2" colspan="2">2. {{ $cc->choices2 }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="radio" name="cc1" value="{{ $cc->choices3 }}"
                                    {{ session('cc1') == $cc->choices3 ? 'checked' : '' }}>
                                </td>
                                <td name="cc3" colspan="2">3. {{ $cc->choices3 }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input class="checkboxes" type="radio" name="cc1" value="{{ $cc->choices4 }}"
                                    {{ session('cc1') == $cc->choices4 ? 'checked' : '' }}>
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

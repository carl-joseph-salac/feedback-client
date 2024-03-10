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
            <div class="px-4">
                @include('layout.ccInstruction')
                <form action="{{ route(session('cc3Edit', 'sqd0')) }}" method="post" class="mt-2">
                    @csrf
                    @method('post')
                    <table class="mx-auto">
                        <tr>
                            <td style="width: 50px;"><strong>{{strtoupper($cc->question_no)}}</strong></td>
                            <td colspan="3">{{$cc->question}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="checkboxes">
                                <input class="radios" type="radio" name="cc3" id="choices1"
                                value="{{$cc->choices1}}" {{ session('cc3') == $cc->choices1 ? 'checked' : '' }}>
                                <label for="choices1"></label>
                            </td>
                            <td name="choices1" colspan="2">1.  {{$cc->choices1}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="checkboxes">
                                <input class="radios" type="radio" name="cc3" id="choices2"
                                value="{{$cc->choices2}}" {{ session('cc3') == $cc->choices2 ? 'checked' : '' }}>
                                <label for="choices2"></label>
                            </td>
                            <td name="choices2" colspan="2">2. {{$cc->choices2}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="checkboxes">
                                <input class="radios" type="radio" name="cc3" id="choices3"
                                value="{{$cc->choices3}}" {{ session('cc3') == $cc->choices3 ? 'checked' : '' }}>
                                <label for="choices3"></label>
                            </td>
                            <td name="choices3" colspan="2">3. {{$cc->choices3}} </td>
                        </tr>
                    </table>
                    <div class="container text-center d-flex justify-content-center my-3">
                        @if (!session('cc3Edit'))
                                <a href="{{ route('cc2Checked') }}"
                                    class="text-center btn btn-primary rounded-1 prev mr-2" id="back">
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
@endsection


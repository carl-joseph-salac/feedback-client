@extends('layout.app')

@section('additionalStyle')
    @include('layout.ccStyle')
@endsection

@section('section')
<div class="card rounded-0">
    @include('layout.feedbackHeader')

    <div class="container mb-3 mt-0">
        <div class="container border">
            <div class="px-4">
                @include('layout.ccInstruction')
                <form action="{{ route('cc3') }}" method="post" class="mt-2">
                    @csrf
                    @method('post')
                    <table >
                        <tr>
                            <td style="width: 50px;"><strong>{{strtoupper($cc->question_no)}}</strong></td>
                            <td colspan="3">{{$cc->question}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="radio" name="cc2" value="{{$cc->choices1}}"
                                {{ session('cc2') == $cc->choices1 ? 'checked' : '' }}></td>
                            <td colspan="2">1.  {{$cc->choices1}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="radio" name="cc2" value="{{$cc->choices2}}"
                                {{ session('cc2') == $cc->choices2 ? 'checked' : '' }}></td>
                            <td colspan="2">2. {{$cc->choices2}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="radio" name="cc2" value="{{$cc->choices3}}"
                                {{ session('cc2') == $cc->choices3 ? 'checked' : '' }}></td>
                            <td colspan="2">3. {{$cc->choices3}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="radio" name="cc2" id="cc2Choices4" value="{{$cc->choices4}}"
                                {{ session('cc2') == $cc->choices4 ? 'checked' : '' }}></td>
                            <td colspan="2">4. {{$cc->choices4}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="radio" name="cc2" id="cc2Choices5" value="{{$cc->choices5}}"
                                {{ session('cc2') == $cc->choices5 ? 'checked' : '' }}></td>
                            <td colspan="2">5. {{$cc->choices5}} </td>
                        </tr>
                    </table>
                    <div class="container text-center d-flex justify-content-center my-3">
                        <a href="{{ route('cc1Checked') }}"
                            class="text-center btn btn-success rounded-1 prev mr-2">Back</a>
                        <input class="text-center btn btn-success rounded-1 prev mr-2" type="submit" value="Next"
                            id="next">
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



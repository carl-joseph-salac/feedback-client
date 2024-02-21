@extends('layout.app')

@section('section')
<div class="card rounded-0">
    @include('layout.feedbackHeader')

    <div class="container mb-3 mt-0">
        <div class="container border">
            <div class="px-4">
                @include('layout.ccInstruction')
                <form action="{{ route('sqd0') }}" method="post" class="mt-2">
                    @csrf
                    @method('post')
                    <table >
                        <tr>
                            <td style="width: 50px;"><strong>{{strtoupper($cc->question_no)}}</strong></td>
                            <td colspan="3">{{$cc->question}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc3Choices1" id="cc3Choices1" value="" {{ session('cc3Choices1') ? 'checked' : '' }}></td>
                            <td colspan="2">1.  {{$cc->choices1}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc3Choices2" id="cc3Choices2" value="" {{ session('cc3Choices2') ? 'checked' : '' }}></td>
                            <td colspan="2">2. {{$cc->choices2}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc3Choices3" id="cc3Choices3" value="" {{ session('cc3Choices3') ? 'checked' : '' }}></td>
                            <td colspan="2">3. {{$cc->choices3}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc3Choices4" id="cc3Choices4" value="" {{ session('cc3Choices4') ? 'checked' : '' }}></td>
                            <td colspan="2">4. {{$cc->choices4}} </td>
                        </tr>
                    </table>
                    <div class="container text-center d-flex justify-content-center my-3">
                        <a href="{{ route('cc2Checked') }}"
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



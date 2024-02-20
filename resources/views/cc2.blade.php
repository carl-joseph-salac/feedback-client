@extends('layout.app')

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
                    INSTRUCTIONS: <b>Check mark (√)</b> your answer to the Citizen's Charter (CC) questions. The Citizen's Charter is an official document that reflects the sercvies of a government agency/office including its requirements, fees, and processing times among others.
                </p>
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
                            <td ><input class="checkboxes" type="checkbox" name="cc2Choices1" id="cc2Choices1" value="" {{ session('cc2Choices1') ? 'checked' : '' }}></td>
                            <td colspan="2">1.  {{$cc->choices1}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2Choices2" id="cc2Choices2" value="" {{ session('cc2Choices2') ? 'checked' : '' }}></td>
                            <td colspan="2">2. {{$cc->choices2}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2Choices3" id="cc2Choices3" value="" {{ session('cc2Choices3') ? 'checked' : '' }}></td>
                            <td colspan="2">3. {{$cc->choices3}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2Choices4" id="cc2Choices4" value="" {{ session('cc2Choices4') ? 'checked' : '' }}></td>
                            <td colspan="2">4. {{$cc->choices4}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2Choices5" id="cc2Choices5" value="" {{ session('cc2Choices5') ? 'checked' : '' }}></td>
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



@extends('layout.app')

@section('addtionalStyle')
    <style>
        table tr td{
            padding: 4px;
        }
    </style>
@endsection

@section('additionalScript')
    <script>
        $(".checkboxes").change(function(){
            $(".checkboxes").prop('checked',false);
            $(this).prop('checked',true);
        });
    </script>
@endsection

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
                    INSTRUCTIONS: For SQD 0-8, please put a <b>check mark (√)</b> that best corresponds to your answer.
                </p>
                <form action="" method="post" class="mt-2">
                    <table >
                        <tr>
                            <td style="width: 50px;"><strong>{{strtoupper($sqd->question_no)}}</strong></td>
                            <td colspan="3">{{$sqd->question}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2" id="" value="cc1"></td>
                            <td colspan="2"> {{$sqd->choices1}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2" id="" value="cc1"></td>
                            <td colspan="2"> {{$sqd->choices2}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2" id="" value="cc1"></td>
                            <td colspan="2"> {{$sqd->choices3}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2" id="" value="cc1"></td>
                            <td colspan="2"> {{$sqd->choices4}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2" id="" value="cc1"></td>
                            <td colspan="2"> {{$sqd->choices5}} </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td ><input class="checkboxes" type="checkbox" name="cc2" id="" value="cc1"></td>
                            <td colspan="2"> {{$sqd->choices6}} </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="container text-center d-flex justify-content-center my-3">
                <a href="{{ route('cc2') }}" class="text-center btn btn-success rounded-1 prev mr-2">Back</a>
                <a href="{{route('sqd0') }}" id="next" class="btn btn-success rounded-1 ml-2">
                    Next
                </a>
            </div>
        </div>
    </div>
</div>
@endsection



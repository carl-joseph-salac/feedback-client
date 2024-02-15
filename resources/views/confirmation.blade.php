@extends('layout.app')
@section('confirmation')
<div class="card b-0 rounded-0">
    <div class="row justify-content-center mx-auto step-container">
        <div class="col-md-3 col-4 step-box">
            <h6 class="step-title-0">
                <span class="fa fa-check"></span>
                <span class="break-line"></span>
                <span class="step-title">TERMS AND CONDITIONS</span>
            </h6>
        </div>
        <div class="col-md-3 col-4 step-box">
            <h6 class="step-title-0">
                <span class="fa fa-check"></span>
                <span class="break-line"></span>
                <span class="step-title">FEEDBACK</span>
            </h6>
        </div>
        <div class="col-md-3 col-4 step-box active">
            <h6 class="step-title-0">
                <span class="fa fa-circle"></span>
                <span class="break-line"></span>
                <span class="step-title">CONFIRMATION</span>
            </h6>
        </div>
    </div>
    <div class="p-3 justify-content-center text-center">
        <h4 class="heading">Confirmation</h4>
        <div class="row d-flex justify-content-center">
            <div class="mb-4">
                <h6 class="confirm">Verify all entered details and press confirm</h6>
            </div>
        </div>
        <a href="{{ route('feedback') }}" class="btn btn-success rounded-0 mb-5 prev">Back</a>
        <a href="{{ route('thankyou') }}" id="next3" class="btn btn-success rounded-0 mb-5 next">Confirm</a>
    </div>
</div>
@endsection


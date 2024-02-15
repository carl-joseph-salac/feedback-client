@extends('layout.app')
@section('feedback')
<div class="card b-0 rounded-0">
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
    <div class="p-3 justify-content-center text-center">
        <h4 class="heading">Feedback</h4>
        <div class="row justify-content-center mb-4">
            <div class="col-xl-7 col-lg-8 col-10 list text-left">
                <label class="text-danger mb-3">* Required</label>
                <div class="form-group">
                    <label class="form-control-label">Subject * :</label>
                    <input type="text" id="sub" name="subject" placeholder="Subject" class="form-control" onblur="validate(1)">
                </div>
                <div class="form-group">
                    <label class="form-control-label">Message * :</label>
                    <textarea type="textarea" id="msg" name="message" placeholder="Message" class="form-control" onblur="validate(2)"></textarea>
                </div>
            </div>
        </div>
        <a href="{{ route('termsAndCondition') }}" class="btn btn-success rounded-1 mb-5 prev" disabled>Back</a>
        <a href="{{ route('confirmation') }}" id="next2" class="btn btn-success rounded-1 mb-5 next" onclick="validate(0)">Submit</a>
    </div>
</div>
@endsection



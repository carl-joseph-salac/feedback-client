@extends('layout.app')
@section('termsAndCondition')
<div class="card b-0 rounded-0 show">
    <div class="row justify-content-center mx-auto step-container">
        <div class="col-md-3 col-4 step-box active">
            <h6 class="step-title-0">
                <span class="fa fa-circle"></span>
                <span class="break-line"></span>
                <span class="step-title">TERMS AND CONDITIONS</span></h6>
        </div>
        <div class="col-md-3 col-4 step-box">
            <h6 class="step-title-0">
                <span class="fa fa-circle"></span>
                <span class="break-line"></span>
                <span class="step-title">FEEDBACK</span></h6>
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
        <h4 class="heading">Terms and Conditions</h4>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-1 col-0"></div>
            <div class="col-lg-9 col-md-11 col-12 list text-left">
                <div class="custom-control custom-checkbox mb-4">
                    <input id="customCheck1" type="checkbox" class="custom-control-input" {{-- checked="1" --}}>
                    <label for="customCheck1" class="custom-control-label">I have read and agree to the following Terms and Conditions</label>
                </div>
                <ol type="1" class="pl-3 text-muted mb-5">
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectuer adipiscing eut, sed diamnanummy</li>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Consectuer adipiscing eut, sed diamnanummy</li>
                </ol>
            </div>
        </div>
        <a href="{{ route('feedback') }}" name="next" id="next1" class="btn btn-success rounded-1 mb-5 next" @unlesschecked('customCheck1') disabled @endunless>
            START
        </a>
    </div>
</div>
@endsection


@extends('layout.app')

@section('section')
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
        <div class="col-md-3 col-4 step-box">
            <h6 class="step-title-0">
                <span class="fa fa-check"></span>
                <span class="break-line"></span>
                <span class="step-title">CONFIRMATION</span>
            </h6>
        </div>
    </div>
    <div class="p-3 justify-content-center text-center">
        <h3 class="heading">Thank You for your Feedback!</h3>
        <div class="row justify-content-center">
            <div class="">
                <img src="{{ asset('images/check-feedback.gif')}}" class="fit-image mb-2" style="width: 200px;">
                <br>
                <a href="http://20.20.23.72/client-log-master/public/clientLogs/applicationForm"
                    class="btn btn-primary btn-lg rounded-1" type="button" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="fa fa-location-arrow mr-1"></i>
                    Go to Application Form
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

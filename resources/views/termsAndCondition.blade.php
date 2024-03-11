@extends('layout.app')

@section('additionalStyle')
    <style>
        #customLabel:hover {
            cursor: pointer;
        }
    </style>
@endsection

@section('section')
    <div class="card">
        @include('layout.depedLogo')
        <div class="row justify-content-center mx-auto step-container text-center mb-4">
            <div class="col-4 step-box active">
                <h6 class="step-title-0">
                    <span class="fa fa-circle"></span>
                    <span class="break-line"></span>
                    <span class="step-title text-white">TERMS AND CONDITIONS</span>
                </h6>
            </div>
            <div class="col-4 step-box">
                <h6 class="step-title-0">
                    <span class="fa fa-circle"></span>
                    <span class="break-line"></span>
                    <span class="step-title">FEEDBACK</span>
                </h6>
            </div>
            <div class="col-4 step-box">
                <h6 class="step-title-0">
                    <span class="fa fa-circle"></span>
                    <span class="break-line"></span>
                    <span class="step-title">CONFIRMATION</span>
                </h6>
            </div>
        </div>
        <form action="{{ route('cc1') }}" method="post">
            @csrf
            @method('post')
            <div class="p-3 justify-content-center text-center">
                <h4 class="heading">Terms and Conditions</h4>
                <div class="custom-control custom-checkbox mb-4 ">
                    <input id="customCheck" name="customCheck" type="checkbox"
                        class="custom-control-input hover-cursor-pointer" {{ $customCheck ? 'checked' : '' }}>
                    <label id="customLabel" for="customCheck" class="custom-control-label" style="font-size: 16px">
                        I have read and agree to the following Terms and Conditions
                    </label>
                </div>
                <div class="row text-left px-5 mb-4">
                    <p>
                        This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices.
                        Your feedback on your recently concluded transaction will help this office provide a better
                        service. Personal information shared will be kept confidential and you always have the option to
                        not answer this form.
                    </p>
                    <div class="col-lg-3 col-md-1 col-0"></div>
                    <div class="col-lg-9 col-md-11 col-12 list ">

                    </div>
                </div>
                <button type="submit" disabled id="start" class="btn btn-primary rounded-1 mb-4 px-4">
                    START
                </button>
            </div>
            <div class="ml-md-3 text-md-left text-center">
                <a href="http://20.20.23.72/client-log-master/public/clientLogs/applicationForm"
                    class="btn btn-outline-danger btn-md rounded-1" type="button" data-toggle="tooltip" data-placement="top"
                    title="Edit">
                    <i class="fa fa-location-arrow mr-1"></i>
                    Go to Application Form
                </a>
            </div>
        </form>
    </div>
@endsection

@section('additionalScript')
    <script>
        const startBtn = document.getElementById("start");
        const checkbox = document.getElementById("customCheck");

        checkbox.addEventListener("change", function() {
            if (this.checked) {
                startBtn.removeAttribute("disabled");
            } else {
                startBtn.setAttribute("disabled", "disabled");
            }
        });

        //function to handle enabling/disabling the button based on checkbox state
        function handleButtonState() {
            const startBtn = document.getElementById("start");
            const checkbox = document.getElementById("customCheck");

            // Check if the checkbox was previously checked (based on session data)
            const checkboxChecked = "{{ session('customCheck') }}" == '1'; // Convert session data to boolean

            // Enable or disable the button based on checkbox state
            if (checkboxChecked) {
                startBtn.removeAttribute("disabled");
            } else {
                startBtn.setAttribute("disabled", "disabled");
            }
        }

        // Enable start button if customCheck session variable is not empty on window load.
        window.onload = function() {
            var customCheck = "{{ session('customCheck', '') }}";
            if (customCheck !== '') {
                document.getElementById('start').disabled = false;
            }
        };
    </script>
@endsection

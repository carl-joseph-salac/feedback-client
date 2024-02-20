@extends('layout.app')

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
    </script>
@endsection

@section('section')
    <div class="card b-0 rounded-0 show">
        <div class="row justify-content-center mx-auto step-container">
            <div class="col-md-3 col-4 step-box active">
                <h6 class="step-title-0">
                    <span class="fa fa-circle"></span>
                    <span class="break-line"></span>
                    <span class="step-title">TERMS AND CONDITIONS</span>
                </h6>
            </div>
            <div class="col-md-3 col-4 step-box">
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
        <form action="{{ route('cc1') }}" method="post">
            @csrf
            @method('post')
            <div class="p-3 justify-content-center text-center">
                <h4 class="heading">Terms and Conditions</h4>
                    <div class="custom-control custom-checkbox mb-4">
                        <input id="customCheck" type="checkbox" class="custom-control-input hover-cursor-pointer" {{ session('customCheck') ? 'checked' : '' }}>
                        <label for="customCheck" class="custom-control-label">
                            I have read and agree to the following Terms and Conditions
                        </label>
                    </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-1 col-0"></div>
                    <div class="col-lg-9 col-md-11 col-12 list text-left">
                        <ol type="1" class="pl-3 text-muted mb-5">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectuer adipiscing eut, sed diamnanummy</li>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectuer adipiscing eut, sed diamnanummy</li>
                        </ol>
                    </div>
                </div>
                <button type="submit" disabled id="start" class="btn btn-success rounded-1 mb-5">
                    START
                </button>
                {{-- <a href="{{route('cc1') }}" id="start" class="btn btn-success rounded-1 mb-5 disabled" style="pointer-events: none; cursor: default;">
                START
            </a> --}}
            </div>
        </form>
    </div>
@endsection

{{-- //Using anchor tag
    <form method="post" action="{{ route('cc1') }}">
                @csrf
                @method('post')
                <input class="text-center btn btn-success rounded-1 prev mr-2 disabled" type="submit" value="Next" id="next">
            </form>

<script>
    //Enable button whenever checkbox is checked, disable when unchecked
        const startBtn = document.getElementById("next");
        const checkbox = document.getElementById("customCheck");

        checkbox.addEventListener("change", function() {
            if (this.checked) {
                startBtn.classList.remove("disabled");
                startBtn.style.pointerEvents = "auto";
                startBtn.style.cursor = "pointer";
            } else {
                startBtn.classList.add("disabled");
                startBtn.style.pointerEvents = "none";
                startBtn.style.cursor = "default";
            }
        });


</script> --}}

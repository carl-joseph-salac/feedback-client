@extends('layout.app')

@section('addtionalStyle')
    <style>
        table tr td {
            padding: 4px;
        }

        @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css);

        /* * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html,
            body {
                width: 100%;
                height: 100%;
            }

            body {
                font-family: Arial, sans-serif;
            } */

        .container-rating {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        /* .rating-wrap {
                max-width: 480px;
                margin: auto;
                padding: 15px;
                box-shadow: 0 0 3px 0 rgba(0, 0, 0, .2);
                text-align: center;
            } */

        /* .center {
                width: 162px;
                margin: auto;
            } */


        #rating-value {
            width: 210px;
            margin: 40px auto 0;
            padding: 10px 5px;
            text-align: center;
            /* box-shadow: inset 0 0 2px 1px rgba(46, 204, 113, .2); */
        }

        /*styling star rating*/
        .rating {
            border: none;
            float: left;
        }

        .rating>input {
            display: none;
        }

        .rating>label:before {
            content: '\f005';
            font-family: FontAwesome;
            margin: 5px;
            font-size: 2rem;
            display: inline-block;
            cursor: pointer;
        }

        .rating>.half:before {
            content: '\f089';
            position: absolute;
            cursor: pointer;
        }


        .rating>label {
            color: #ddd;
            float: right;
            cursor: pointer;
        }

        .rating>input:checked~label,
        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #2ce679;
        }

        .rating>input:checked+label:hover,
        .rating>input:checked~label:hover,
        .rating>label:hover~input:checked~label,
        .rating>input:checked~label:hover~label {
            color: #2ddc76;
        }
    </style>
@endsection

@section('additionalScript')
    <script>
        $(".checkboxes").change(function() {
            $(".checkboxes").prop('checked', false);
            $(this).prop('checked', true);
        });

        let star = document.querySelectorAll('input');
        let showValue = document.querySelector('#rating-value');

        for (let i = 0; i < star.length; i++) {
            star[i].addEventListener('click', function() {
                i = this.value;

                showValue.innerHTML = i;
            });
        }
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
                    <p>
                        <strong class="mr-3">{{strtoupper($sqd->question_no)}}</strong>{{$sqd->question}}
                    </p>

                    <div class="container-rating">

                        <div class="rating-wrap">
                            <div class="center text-center">
                                <fieldset class="rating">
                                    <input type="radio" id="star5" name="rating" value="{{$sqd->choices5}}" /><label
                                        for="star5" class="full" title="Awesome"></label>
                                    <input type="radio" id="star4" name="rating" value="{{$sqd->choices4}}" /><label
                                        for="star4" class="full"></label>
                                    <input type="radio" id="star3" name="rating"
                                        value="{{$sqd->choices3}}" /><label for="star3" class="full"></label>
                                    <input type="radio" id="star2" name="rating" value="{{$sqd->choices2}}" /><label
                                        for="star2" class="full"></label>
                                    <input type="radio" id="star1" name="rating" value="{{$sqd->choices1}}" /><label
                                        for="star1" class="full"></label>
                                </fieldset>
                            </div>

                            <h6 id="rating-value"></h6>
                        </div>
                    </div>

                </div>
                <div class="container text-center d-flex justify-content-center my-3">
                    <a href="{{ route('cc3') }}" class="text-center btn btn-success rounded-1 prev mr-2">Back</a>
                    <a href="{{ route('sqd1') }}" id="next" class="btn btn-success rounded-1 ml-2">
                        Next
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

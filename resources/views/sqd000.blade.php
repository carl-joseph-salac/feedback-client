@extends('layout.app')

@section('addtionalStyle')
    <style>
        table tr td {
            padding: 4px;
        }

        @import "compass/css3";

        $unchecked-star: '\2606';
        $unchecked-color: #888;
        $checked-star: '\2605';
        $checked-color: #e52;

        .star-cb-group {
            /* remove inline-block whitespace */
            font-size: 0;

            * {
                font-size: 1rem;
            }

            /* flip the order so we can use the + and ~ combinators */
            unicode-bidi: bidi-override;
            direction: rtl;

            &>input {
                display: none;

                &+label {
                    /* only enough room for the star */
                    display: inline-block;
                    overflow: hidden;
                    text-indent: 9999px;
                    width: 1em;
                    white-space: nowrap;
                    cursor: pointer;

                    &:before {
                        display: inline-block;
                        text-indent: -9999px;
                        content: $unchecked-star;
                        color: $unchecked-color;
                    }
                }

                &:checked~label:before,
                &+label:hover~label:before,
                &+label:hover:before {
                    content: $checked-star;
                    color: #e52;
                    text-shadow: 0 0 1px #333;
                }
            }

            /* the hidden clearer */
            &>.star-cb-clear+label {
                text-indent: -9999px;
                width: .5em;
                margin-left: -.5em;
            }

            &>.star-cb-clear+label:before {
                width: .5em;
            }

            &:hover>input+label:before {
                content: $unchecked-star;
                color: $unchecked-color;
                text-shadow: none;
            }

            &:hover>input+label:hover~label:before,
            &:hover>input+label:hover:before {
                content: $checked-star;
                color: $checked-color;
                text-shadow: 0 0 1px #333;
            }
        }

        // extra styles
        :root {
            font-size: 2em;
            font-family: Helvetica, arial, sans-serif;
        }

        /* body {
            background: #333;
            color: $unchecked-color;
        } */

        fieldset {
            border: 0;
            background: #222;
            width: 5em;
            border-radius: 1px;
            padding: 1em 1.5em 0.9em;
            margin: 1em auto;
        }

        #log {
            margin: 1em auto;
            width: 5em;
            text-align: center;
            background: transparent;
        }

        star-h1 {
            text-align: center;
        }
    </style>
@endsection

@section('additionalScript')
    <script>
        $(".checkboxes").change(function() {
            $(".checkboxes").prop('checked', false);
            $(this).prop('checked', true);
        });

        var logID = 'log',
            log = $('<div id="' + logID + '"></div>');
        $('body').append(log);
        $('[type*="radio"]').change(function() {
            var me = $(this);
            log.html(me.attr('value'));
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

                    <h1 class="star-h1">Star Rating</h1>
                    <form>
                        <fieldset>
                            <span class="star-cb-group">
                                <input type="radio" id="rating-5" name="rating" value="5" /><label
                                    for="rating-5">5</label>
                                <input type="radio" id="rating-4" name="rating" value="4"
                                    checked="checked" /><label for="rating-4">4</label>
                                <input type="radio" id="rating-3" name="rating" value="3" /><label
                                    for="rating-3">3</label>
                                <input type="radio" id="rating-2" name="rating" value="2" /><label
                                    for="rating-2">2</label>
                                <input type="radio" id="rating-1" name="rating" value="1" /><label
                                    for="rating-1">1</label>
                                <input type="radio" id="rating-0" name="rating" value="0"
                                    class="star-cb-clear" /><label for="rating-0">0</label>
                            </span>
                        </fieldset>
                    </form>

                </div>
                <div class="container text-center d-flex justify-content-center my-3">
                    <a href="{{ route('cc2') }}" class="text-center btn btn-success rounded-1 prev mr-2">Back</a>
                    <a href="{{ route('sqd0') }}" id="next" class="btn btn-success rounded-1 ml-2">
                        Next
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.app')

@section('additionalStyle')
    @include('layout.sqdStyle')
@endsection

@section('section')
    <div class="card rounded-0">
        @include('layout.feedbackHeader')
        <div class="container mb-3 mt-0">
            <div class="container rounded border">
                <div class="px-4">
                    @include('layout.sqdInstruction')
                    <form action="{{ route(session('sqd7Edit', 'sqd8')) }}" method="post">
                        @csrf
                        @method('post')
                        <p>
                            <strong class="mr-3">{{strtoupper($sqd->question_no)}}</strong>{{$sqd->question}}
                        </p>
                        <div class="container-rating">
                            <div class="rating-wrap">
                                <div class="center text-center">
                                    <fieldset class="rating">
                                        <input type="radio" id="star5" name="sqd7"
                                        value="{{$sqd->choices5}}" {{ session('sqd7') == $sqd->choices5 ? 'checked' : '' }}/>
                                        <label for="star5" class="full" title="Awesome"></label>

                                        <input type="radio" id="star4" name="sqd7"
                                        value="{{$sqd->choices4}}" {{ session('sqd7') == $sqd->choices4 ? 'checked' : '' }}/>
                                        <label for="star4" class="full"></label>

                                        <input type="radio" id="star3" name="sqd7"
                                        value="{{$sqd->choices3}}" {{ session('sqd7') == $sqd->choices3 ? 'checked' : '' }}/>
                                        <label for="star3" class="full"></label>

                                        <input type="radio" id="star2" name="sqd7"
                                        value="{{$sqd->choices2}}" {{ session('sqd7') == $sqd->choices2 ? 'checked' : '' }}/>
                                        <label for="star2" class="full"></label>

                                        <input type="radio" id="star1" name="sqd7"
                                        value="{{$sqd->choices1}}" {{ session('sqd7') == $sqd->choices1 ? 'checked' : '' }}/>
                                        <label for="star1" class="full"></label>
                                        <h6 id="rating-value">{{ session('sqd7') }}</h6>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="container text-center d-flex justify-content-center my-3">
                            @if (!session('sqd7Edit'))
                                <a href="{{ route('sqd6Star') }}"
                                    class="text-center btn btn-success rounded-1 prev mr-2" id="back">
                                    Back
                                </a>
                            @endif
                            <input class="text-center btn btn-success rounded-1 prev mr-2" type="submit"
                                value="{{ session('Confirm', 'Next') }}" id="nextsqd">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additionalScript')
    @include('layout.sqdScript')
    <script>
        /* Enables the 'nextsqd' button if the 'sqd' session variable has a non-empty value when the page loads. */
        window.onload = function() {
        var rating = "{{ session('sqd7', '') }}";
        if (rating !== '') {
            document.getElementById('nextsqd').disabled = false;
        }
    };
    </script>
@endsection

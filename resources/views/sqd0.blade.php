@extends('layout.app')

@section('section')
    <div class="card rounded-0">
        @include('layout.feedbackHeader')
        <div class="container mb-3 mt-0">
            <div class="container border">
                <div class="px-4">
                    @include('layout.sqdInstruction')
                    <form action="{{ route('sqd1') }}" method="post">
                        @csrf
                        @method('post')
                        <p>
                            <strong class="mr-3">{{strtoupper($sqd->question_no)}}</strong>{{$sqd->question}}
                        </p>
                        <div class="container-rating">
                            <div class="rating-wrap">
                                <div class="center text-center">
                                    <fieldset class="rating">
                                        <input class="rating-radio" type="radio" id="star5" name="rating"
                                        value="{{$sqd->choices5}}" {{ session('rating') == $sqd->choices5 ? 'checked' : '' }}/>
                                        <label for="star5" class="full" title="Awesome"></label>

                                        <input class="rating-radio" type="radio" id="star4" name="rating"
                                        value="{{$sqd->choices4}}" {{ session('rating') == $sqd->choices4 ? 'checked' : '' }}/>
                                        <label for="star4" class="full"></label>

                                        <input class="rating-radio" type="radio" id="star3" name="rating"
                                        value="{{$sqd->choices3}}" {{ session('rating') == $sqd->choices3 ? 'checked' : '' }}/>
                                        <label for="star3" class="full"></label>

                                        <input class="rating-radio" type="radio" id="star2" name="rating"
                                        value="{{$sqd->choices2}}" {{ session('rating') == $sqd->choices2 ? 'checked' : '' }}/>
                                        <label for="star2" class="full"></label>

                                        <input class="rating-radio" type="radio" id="star1" name="rating"
                                        value="{{$sqd->choices1}}" {{ session('rating') == $sqd->choices1 ? 'checked' : '' }}/>
                                        <label for="star1" class="full"></label>
                                    </fieldset>
                                </div>
                                <h6 id="rating-value"></h6>
                            </div>
                        </div>
                        <div class="container text-center d-flex justify-content-center my-3">
                            <a href="{{ route('cc3Checked') }}" class="text-center btn btn-success rounded-1 prev mr-2">Back</a>
                            <input class="text-center btn btn-success rounded-1 prev mr-2" type="submit" value="Next" id="nextsqd">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

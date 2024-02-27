@extends('layout.app')

@section('section')
    <div class="card rounded-0">
        @include('layout.feedbackHeader')
        <div class="container mb-3 mt-0">
            <div class="container">
                <div class="px-4">
                    <form action="{{ route('confirmation') }}" method="post">
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label my-3">Suggestions on how we can further
                                improve our services (optional):</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Input your suggestion here" name="suggestion">{{ session('suggestion') }}</textarea>
                        </div>
                        <div class="container text-center d-flex justify-content-center my-3">
                            <a href="{{ route('sqd8Star') }}"
                                class="text-center btn btn-success rounded-1 prev mr-2">Back</a>
                            <input class="text-center btn btn-success rounded-1 prev mr-2" type="submit" value="Next"
                                id="next" style="width: 63px">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Client</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/bootstrap4.3.1.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/font-awesome4.0.3.css') }}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    @yield('additionalStyle')
</head>

<body>
    <div class="container-fluid px-1 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-10">
                @yield('section')
            </div>
        </div>
    </div>
    <script src="{{ asset('resources/bootstrap4.3.1.min.js') }}"></script>
    <script src="{{ asset('resources/jquery3.2.1.min.js') }}"></script>
    <script src="{{ asset('resources/jquery3.6.0.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    @yield('additionalScript')
</body>

</html>

{{-- <script src="{{ url('js/script.js') }}"></script> --}}

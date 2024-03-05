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
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        svg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            box-sizing: border-box;
            display: block;
            background-color: #2835f0;
            background-image: linear-gradient(to bottom, rgba(19, 44, 237, 0.86), rgb(206, 74, 82));
        }

    </style>
</head>

<body>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
        <defs>
            <linearGradient id="bg">
                <stop offset="0%" style="stop-color:rgba(251, 19, 19, 0.06)"></stop>
                <stop offset="50%" style="stop-color:rgba(243, 68, 68, 0.6)"></stop>
                <stop offset="100%" style="stop-color:rgba(253, 115, 115, 0.2)"></stop>
            </linearGradient>
            <path id="wave" fill="url(#bg)"
                d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
          s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
        </defs>
        <g>
            <use xlink:href='#wave' opacity=".3">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="10s"
                    calcMode="spline" values="270 230; -334 180; 270 230" keyTimes="0; .5; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacity=".6">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="8s"
                    calcMode="spline" values="-270 230;243 220;-270 230" keyTimes="0; .6; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
            <use xlink:href='#wave' opacty=".9">
                <animateTransform attributeName="transform" attributeType="XML" type="translate" dur="6s"
                    calcMode="spline" values="0 230;-140 200;0 230" keyTimes="0; .4; 1"
                    keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0" repeatCount="indefinite" />
            </use>
        </g>
    </svg>
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

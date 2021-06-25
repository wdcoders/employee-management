<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <title>Document</title>
</head>

<body>


    <div class="be-wrapper" id="app">

        {{-- sidebar --}}
        {{ View::make('layouts/sidebar') }}
        {{-- sidebar --}}

        <div class="be-wrapper-right">

            {{-- top navbar --}}
            {{ View::make('layouts/navbar') }}
            {{-- top navbar --}}

            {{-- content --}}
            <div class="be-content">
                @yield('content')
            </div>
            {{-- content --}}

            <div class="be-footer"></div>
        </div>

    </div>

    {{-- <script src="{{ mix('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

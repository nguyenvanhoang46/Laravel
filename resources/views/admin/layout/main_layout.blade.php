<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <link href="{{asset('')}}}" rel="stylesheet" />
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/nucleoicons.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/nucleo-svg.css')}}">
    <link rel="stylesheet" href="{{ asset('css/argon-dashboard.css')}}">

    @yield('styles')

</head>

<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-primary position-absolute w-100"></div>
@include('admin.partial.header')

<div class="main-content px-4" >
    @yield('content')

    @include('admin.partial.footer')
</div>


<script src="{{asset('js/core/popper.min.js')}}"></script>
<script src="{{asset('js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/plugins/smooth-scrollbar.min.js')}}"></script>

@yield('scripts')
</body>

</html>


{{-- Composer install --}}
{{-- npm install --}}
{{-- cp .env.example .env --}}
{{-- php artisan key:generate --}}
{{-- php artisan migrate:fresh --seed --}}{{-- // Data base--}}

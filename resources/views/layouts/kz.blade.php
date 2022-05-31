<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/kzzz.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="img/booking/10.png">
    <title>{{config('app.name', 'webBackend')}}</title>
</head>
<body>
@include('inc.navbar')
@yield('content')
@include('inc.footer')
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

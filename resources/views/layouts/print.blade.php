<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lutheran Cursillo of Southern California') }}</title>
    <script type="text/javascript">
 window.onload = function() { window.print(); }
</script>
    <!-- Styles -->
    <link href="{{ asset('css/print.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>


@yield('content')


</body>
</html>

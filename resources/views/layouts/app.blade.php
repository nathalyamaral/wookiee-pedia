<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wookiee-Pedia</title>

    <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}">
    <script src="{{ asset('js/-----') }}"></script>

    <style>
        @media(min-width: 768px) {
          .field-label-responsive {
            padding-top: .5rem;
            text-align: right;
            }
        }
    </style>

</head>
    
<body>
    @header
    @endheader
</body>
</html>

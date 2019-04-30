<!DOCTYPE html>
<html
{{--     @if (Request::segment(1) == 'members')
        style="
        background: linear-gradient( rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4) ), url('/images/smoky-stage-advanced.jpg') no-repeat center center fixed;
        background-size: cover;"
    @endif --}}
>
<head>
    <meta charset="utf-8">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/manifest.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- <meta name="turbolinks-cache-control" content="no-cache"> -->
</head>
<body>
<div id="app" data-component="{{ $name }}" data-props="{{ json_encode($data) }}"></div>
<script>
    var auth = {!! json_encode($auth) !!};
</script>
</body>
</html>


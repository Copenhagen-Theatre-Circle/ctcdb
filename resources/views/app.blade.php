<!DOCTYPE html>
<html>
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

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{ mix('/css/app_admin.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/manifest.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>
    <script src="{{ mix('/js/app_admin.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div id="app">
    <admin-base-layout>
        <router-view></router-view>
    </admin-base-layout>
</div>

</body>
</html>

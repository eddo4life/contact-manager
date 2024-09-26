<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact manager</title>
    <link rel="icon" href="icon.png" type="image/png">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    @yield('content')
    @yield('scripts')
</body>
</html>


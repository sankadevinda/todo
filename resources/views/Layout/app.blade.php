<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>

    @include('Library.style')
</head>
<body>
    @include('Components.header')
    @include('Components.nav')
    @yield('content')
    @include('Components.footer')
    @include('Library.script')

</body>
</html>




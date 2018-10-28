<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Test Blade</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
  @include('layouts.header')
    <div id="content">
        <h1>Thanh Son</h1>

        @yield('Noidung')
    </div>

</body>

</html>

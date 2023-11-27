<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Website</title>

    <style>
        ul li {
            display: inline;
            margin-right: 20px;
        }
    </style>
</head>

<body>

    @include('header')
    <div style="padding: 30px 30px;">
        @yield('content')
    </div>
    @include('footer')
</body>

</html>

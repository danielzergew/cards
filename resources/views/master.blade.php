<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

    {{-- <style>
        * {
            border: red solid;
        }
    </style> --}}
</head>
<body class="bg-[#2D2727]">
    @yield('top')
    @yield('body')
</body>
</html>

{{--
#7149C6
#FC2947
#FE6244
#FFDEB9
 --}}

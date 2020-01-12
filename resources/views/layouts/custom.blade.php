<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    @include('inc.navbar')
</head>
<body>
    <div class="container p-5">
        @yield('content')
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright &copy 2019 todo list</p>
    </footer>
</body>
</html>

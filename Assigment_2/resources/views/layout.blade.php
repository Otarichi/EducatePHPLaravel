<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href={{ route('car.all') }}>View All Car</a>
    <a href= {{ route('car.create') }} >Create New Car</a>
    @yield('content')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('../assets/clients/css/bootstrap.min.css') }}">
</head>
<body>
    @include('clients.blocks.header')

    @include('clients.contents.home')

    @include('clients.blocks.footer')

    <script src="{{ asset('../assets/clients/css/bootstrap.min.css') }}"></script>
</body>
</html>
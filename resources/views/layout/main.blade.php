<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>CV Builder</title>
</head>
<body class="bg-light">
    <div class="container my-3">
        <div class="row">
            <div class="col-sm-0 col-lg-3 col-md-3"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                @yield('content')
            </div>
            <div class="col-sm-0 col-lg-3 col-md-3"></div>
        </div>
    </div>
</body>

</html>
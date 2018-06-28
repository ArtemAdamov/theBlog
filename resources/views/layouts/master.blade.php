<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>First Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        @include('layouts.nav')

        <div class="row">
            @yield('content')
            @include('layouts.sidebar')
        </div>

    </div><!-- /.container -->

    @include('layouts.footer')

    <script>src ="https://code.jquery.com/jquery-3.3.1.slim.min.js"</script>
    <script>window.jQuery || document.write('<script src= "js/jquery-3.3.1.slim.min.js"><\/script>')</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')


    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <footer class="bg-body-tertiary text-center" style="margin-top: 20%">
        <!-- Grid container -->
        <div class="container p-4"></div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2024 Crud_footer:
          <a class="text-body" href="#">By MAMOUSS OUSSAMA</a>
        </div>
        <!-- Copyright -->
      </footer>

</body>
</html>

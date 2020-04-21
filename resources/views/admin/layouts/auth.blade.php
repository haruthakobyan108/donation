<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://demos.creative-tim.com/material-dashboard-pro/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://demos.creative-tim.com/material-dashboard-pro/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      @yield('title', config('app.name') . ' | Admin')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet" />
  </head>
  <body>

    @yield('content')

    <!--   Core JS Files   -->
    <script type="text/javascript" src="{{ mix('js/admin.js') }}"></script>
  </body>
</html>

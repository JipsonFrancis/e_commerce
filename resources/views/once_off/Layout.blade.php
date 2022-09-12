<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">

        <!-- Tailwind CSS -->
        <link href="{{asset('dist/output.css')}}" rel="stylesheet">

        <!-- Main CSS -->
        @section('addCss')

        @show
        <title>App | @yield('title', 'Home Page')</title>

    </head>


    @yield('content')
    
    

    @section('footerScripts')
          <!-- Optional JavaScript; choose one of the two! -->
          <!-- Option 1: Bootstrap Bundle with Popper -->

      <script src="./js/app.js"></script>
      <script src="../../../node_modules/tw-elements/dist/js/index.min.js.map"></script>
      

    @show
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online pharmacy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link id="callCss" rel="stylesheet" href="{{asset('/css/front.min.css')}}" media="screen"/>
  <link href="{{asset('/css/base.css')}}" rel="stylesheet" media="screen"/>
  <link href="{{asset('/js/google-code-prettify/prettify.css')}}" rel="stylesheet"/>
  <!-- Front style responsive -->
  <link href="{{asset('/css/front-responsive.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet" type="text/css">

  <style type="text/css" id="enject"></style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="{{asset('/js/jquery.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/front.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('/js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{asset('/js/front.js')}}"></script>
  <script src="{{asset('/js/jquery.lightbox-0.5.js')}}"></script>
  
  
  </head>
  <style>



    /* Add a gray background color and some padding to the footer */
#footerSection {
    background-color: #f2f2f2;
    padding: 50px;
    margin-top: 27px;
    padding-top: 30px;
    padding-bottom: 18px;
}
</style>

<body>

  @include('layouts.navigation')
  @yield('content')




  <footer class="container-fluid text-center" id="footerSection">
    <p>Online Pharmacy Copyright</p>

  </footer>
</body>
</html>

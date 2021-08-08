
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online pharmacy</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  
  
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

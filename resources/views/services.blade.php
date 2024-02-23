<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Activity 2</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
body {
            width: 100%;
            background-image: url('3.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            height: 100%;
        }
        html {
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        </style>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand">Activity 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="welcome">Home</a>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="services" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="service1">Services 1</a></li>
                <li><a class="dropdown-item" href="service2">Services 2</a></li>
                <li><a class="dropdown-item" href="service3">Services 3</a></li>
              </ul>
            </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contactus">Contact Us</a>
        </li>
      </ul>
    
    </div>
  </div>
</nav>
       
        
    </head>
    <body>
        <div class="container-fluid text-center" style="padding: 200px 0 0 0;">

        <h1>this Service page</h1>
</div>
    </body>
</html>
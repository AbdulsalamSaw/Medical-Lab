<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">     
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
    <div class="row" >
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
          <div class="col-lg-5  container" >
            <img class="loge" src= "/images/logomedical.png">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarnav" aria-controls="navbarnav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>  
          <div class ="col-lg-7 ">
          <div class="collapse navbar-collapse" id="navbarnav">
              <div class="overlay-content">
                   <ul class="navbar-nav">
                @if(session('medical_id') &&session('isAdmin'))
                <li>
                <a class="nav-link" href="{{route('home')}}">Deshboard</a>
                </li>  
                <li>
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
                </li>  
                @else 
                @if(session('patient_id') &&session('isPatient'))
                  <li class="nav-item"> 
                <a class="nav-link" href="{{route('dashboard')}}">Deshboard</a>
                </li>
                <li class="nav-item"> 
                  <a class="nav-link" href="{{route('profile')}}">My Profile</a>
                  </li>
                <li>
                <a class="nav-link" href="{{route('logoutuser')}}">Logout</a>
                </li>  
                @else
                 <li class="nav-item"> 
                    <a class="nav-link" href="{{route('homepage')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/#about_section">About Us</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/#contact_section">Contact</a>
                </li>
                <li class="nav-item"> 
                    <a class="nav-link" href="{{route('loginuser')}}">Login</a>
                    </li>   
                @endif
                @endif
            </ul>
            </div>
          </div>
          </div>
        </nav>
      </div>
    </div>
    <div>
      @yield('content')
    </div>
<div class="footer">
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Medical Lab &copy; Medical Lab 2022</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
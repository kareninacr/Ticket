<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tick@') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/Tick@(logo).png') }}" style="width:100%;">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Averia+Libre&display=swap" rel="stylesheet">
    <style>
        .modal-bg{
          background-image: url("{{ asset('images/background-modal.jpeg') }}");
          width: 100%;
          background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top py-0">
        <div class="container-fluid">
            <a href="{{url('/')}}"><img src="{{ asset('images/Tick@.png') }}" class="navbar-brand img-fluid" href="home.html"></img></a>
                <div class=" collapse navbar-collapse" >
                    <a class="nav-item nav-link py-0 active" href="{{url('/')}}">BERANDA</a>
                <a class="nav-item nav-link py-0" href="{{ url('films')}}">SEDANG TAYANG</a>
                    <a class="nav-item nav-link py-0" href="{{url('/cs')}}">SEGERA</a>
                </div> 
                <div class="kanan collapse navbar-collapse my-0">
                    <form class="form-inline my-2 my-lg-0 ml-auto">
                        <input class="form-control mr-sm-2 search" type="search" placeholder="Search Movie" aria-label="Search">
                    </form>
                        <div class="nav-item dropdown ">
                            <img src="{{ asset('images/user.png') }}" class="nav-item profile nav-link dropdown-toggle" id="dropdownMenuOffset" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" alt="">
                            <!-- kalau belum login tampilkan ini -->
                            <!-- akhir kalau belum login tampilkan ini -->
                            <!-- tampilkan jika sudah logged in -->
                         @auth
                            <a class="dropdown-item" href="#"><img class="img" src="{{ asset('images/tickets.png') }}" alt="">My Ticket</a>
                                <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"><img class="img" src="{{ asset('images/logout.png') }}" alt="">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"> 
                            </form>
                <!-- akhir yang perlu ditampilkan -->
                        </div>
                </div>
            @endauth
            @guest
                <div class="nav-item dropdown ">
                    <img src="{{ asset('images/user.png') }}" class="nav-item profile nav-link dropdown-toggle" id="dropdownMenuOffset" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" alt="">
                    <!-- kalau belum login tampilkan ini -->
                        <div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuOffset">
                            <a class="dropdown-item" href="{{ route('login')}}" data-target="#login" data-toggle="modal">Login</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('register') }}" data-target="#Register" data-toggle="modal">Register</a>
                            <div class="dropdown-divider"></div>
                    <!-- akhir kalau belum login tampilkan ini -->
                        </div>
                </div>
            @endguest
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- pop up Login -->
    <div class="modal fade" id="login">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content m-5">
                    <div class="modal-body modal-bg">
                        <div class="card">
                            <div class="card-body mx-4">
                                <!--Header-->
                                <!--Body-->
                                <div class="row">
                                    <div class="col-sm-6">
                                      <h1 class="judul">Pesan Tiketmu, Menonton Kemudian</h1>
                                      <img src="{{ asset('images/bgps.png') }}" style ="width : 130%;margin-top: 0px; margin-right: 1000px;"alt="">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-center">
                                            <h3 class="pink-text mb-5"><strong>login</strong></h3>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                            <div class="md-form">
                                              <label for="Form-email2">Your email</label>
                                              <input type="text" id="Form-email1" class="form-control" name="email" autocomplete="off" required oninvalid="this.setCustomValidity('Harap masukan Email anda')" oninput="setCustomValidity('')">
                                            </div>
                                            <div class="md-form pb-3">
                                              <label for="Form-pass">Your password</label>
                                              <input type="password" id="Form-pass" class="form-control" name="password" autocomplete="off" required oninvalid="this.setCustomValidity('Harap masukan Password anda')" oninput="setCustomValidity('')">
                                            </div>
                                            <!--Grid row-->
                                            <div class="row d-flex align-items-center mb-4">
                                            <!--Grid column-->
                                            <div class="col-md-3 col-md-6 text-center">
                                              <button type="submit" class="btn btn-pink btn-block btn-rounded z-depth-1">Login</button>
                                            </div>
                                        </form>
                                        <!--Grid column-->
                                        <!--Grid column-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="font-small grey-text d-flex justify-content-end">Belum punya akun? <a href="{{ route('register') }}" class="blue-text ml-1" id="regist" > Register yuk!!!</a></p>
                                            </div>
                                        </div>
                                    <!--Grid column-->
                                    </div>
                                </div>
                                <!--Grid row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pop up register -->
    <div class="modal fade" id="Register">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content m-5">
                    <div class="modal-body modal-bg">
                        <div class="card">
                            <div class="card-body mx-4">
                            <!--Header-->
                            <!--Body-->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="judul">Pesan Tiketmu, Menonton Kemudian</h1>
                                        <img src="{{ asset('images/bgps.png') }}" style ="width : 130%;margin-top: 10px; margin-right: 1000px;"alt="">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="text-center">
                                            <h3 class="pink-text mb-5"><strong>Register</strong></h3>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                                <div class="md-form pb-3">
                                                    <label for="Form-pass2">Your Name</label>
                                                    <input class="form-control" type="text" name="name" autocomplete="off" required>
                                                </div>
                                                <div class="md-form">
                                                    <label for="Form-email2">Your email</label>
                                                    <input type="text" id="Form-email2" class="form-control" name="email" autocomplete="off" required oninvalid="this.setCustomValidity('Harap masukan Email anda')" oninput="setCustomValidity('')">
                                                </div>
                                                <div class="md-form pb-3">
                                                    <label for="Form-pass2">Your password</label>
                                                    <input type="password" id="Form-pass2" class="form-control" name="password" autocomplete="off" required oninvalid="this.setCustomValidity('Harap masukan Password anda')" oninput="setCustomValidity('')">
                                                </div>
                                                <!--Grid row-->
                                                <div class="row d-flex align-items-center mb-4">
                                                    <!--Grid column-->
                                                    <div class="col-md-3 col-md-6 text-center">
                                                        <button type="submit" class="btn btn-pink btn-block btn-rounded z-depth-1">Register</button>
                                                    </div>
                                            </form>
                                            <!--Grid column-->
                                            <!--Grid column-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="font-small grey-text d-flex justify-content-end">Sudah punya akun? <a href="#" class="blue-text ml-1" id="logs"> Login yuk!!!</a></p>
                                                </div>
                                            </div>
                                            <!--Grid column-->
                                    </div>
                                </div>
                                <!--Grid row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <main class="">
        @yield('content')
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(function (){
      $("#regist").click(function (){
        $("#login").modal("hide");
        $("#Register").modal("show");
        })
    });
    $(function (){
      $("#logs").click(function (){
        $("#Register").modal("hide");
        $("#login").modal("show");
        })
    });
    // cheking location
    function handlePermission() {
    'use stirct';
    function onPositionReceived(position){
      console.log(position);
    }
    function locationNotReceived(posError){
      console.log(posError)
    }
    if(navigator.geolocation){
      navigator.geolocation.getCurrentPosition(onPositionReceived,locationNotReceived);
      // var watch = navigator.geolocation.watchPosition(onPositionReceived,locationNotReceived);
      // console.log(watch);0
       $("#myReminder").modal("show");
      navigator.geolocation.getCurrentPosition(function() {
        $("#myReminder").modal("hide");
    }, function() {
        $("#myReminder").modal("show");
        // $('#myReminder').modal({backdrop: 'static', keyboard: false})
        var delayInMilliseconds = 2000; //1 second
        setTimeout(function() {
          javascript:location.reload(true)
        }, delayInMilliseconds);
    });
    }
  }
  function report(state) {
    console.log('Permission ' + state);
  }
  handlePermission();
  </script>
</body>
</html>

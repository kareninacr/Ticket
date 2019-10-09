<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/png" href="{{ asset('images/Tick@(logo).png') }}" style="width:100%;">
    <title>Tick@</title>

    <!-- Bootstrap -->
     <!-- Bootstrap CSS -->
    
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

      <a href="index.html"><img src="{{ asset('images/Tick@.png') }}" class="navbar-brand img-fluid" href="home.html"></img></a>
        <div class=" collapse navbar-collapse" >
            <a class="nav-item nav-link py-0 active" href="index.html">Home</a>
            <a class="nav-item nav-link py-0" href="#">Premiering</a>
            <a class="nav-item nav-link py-0" href="#">Coming Soon</a>
        </div>
        <div class="kanan collapse navbar-collapse my-0">
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2 search" type="search" placeholder="Search Movie" aria-label="Search">
          </form>
          @auth
          <div class="nav-item dropdown ">
          <img src="{{ asset('images/user.png') }}" class="nav-item profile nav-link dropdown-toggle" id="dropdownMenuOffset" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" alt="">
          
          <!-- kalau belum login tampilkan ini -->
           
          <!-- akhir kalau belum login tampilkan ini -->

          <!-- tampilkan jika sudah logged in -->
          <a class="dropdown-item" href="#"><img class="img" src="{{ asset('images/tickets.png') }}" alt="">My Ticket</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><img class="img" src="{{ asset('images/logout.png') }}" alt="">Logout</a>
          <!-- akhir yang perlu ditampilkan -->

        </div>
        </div>
        @endauth
        @guest
          <div class="nav-item dropdown ">
          <img src="{{ asset('images/user.png') }}" class="nav-item profile nav-link dropdown-toggle" id="dropdownMenuOffset" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" alt="">
          
          <!-- kalau belum login tampilkan ini -->
           <div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="#" data-target="#login" data-toggle="modal">Login</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-target="#Register" data-toggle="modal">Register</a>
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
      <form action="">
      <div class="md-form">
        <label for="Form-email2">Your email</label>
        <input type="text" id="Form-email1" class="form-control" autocomplete="off" required oninvalid="this.setCustomValidity('Harap masukan Email anda')" oninput="setCustomValidity('')">
        
      </div>

      <div class="md-form pb-3">
        <label for="Form-pass">Your password</label>
        <input type="password" id="Form-pass" class="form-control" autocomplete="off" required oninvalid="this.setCustomValidity('Harap masukan Password anda')" oninput="setCustomValidity('')">
        
      
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
                  <p class="font-small grey-text d-flex justify-content-end">Belum punya akun? <a href="#"
                      class="blue-text ml-1" id="regist" > Register yuk!!!</a></p>
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

    <!-- akhir pop up login -->

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
      <form action="">
      <div class="md-form">
        <label for="Form-email2">Your email</label>
        <input type="text" id="Form-email2" class="form-control" autocomplete="off" required oninvalid="this.setCustomValidity('Harap masukan Email anda')" oninput="setCustomValidity('')">
        
      </div>

      <div class="md-form pb-3">
        <label for="Form-pass2">Your password</label>
        <input type="password" id="Form-pass2" class="form-control" autocomplete="off" required oninvalid="this.setCustomValidity('Harap masukan Password anda')" oninput="setCustomValidity('')">
        
      
      </div>
      <div class="md-form pb-3">
        <label for="Form-pass2">No Telephone</label>
        <input class="form-control" type="tel" name="phone" autocomplete="off" placeholder="123412341234"pattern="[0-9]{4}[0-9]{4}[0-9]{4}" required>
        
      
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
                  <p class="font-small grey-text d-flex justify-content-end">Sudah punya akun? <a href="#" 
                      class="blue-text ml-1" id="logs"> Login yuk!!!</a></p>
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

    <!-- akhir pop up Register -->
    
    <!-- carousel -->
      <div id="demo" class="carousel slide" data-ride="carousel"  data-interval="2800">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-responsive" src="{{ asset('images/joker.jpg') }}" alt="Joker 1" width="100%"
                height="570vh ">
                <div class="overlay"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-responsive" src="{{ asset('images/avatar.png') }}" alt="Joker 1" width="100%"
                height="570vh ">
                <div class="overlay"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-responsive" src="{{ asset('images/toy.png') }}" alt="Joker 1" width="100%"
                height="570vh ">
                <div class="overlay"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-responsive" src="{{ asset('images/dora.jpg') }}" alt="Joker 1" width="100%"
                height="570vh ">
                <div class="overlay"></div>
            </div>
        </div>

        <a href="#demo" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#demo" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- akhir carousel -->
    
    <!-- sedang tayang -->
      <div class="jumbotron">
        <div class="text-center">
          <h1>SEDANG TAYANG</h1>
          <hr>
        </div>
        <div class="selengkapnya container">
          <a href=""><pre>Selengkapnya   ></pre></a>
        </div>
        <!-- card -->

        <div class="kartu ">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              
        <div class="card cards d-inline-block">
          <a href="detail_film.html">
        <img src="{{ asset('images/joker.png') }}" alt="Joker" class="card-img-top">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="title">Joker</h4>
                </div>
                <div class="col">
                    
                    <div class="star">
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                    </div>
                    
                    
                </div>

            </div>
            
                    
            </div>
            </a>
            </div>
            
            </div>
            <div class="col-sm">
              
        <div class="card cards d-inline-block">
          <a href="">
        <img src="{{ asset('images/download.jpg') }}" alt="Joker" class="card-img-top">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="title">Avatar</h4>
                </div>
                <div class="col">
                    
                    <div class="star">
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                    </div>
                    
                    
                </div>
            </div>
                    
            </div>
            </a>
            </div>
            
            </div>


            <div class="col-sm">
              
        <div class="card cards d-inline-block">
          <a href="">
        <img src="{{ asset('images/toy.png') }}" alt="Joker" class="card-img-top">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="title">Toy Story</h4>
                </div>
                <div class="col">
                    
                    <div class="star">
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                      <i class="fa fa-star fa-fw" aria-hidden="true"></i>
                    </div>
                    
                    
                </div>
            </div>
                    
            </div>
            </a>
            </div>
            
            </div>
            </div>
            </div>
            </div>
    <!-- akhir card -->
      </div>
    <!-- akhir sedang tayang -->

    <!-- coming soon -->
      <div class="jumbotron">
        <div class="text-center">
          <h1>COMING SOON</h1>
          <hr>
        </div>
        <div class="selengkapnya container">
          <a href=""><pre>Selengkapnya   ></pre></a>
        </div>
        <!-- card -->
        <div class="kartu">
        <div class="container">
          <div class="row">
            <div class="col-sm">
              <a href="">
        <div class="card cards">
        <img src="{{ asset('images/AV.jpg') }}" alt="Joker" class="card-img-top">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="title">Avenger</h4>
                </div>
                
            </div>
                    
            </div>
            </div>
            </a>
            </div>
            <div class="col-sm">
        <div class="card cards">
        <img src="{{ asset('images/tk.jpg') }}" alt="Joker" class="card-img-top">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="title">Thinker Bell</h4>
                </div>
                
            </div>
                    
            </div>
            </div>
            </div>
            <div class="col-sm">
        <div class="card cards">
        <img src="{{ asset('images/barbies.jpg') }}" alt="Joker" class="card-img-top">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <h4 class="title">Barbie</h4>
                </div>
                
            </div>
                    
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
    <!-- akhir card -->
      </div>
    <!-- akhir coming soon -->



    

    
    <!-- footer -->
      <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container-fluid ">
          <small class="smol">&copy;2019 Tick@, All rights  reserved</small>
          <div class="kanans">
          <p>Find us on</p>
          <a href="https://www.instagram.com/sulthonaul/"><img class="ig" src="{{ asset('images/ig.png') }}" alt=""></a>
          <a href="https://id-id.facebook.com"><img class="f" src="{{ asset('images/f.png') }}" alt=""></a>
          <a href="https://mail.google.com/mail/u/0/#inbox"><img class="g" src="{{ asset('images/g.png') }}" alt=""></a>
          </div>
        </div>
      </footer>
    <!-- akhir footer -->

    <!-- pop up location -->

    <div class="modal fade" id="myReminder" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered" >
            <div class="modal-content m-5">
                <div class="modal-body modal-bg">
                    <div class="card m-5">
                        <div class="card-body m-5" style="font-size: 32px">
                            <img class=" d-flex mx-auto d-block card-title" src="{{ asset('images/Tick@(logo).png') }}" alt="">
                            <p class="card-text text-center text-wrap m-5 averia text-muted">Jangan Lupa Nyalakan lokasi anda ya !!!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popuplocation -->
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
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

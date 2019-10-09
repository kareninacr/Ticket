<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="img/Tick@(logo).png" style="width:100%;">
    <title>Detail Film</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Averia+Libre&display=swap" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top py-0">
    <div class="container-fluid">

      <a href="{{url('/')}}"><img src="{{ asset('images/Tick@.png') }}" class="navbar-brand img-fluid" ></img></a>
        <div class=" collapse navbar-collapse" >
            <a class="nav-item nav-link py-0 active" href="{{url('/')}}">Home</a>
            <a class="nav-item nav-link py-0" href="#">Premiering</a>
            <a class="nav-item nav-link py-0" href="{{url('/cs')}}">Coming Soon</a>
        </div>
        <div class="kanan collapse navbar-collapse my-0">
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <input class="form-control mr-sm-2 search" type="search" placeholder="Search Movie" aria-label="Search">
          </form>
          <div class="nav-item dropdown ">
          <img src="{{ asset('images/user.png') }}" class="nav-item profile nav-link dropdown-toggle" id="dropdownMenuOffset" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20" alt="">

          <!-- kalau belum login tampilkan ini -->
           <div class="dropdown-menu dropdown-menu-right " aria-labelledby="dropdownMenuOffset">
            <a class="dropdown-item" href="#" data-target="#login" data-toggle="modal">Login</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-target="#Register" data-toggle="modal">Register</a>
          <div class="dropdown-divider"></div>
          <!-- akhir kalau belum login tampilkan ini -->

          <!-- tampilkan jika sudah loged in -->
          <a class="dropdown-item" href="#"><img class="img" src="{{ asset('images/tickets.png') }}" alt="">My Ticket</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><img class="img" src="{{ asset('images/logout.png') }}" alt="">Logout</a>
          <!-- akhir yang perlu ditampilkan -->

        </div>
        </div>
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
        <div class="container" style="margin-top: 5rem">
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                        <div class="card" style="width: 17.5rem">
                            <img class="card-img-top" src="{{ asset('images/joker.png') }}" alt="">
                        </div>
                        </div>
                        <hr style="border: 2px solid black ">
                        <div class="list-group " style="overflow-y: scroll; height: 10rem;">
                            <h6 class="list-group-item border-0">
                                2D
                                <div class="list-group list-group-horizontal mt-2 ">
                                    <a href="{{url('/seats')}}" class="list-group item btn btn-outline-primary ">14:00</a>
                                    <a href="#" class="list-group item btn btn-outline-danger mx-2">16:00</a>
                                    <a href="#" class="list-group item btn mx-2">21:00</a>
                                </div>
                            </h6>
                            <h6 class="list-group-item border-0">
                                2D
                                <div class="list-group list-group-horizontal mt-2">
                                    <a href="#" class="list-group item btn mx-2">14:00</a>
                                    <a href="#" class="list-group item btn mx-2">16:00</a>
                                    <a href="#" class="list-group item btn mx-2">21:00</a>
                                </div>
                            </h6>
                            <h6 class="list-group-item border-0">
                                2D
                                <div class="list-group list-group-horizontal mt-2">
                                    <a href="#" class="list-group item btn mx-2">14:00</a>
                                    <a href="#" class="list-group item btn mx-2">16:00</a>
                                    <a href="#" class="list-group item btn mx-2">21:00</a>
                                </div>
                            </h6>
                            <h6 class="list-group-item border-0">
                                2D
                                <div class="list-group list-group-horizontal mt-2">
                                    <a href="#" class="list-group item btn mx-2">14:00</a>
                                    <a href="#" class="list-group item btn mx-2">16:00</a>
                                    <a href="#" class="list-group item btn mx-2">21:00</a>
                                </div>
                            </h6>
                        </div>
                    </div>
                            <div class="col">
                                <h1 class="display-5 text-center">Tonton Trailer</h1>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/watch?v=XEOCbFJjRw0" class="embed-responsive-item" allowfullscreen ></iframe>
                                </div>
                                <div class="card mt-5">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="card-title text-left">Joker</h5>
                                            </div>
                                            <div class="col">
                                                    <h5 class="card-title text-secondary">Rating
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </h5>
                                                </div>
                                                <div class="col-1">
                                                        <h5 class="card-title text-right float-right text-secondary">13+</h5>
                                            </div>
                                        </div>
                                        <p class="card-text" style="overflow-y: scroll; height: 7rem;">Cerita Original dari penjahat ikonik (Joker) yang tidak terlihat sebelumnya di layar lebar, Arthur Fleck, seorang pria yang diabaikan oleh masyarakat, dan sebuah cerita yang lebih luas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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



    </script>
  </body>
</html>

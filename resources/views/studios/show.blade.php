<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/seats.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Averia+Libre&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arsenal&display=swap" rel="stylesheet">
    <style>
    .averia{
      font-family: 'Averia Libre', cursive;
      font-style: normal;
      font-weight: bold;
      font-size: 2vw;
      color: #ffffff;
    }
    .arsenal{
        font-family: 'arsenal';
        font-weight: bold;
    }
    </style>
    <nav class="navbar navbar-expand-lg fixed-top py-0">
        <div class="container-fluid">
            <a href="{{url('/')}}">
                <img src="{{asset ('images/Tick@.png')}}" class="navbar-brand img-fluid" href="{{url('/')}}"></img>
            </a>
            <span class="navbar-text mx-auto w-25 averia">Mau Duduk Dimana ?</span>
            <img src="{{ asset('images/user.png') }}" class="nav-item profile nav-link dropdown-toggle" alt="">
        </div>
    </nav>
    <div class="container" style="margin-top: 5em">
        <div class="row border border-primary">
            <div class="col">
              <h3 class="m-3 arsenal">Summary</h3>
            </div>
            <div class="col">
              <h4 class="my-2">Cinemaxx</h4>
              <h4 class="my-2">Duration : 01:54:00</h4>
            </div>
            <div class="col">
              <h4 class="my-2">Reguler : Rp 50.000</h4>
              <h4 class="my-2">Seat</h4>
            </div>
        </div>
        <div class="row">
            <span class="w-100 my-2 text-center arsenal" style="border: 1px solid #797676; background: #D0B7B7;">screen</span>
            <div class="col">
            </div>
            <div class="col-5">
                    <li class="row row--1">
                            <ol class="seats" type="A">
                              <li class="seat">
                                <input type="checkbox" id="1A" />
                                <label for="1A">1A</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="1B" />
                                <label for="1B">1B</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="1C" />
                                <label for="1C">1C</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="1E" />
                                <label for="1E">1E</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="1F" />
                                <label for="1F">1F</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="1G" />
                                <label for="1G">1G</label>
                              </li>
                            </ol>
                          </li>
                          <li class="row row--2">
                            <ol class="seats" type="B">
                              <li class="seat">
                                <input type="checkbox" id="2A" />
                                <label for="2A">2A</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="2B" />
                                <label for="2B">2B</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="2C" />
                                <label for="2C">2C</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="2E" />
                                <label for="2E">2E</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="2F" />
                                <label for="2F">2F</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="2G" />
                                <label for="2G">2G</label>
                              </li>
                            </ol>
                          </li>
                          <li class="row row--3">
                            <ol class="seats" type="c">
                              <li class="seat">
                                <input type="checkbox" id="3A" />
                                <label for="3A">3A</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="3B" />
                                <label for="3B">3B</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="3C" />
                                <label for="3C">3C</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="3E" />
                                <label for="3E">3E</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="3F" />
                                <label for="3F">3F</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="3G" />
                                <label for="3G">3G</label>
                              </li>
                            </ol>
                          </li>
                          <li class="row row--4">
                            <ol class="seats" type="D">
                              <li class="seat">
                                <input type="checkbox" id="4A" />
                                <label for="4A">4A</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="4B" />
                                <label for="4B">4B</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="4C" />
                                <label for="4C">4C</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="4E" />
                                <label for="4E">4E</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="4F" />
                                <label for="4F">4F</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="4G" />
                                <label for="4G">4G</label>
                              </li>
                            </ol>
                          </li>
                          <li class="row row--5">
                            <ol class="seats" type="D">
                              <li class="seat">
                                <input type="checkbox" id="5A" />
                                <label for="5A">5A</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="5B" />
                                <label for="5B">5B</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="5C" />
                                <label for="5C">5C</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="5E" />
                                <label for="5E">5E</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="5F" />
                                <label for="5F">5F</label>
                              </li>
                              <li class="seat">
                                <input type="checkbox" id="5G" />
                                <label for="5G">5G</label>
                              </li>
                            </ol>
                          </li>
            </div>
            <div class="col">
            </div>
        </div>
    <a href="{{url('/bayar')}}">
        <button class="float-right btn btn-primary rounded-pill" style="width: 7em">Bayar</button>
    </a>
    </div>
  </head>
  <body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

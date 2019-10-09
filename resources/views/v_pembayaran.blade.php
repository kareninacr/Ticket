<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" href="{{ asset('images/Tick@(logo).png') }}" style="width:100%;">
    <title>Pembayaran</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Averia+Libre&display=swap" rel="stylesheet">
    <style>
    .averia{
      font-family: 'Averia Libre', cursive;
      font-style: normal;
      font-weight: bold;
      font-size: 25px;
      color: #ffffff;
    }
    </style>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg fixed-top py-0">
            <div class="container-fluid">
                <a href="{{url('/')}}"><img src="{{ asset('images/Tick@.png') }}" class="navbar-brand img-fluid" href="home.html"></img></a>
                <span class="navbar-text mx-auto w-25 averia">Pembayaran</span>   
            </div>
        </nav>
        <div class="container">
          <div class="row" style="margin-top: 7rem">
            <div class="col">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h4 class="card-title">Total Tagihan</h5>
                    </div>
                    <div class="col">
                      <h4 class="card-title float-right">Rp40.000</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h4 class="my-3">Pilih Metode Pembayaran</h4>
          <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>OVO</option>
                      <option>Tunai</option>
                      <option>GO-PAY</option>
                    </select>
                  </div>
                  <button class="btn btn-primary btn-lg float-right mt-5 p-2 btn-pink" type="button" style="border-radius: 15px;margin-top: 45vh !important; width: 130px;border: 0; " data-target="#myBayar" data-toggle="modal">Pesan</button>
                </div>
          </div>


          <!-- pop up detail pembayaran -->

          <div class="modal popup" id="myBayar" >
        <div class="modal-dialog modal-dialog-centered modal-lg" >
            <div class="modal-content" >
                <div class="modal-header">
                    <h4 class="text-center text-primary">Detail Pembayaran</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="container" style="margin-top: 2rem; margin-bottom: 2rem;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text" style="font-size: 2vw;">
                                <pre>Judul       :</pre>
                                <pre>Bioskop     :</pre>
                                <pre>Jam Tayang  :</pre>
                                <pre>Total Harga :</pre>
                                <pre>Total Tiket :</pre>
                                <pre>Code        :</pre>
                            </div>
                            </div>
                            <div class="col-md-4" >
                                <div class="text" style="font-size: 2vw;">
                                <pre>Joker</pre>
                                <pre>CGV</pre>
                                <pre>14:00</pre>
                                <pre>Rp.50.000</pre>
                                <pre>2</pre>
                                <pre>#0264</pre>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                <div class="card" style="width: 12rem">
                                    <img class="card-img-top" src="img/joker.png" alt="" style="height: 100%;width: 100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="modal-footer">
                  <a href="index.html">
                    <button class="buttonB "  >Kembali</button>
                  </a>
                </div>
            </div>
        </div>
    </div>

          <!-- akhir pop up -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
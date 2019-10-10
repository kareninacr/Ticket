@extends('layouts.app')
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
            <img class="img-responsive" src="{{ asset('images/joker.jpg') }}" alt="Joker 1" width="100%"height="570vh">
            <div class="overlay"></div>
            <div class="carousel-caption"></div>
        </div>
        <div class="carousel-item">
            <img class="img-responsive" src="{{ asset('images/avatar.png') }}" alt="Joker 1" width="100%" height="570vh ">
            <div class="overlay"></div>
            <div class="carousel-caption"></div>
        </div>
        <div class="carousel-item">
            <img class="img-responsive" src="{{ asset('images/toy.png') }}" alt="Joker 1" width="100%" height="570vh ">
            <div class="overlay"></div>
            <div class="carousel-caption"></div>
        </div>
        <div class="carousel-item">
            <img class="img-responsive" src="{{ asset('images/dora.jpg') }}" alt="Joker 1" width="100%" height="570vh ">
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
          <a href="{{url('/films')}}"><pre>Selengkapnya   ></pre></a>
        </div>
        <!-- card -->
        <div class="kartu ">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card cards d-inline-block">
                            <a href="{{url('/dtFilm')}}">
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
          <h1>SEGERA</h1>
          <hr>
        </div>
        <div class="selengkapnya container">
          <a href="{{url('/cs')}}"><pre>Selengkapnya   ></pre></a>
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
    <div class="modal fade" id="myReminder" >
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

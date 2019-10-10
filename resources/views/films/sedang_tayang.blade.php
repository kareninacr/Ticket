@extends('layouts.app')
    <div class="jumbotron" style="margin-top: 80px; margin-bottom: -80px;">
      <div class="text-center">
        <h1>Sedang Tayang</h1>
        <hr>
      </div>
    </div>
    <div class="kartu">
        <div class="container">
          <div class="row">
            @foreach ($films as $film)
                <div class="col-sm" style="margin-bottom: 50px;">
                    <a href="">
                        <div class="card cards">
                        <img src="{{ asset('images/'.$film->cover) }}" alt="Joker" class="card-img-top">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="title">{{ $film->judul }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </div>
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

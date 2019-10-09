@extends('layouts.app')
<div class="jumbotron" style="margin-top: 20px; margin-bottom: -80px;">
    <div class="text-center">
        <h1>SEGERA</h1>
    </div>
</div>
<hr class="w-25 border border-outline-dark">
<div class="container">
    <div class="row my-5">
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
<!-- footer -->
    <!-- akhir footer -->


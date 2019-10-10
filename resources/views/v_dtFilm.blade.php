@extends('layouts.app')
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
                <h6 class="list-group-item border-0">2D
                    <div class="list-group list-group-horizontal mt-2 ">
                        <a href="{{url('studios')}}" class="list-group item btn btn-outline-primary ">14:00</a>
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

@extends('films.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tambah Film Baru </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('films.index') }}">Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong> Ups!</strong> Kayaknya ada yang salah deh ! <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            <ul>
        </div>
    @endif

    <form action="{{ route('films.store') }}" method="POST" enctype="multipart/form-data">
        @csrf 
    
        <div class="row">
            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Judul </strong>
                    <input type="text" name="judul" class="form-control" placeholder="Judul Film">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Cover </strong>
                    <input type="file" name="cover" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Durasi  </strong>
                    <input type="text" name="durasi" class="form-control" placeholder="Durasi Film">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Rating </strong>
                    <input type="text" name="rating" class="form-control" placeholder="Rating Film">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Sinopsis </strong>
                    <input type="textarea" style="height:150px" name="sinopsis" class="form-control" placeholder="Sinopsis Film"> </textarea>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Trailer </strong>
                    <input type="file" name="trailer" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    <form>
@endsection
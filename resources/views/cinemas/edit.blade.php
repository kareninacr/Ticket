@extends('cinemas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ubah Bioskop </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cinemas.index') }}">Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong> Ups!</strong> Kayaknya ada yang salah deh ! <br><br>
            <ul>
                @foreach (errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            <ul>
        </div>
    @endif

    <form action="{{ route('cinemas.edit', $cinema->id) }}" method="POST" >
        @csrf 
        @method('PUT')
    
        <div class="row">
            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Nama Bioskop </strong>
                    <input type="text" name="nama_bioskop" value="{{ $cinema->nama_bioskop }}" class="form-control" placeholder="Nama Bioskop">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Alamat </strong>
                    <input type="text" name="alamat" value="{{ $cinema->alamat }}" class="form-control" placeholder="Alamat Bioskop">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Telepon  </strong>
                    <input type="text" name="tlp" value="{{ $cinema->tlp }}" class="form-control" placeholder="Telepon Bioskop">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Film Id </strong>
                    <input type="text" name="films_id" value="{{ $cinema->films_id }}" class="form-control" placeholder="Film Id">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Jadwal Tayang </strong>
                    <input type="text" name="jadwal_tayang" value="{{ $cinema->jadwal_tayang }}" class="form-control" placeholder="Jadwal Tayang Film"> </textarea>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Status Film </strong>
                    <input type="file" name="status_film" value="{{ $cinema->status_film }}" class="form-control" placeholder="Status Film">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Studio Id </strong>
                    <input type="text" name="studio_id" value="{{ $cinema->studios_id }}" class="form-control" placeholder="Studio Id">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Harga Tiket </strong>
                    <input type="text" name="harga_tiket" value="{{ $cinema->harga_tiket }}" class="form-control" placeholder="Harga Tiket">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    <form>
@endsection
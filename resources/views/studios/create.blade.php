@extends('studios.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tambah Studio Baru </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('studios.index') }}">Kembali</a>
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

    <form action="{{ route('studios.store') }}" method="POST" enctype="multipart/form-data">
        @csrf 
    
        <div class="row">
            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Nama Studio </strong>
                    <input type="text" name="nama_studio" class="form-control" placeholder="Nama Studio">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Tipe Studio </strong>
                    <select name="tipe_studio" class="form-control"> Tipe Studio 
                        <option value="Reguler"> Reguler </option>
                        <option value="2D"> 2D </option>
                        <option value="3D"> 3D </option>
                        <option value="4D"> 4D </option>
                        <option value="Gold Class"> Gold Class </option>
                        <option value="Velvet Class"> Velvet Class </option>
                        <option value="Satin Class"> Satin Class </option>
                        <option value="Starium"> Starium </option>
                        <option value="Sweetbox"> Sweetbox </option>
                        <option value="Cinemaxx Reguler"> Cinemaxx Reguler </option>
                        <option value="Cinemaxx Gold"> Cinemaxx Gold </option>
                        <option value="Ultra XD"> Ultra XD </option>
                        <option value="Cinemaxx Junior"> Cinemaxx Junior </option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Jumlah Studio  </strong>
                    <input type="text" name="jumlah_studio" class="form-control" placeholder="Jumlah Studio ">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Jumlah Kursi </strong>
                    <input type="text" name="jumlah_kursi" class="form-control" placeholder="Jumlah Kursi ">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Kode Kursi </strong>
                    <input type="text" name="kode_kursi" class="form-control" placeholder="Kode Kursi">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Keterangan </strong>
                    <input type="textarea" name="keterangan" style=height:150px" class="form-control" placeholder="Keterangan Studio"> </textarea>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    <form>
@endsection
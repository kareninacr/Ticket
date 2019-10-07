@extends('studios.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ubah Studio </h2>
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

    <form action="{{ route('studios.edit', $studio->id) }}" method="POST">
        @csrf 
        @method('PUT')
    
        <div class="row">
            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Nama Studio </strong>
                    <input type="text" name="nama_studio" value="{{ $studio->nama_studio }}" class="form-control" placeholder="Nama Studio">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Tipe Studio </strong>
                    <select name="tipe_studio" class="form-control"> Tipe Studio 
                        <option value="Reguler" value="{{ $studio->tipe_studio }}"> Reguler </option>
                        <option value="2D" value="{{ $studio->tipe_studio }}"> 2D </option>
                        <option value="3D" value="{{ $studio->tipe_studio }}"> 3D </option>
                        <option value="4D" value="{{ $studio->tipe_studio }}"> 4D </option>
                        <option value="Gold Class" value="{{ $studio->tipe_studio }}"> Gold Class </option>
                        <option value="Velvet Class" value="{{ $studio->tipe_studio }}"> Velvet Class </option>
                        <option value="Satin Class" value="{{ $studio->tipe_studio }}"> Satin Class </option>
                        <option value="Starium" value="{{ $studio->tipe_studio }}"> Starium </option>
                        <option value="Sweetbox" value="{{ $studio->tipe_studio }}"> Sweetbox </option>
                        <option value="Cinemaxx Reguler" value="{{ $studio->tipe_studio }}"> Cinemaxx Reguler </option>
                        <option value="Cinemaxx Gold" value="{{ $studio->tipe_studio }}"> Cinemaxx Gold </option>
                        <option value="Ultra XD" value="{{ $studio->tipe_studio }}"> Ultra XD </option>
                        <option value="Cinemaxx Junior" value="{{ $studio->tipe_studio }}"> Cinemaxx Junior </option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Jumlah Studio  </strong>
                    <input type="text" name="jumlah_studio" value="{{ $studio->jumlah_studio }}" class="form-control" placeholder="Jumlah Studio ">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Jumlah Kursi </strong>
                    <input type="text" name="jumlah_kursi" value="{{ $studio->jumlah_kursi }}" class="form-control" placeholder="Jumlah Kursi ">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Kode Kursi </strong>
                    <input type="text" name="kode_kursi" value="{{ $studio->kode_kursi }}" class="form-control" placeholder="Kode Kursi">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Keterangan </strong>
                    <input type="textarea" name="keterangan" style=height:150px" class="form-control" placeholder="Keterangan Studio"> value="{{ $studio->keterangan }}" </textarea>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    <form>
@endsection
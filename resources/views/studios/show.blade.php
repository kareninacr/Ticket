@extends('studios.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Lihat Studio </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('studios.index') }}">Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Nama Studio </strong>
                {{ $studio->nama_studio }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Tipe Studio </strong>
                {{ $studio->tipe_studio }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Jumlah Studio </strong>
                {{ $studio->jumlah_studio }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Jumlah Kursi </strong>
                {{ $studio->jumlah_kursi }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Kode Kursi </strong>
                {{ $studio->kode_kursi }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong> Keterangan </strong>
                {{ $studio->keterangan }}
            </div>
        </div>
    </div>
@endsection

<!-- Kursi Tersedia : {{$studios->total() }} -->
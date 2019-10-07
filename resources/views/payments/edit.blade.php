@extends('payments.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ubah Payment </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('payments.index') }}">Kembali</a>
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

    <form action="{{ route('payments.edit', $payment->id) }}" method="POST">
        @csrf 
        @method('PUT')
    
        <div class="row">
            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Tunai </strong>
                    <input type="text" name="tunai" value="{{ $payment->tunai }}" class="form-control" placeholder="00.000">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Non Tunai </strong>
                    <select name="non_tunai" class="form-control"> Pembayaran Non Tunai 
                        <option value="{{ $payment->non_tunai }}"> Via ATM </option>
                        <option value="{{ $payment->non_tunai }}"> Gopay </option>
                        <option value="{{ $payment->non_tunai }}"> OVO </option>
                        <option value="{{ $payment->non_tunai }}"> Dana </option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    <form>
@endsection
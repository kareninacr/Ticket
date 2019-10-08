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
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            <ul>
        </div>
    @endif

    <form action="{{ route('payments.update', $payments->id) }}" method="POST">
        @csrf 
        @method('PUT')
    
        <div class="row">
            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Total Bayar </strong>
                    <input type="text" name="total_bayar" value="{{ $payments->total_bayar }}" class="form-control" placeholder="Rp.">
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Metode Pembayaran </strong>
                    <select name="metode" class="form-control">
                            <option value="Tunai" {{ $payments->metode == "Tunai" ? "selected" : "" }}> Tunai </option>
                            <option value="Via ATM" {{ $payments->metode == "Via ATM" ? "selected" : "" }}> Via ATM </option>
                            <option value="Gopay" {{ $payments->metode == "Gopay" ? "selected" : "" }}> Gopay </option>  
                            <option value="OVO" {{ $payments->metode == "OVO" ? "selected" : "" }}> OVO </option>
                            <option value="Dana" {{ $payments->metode == "Dana" ? "selected" : "" }}> Dana </option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    <form>
@endsection
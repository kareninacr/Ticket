@extends('payments.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tambah Payment Baru </h2>
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

    <form action="{{ route('payments.store') }}" method="POST">
        @csrf 
    
        <div class="row">
            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Total Pembayaran </strong>
                    <input type="number" name="total_bayar" class="form-control" placeholder="Rp.">
                </div>
            </div>
            <div class="form_group">

            </div>
            <div class="col-xs-12 col=sm-12 col-md-12">
                <div class="form_group">
                    <strong> Metode Pembayaran </strong>
                    <select name="metode" class="form-control"> 
                        <option value="Tunai"> Tunai </option>
                        <option value="Via ATM"> Via ATM </option>
                        <option value="Gopay"> Gopay </option>  
                        <option value="OVO"> OVO </option>
                        <option value="Dana"> Dana </option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col=sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    <form>
@endsection
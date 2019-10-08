@extends('payments.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tick@ - Pesan Tiket Bioskop Online </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('payments.create') }}"> Tambah Pembayaran </a>
            </div>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p> {{ $message }} </p>
        </div>
    @endif    

    <table class="table table-bordered">
        <tr>
            <th> No </th>
            <th> Total Bayar </th>
            <th> Metode Pembayaran </th>
            <th width="280px"> Aksi </th>
        </tr>
        @foreach ($payments as $payment)
        <tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{ $payment->total_bayar }} </td>
            <td> {{ $payment->metode }} </td>
            <td> 
                <a class="btn btn-info" href="{{ route('payments.show', $payment->id) }}"> Lihat </a>
                <a class="btn btn-primary" href="{{ route('payments.edit', $payment->id) }}"> Ubah </a>
                        @csrf 
                        @method('DELETE')
                <a class="btn btn-danger" href="{{ route('payments.destroy', $payment->id) }}"> Hapus </a>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- {!! $payments->links() !!} --}}
@endsection
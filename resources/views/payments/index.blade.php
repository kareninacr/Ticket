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
  <div class="table-responsive text-nowrap">
    <table class="table table-striped">
        <tr>
            <th> No </th>
            <th> Total Bayar </th>
            <th> Metode Pembayaran </th>
            <th width="280px"> Aksi </th>
        </tr>
        <tbody>
        @foreach ($payments as $payment)
        <tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{ $payment->total_bayar }} </td>
            <td> {{ $payment->metode }} </td>
            <td> 
                {{-- <a class="btn btn-info" href="{{ route('payments.show', $payment->id) }}"> Lihat </a> --}}
                {{-- Edit button dipindahkan ke dalam form agar sejajar, karena ada @method('DELETE') --}}
                {{-- delete tidak akan jalan jika tidak di post menggunakan form --}}
                <form action="{{ route('payments.destroy', $payment->id) }}" method="POST">      
                        @csrf 
                        @method('DELETE')   
                        <a class="btn btn-primary" href="{{ route('payments.edit', $payment->id) }}"> Ubah </a>
                     <input class="btn btn-danger" type="submit" value="Hapus"> 
                 </form>  
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
  </div>

    {{-- {!! $payments->links() !!} --}}
@endsection
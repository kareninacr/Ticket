@extends('studios.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tick@ - Pesan Tiket Bioskop Online </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('studios.create') }}"> Tambah Studio Baru </a>
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
            <th> Nama Studio </th>
            <th> Tipe Studio </th>
            <th> Jumlah Studio </th>
            <th> Jumlah Kursi </th>
            <th> Kode Kursi </th>
            <th> Keterangan </th>
            <th width="280px"> Aksi </th>
        </tr>
        @foreach ($studios as $studio)
        <tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{ $studio->nama_studio }} </td>
            <td> {{ $studio->tipe_studio }} </td>
            <td> {{ $studio->jumlah_studio }} </td>
            <td> {{ $studio->jumlah_kursi }} </td>
            <td> {{ $studio->kode_kursi }} </td>
            <td> {{ $studio->keterangan }} </td>
            <td> <form action="{{ route('studios.destroy', $studio->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('studios.show', $studio->id) }}"> Lihat </a>
                    <a class="btn btn-primary" href="{{ route('studios.edit', $studio->id) }}"> Ubah </a>
                        @csrf 
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Hapus </button>
                 </form>
            </td>
        </tr>
        @endforeach
    </table>

    <!-- {!! $studio->links() !!} -->
@endsection
@extends('cinemas.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tick@ - Pesan Tiket Bioskop Online </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cinemas.create') }}"> Tambah Bioskop Baru </a>
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
            <th> Nama Bioskop </th>
            <th> Alamat </th>
            <th> Telepon </th>
            <th> Film Id </th>
            <th> Jadwal Tayang </th>
            <th> Status Film </th>
            <th> Studio Id </th>
            <th> Harga Tiket </th>
            <th width="280px"> Aksi </th>
        </tr>
        @foreach ($cinemas as $cinema)
        <tr>
            <td> {{ ++$1 }} </td>
            <td> {{ $cinema->nama_bioskop }} </td>
            <td> {{ $cinema->alamat }} </td>
            <td> {{ $cinema->tlp }} </td>
            <td> {{ $cinema->films_id }} </td>
            <td> {{ $cinema->jadwal_tayang }} </td>
            <td> {{ $cinema->status_film }} </td>
            <td> {{ $cinema->studios_id }} </td>
            <td> {{ $cinema->harga_tiket }} </td>
            <td> <form action="{{ route('cinemas.destroy', $cinema->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('cinemas.show', $cinema->id) }}"> Lihat </a>
                    <a class="btn btn-primary" href="{{ route('cinemas.edit', $cinema->id) }}"> Ubah </a>
                        @csrf 
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Hapus </button>
                 </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $cinemas->links() !!}
@endsection
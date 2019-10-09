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
        @foreach ($cinemas as $data)
        <tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{ $data->nama_bioskop }} </td>
            <td> {{ $data->alamat }} </td>
            <td> {{ $data->tlp }} </td>
            <td> {{ $data->films_id }} </td>
            <td> {{ $data->jadwal_tayang }} </td>
            <td> {{ $data->status_film }} </td>
            <td> {{ $data->studios_id }} </td>
            <td> {{ $data->harga_tiket }} </td>
            <td> 
                    <a class="btn btn-info" href="{{ route('cinemas.show', $data->id) }}"> Lihat </a>
                    <form action="{{ route('cinemas.destroy', $data->id) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                    <a class="btn btn-primary" href="{{ route('cinemas.edit', $data->id) }}"> Ubah </a>
                    <button type="submit" class="btn btn-danger"> Hapus </button>
                 </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- {!! $cinemas->links() !!} --}}
@endsection
@extends('films.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tick@ - Pesan Tiket Bioskop Online </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('films.create') }}"> Tambah Film Baru </a>
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
            <th> Judul </th>
            <th> Cover </th>
            <th> Durasi </th>
            <th> Rating </th>
            <th> Sinopsis </th>
            <th> Trailer </th>
            <th width="280px"> Aksi </th>
        </tr>
        @foreach ($films as $film)
        <tr>
            <td> {{ ++$i }} </td>
            <td> {{ $film->judul }} </td>
            <td> {{ $film->cover }} </td>
            <td> {{ $film->durasi }} </td>
            <td> {{ $film->rating }} </td>
            <td> {{ $film->sinopsis }} </td>
            <td> {{ $film->trailer }} </td>
            <td> <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('films.show', $film->id) }}"> Lihat </a>
                    <a class="btn btn-primary" href="{{ route('films.edit', $film->id) }}"> Ubah </a>
                        @csrf 
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger"> Hapus </button>
                 </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $films->links() !!}
@endsection
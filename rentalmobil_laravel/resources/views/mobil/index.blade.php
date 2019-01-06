@extends('layouts.app')

@section('content')
    <a href="{{ route('mobil.create') }}" class="btn btn-info btn-sm">Artikel Baru</a>
    
    @if ($message = Session::get('message'))
        <div class="alert alert-success martop-sm">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-responsive martop-sm">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($mobils as $mobil)
                <tr>
                    <td>{{ $mobil->id }}</td>
                    <td><a href="{{ route('mobil.show', $mobil->id) }}">{{ $mobil->nama }}</a></td>
                    <td>
                        <form action="{{ route('mobil.destroy', $mobil->id) }}" method="post">
                            {{csrf_field()}}
                            {{ method_field('DELETE') }}
                            <a href="{{ route('mobil.edit', $mobil->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
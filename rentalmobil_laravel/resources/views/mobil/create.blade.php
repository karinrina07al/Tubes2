@extends('layouts.app')

@section('content')
<h4>Artikel Baru</h4>
<form action="{{ route('mobil.store') }}" method="post">
    {{csrf_field()}}
    <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="title" class="control-label">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama">
        @if ($errors->has('nama'))
            <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
    </div>
    <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
        <label for="content" class="control-label">Keterangan</label>
        <textarea name="keterangan" cols="30" rows="5" class="form-control"></textarea>
        @if ($errors->has('keterangan'))
            <span class="help-block">{{ $errors->first('keterangan') }}</span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('mobil.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection
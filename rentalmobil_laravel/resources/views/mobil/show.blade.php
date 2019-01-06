@extends('layouts.app')

@section('content')
<h4>{{ $mobil->nama }}</h4>
<p>{{ $mobil->keterangan }}</p>
<a href="{{ route('mobil.index') }}" class="btn btn-default">Kembali</a>
@endsection
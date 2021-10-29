@extends('layouts.master')

@section('judul')
Detail Band {{$band->namaband}}
@endsection

@section('content')

<h1>Nama Band = {{$band->namaband}}</h1>
<p>Album Band = {{$band->albumband}}</p>
<img src="{{$band->gambarband}}" alt="gambar band">
@endsection
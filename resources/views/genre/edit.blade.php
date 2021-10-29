@extends('layouts.master')
@section('judul')
    Edit Genre
@endsection
@section('header')
  <h3 class="card-title">Edit Genre</h3>
  <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
      <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
      <i class="fas fa-times"></i>
    </button>
  </div>
@endsection

@section('content')
<form action="/genre/{{$genre->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
      <label for="title">Nama</label>
      <input type="text" class="form-control" name="nama" value="{{$genre->nama}}" id="nama" placeholder="Masukkan Nama">
      @error('nama')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection

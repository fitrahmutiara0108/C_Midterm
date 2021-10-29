@extends('layouts.master')
@section('judul')
    Tambah Genre
@endsection
@section('header')
  <h3 class="card-title">Tambah Genre</h3>
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
<form action="/genre" method="POST">
  @csrf
  <div class="form-group">
      <label for="title">Nama</label>
      <input type="text" class="form-control" name="nama" id="title" placeholder="Masukkan Nama">
      @error('nama')
          <div class="alert alert-danger">
              {{ $message }}
          </div>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection






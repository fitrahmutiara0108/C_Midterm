@extends('layouts.master')
@section('judul')
    Tambah Rate
@endsection
@section('header')
  <h3 class="card-title">Tambah Rate</h3>
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
<form action="/rate" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">Data Musik</label>
    <select name="music_id" id="" class="form-control">
        <option value="">---Pilih Musik---</option>
        @foreach ($music as $item)
            <option value="{{$item->id}}">{{$item->judul_musik}}</option>                        
        @endforeach
    </select>
    @error('music_id')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="title">Data Admin</label>
    <select name="admin_id" id="" class="form-control">
        <option value="">---Pilih Admin---</option>
        @foreach ($admin as $item)
            <option value="{{$item->id}}">{{$item->username}}</option>                        
        @endforeach
    </select>
    @error('admin_id')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="title">Komentar</label>
    <textarea name="komentar" id="" class="form-control" cols="30" rows="10"></textarea>
    @error('komentar')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="form-group">
    <label for="title">Rating</label>
    <input type="number" class="form-control" name="rating" id="title">
    @error('rating')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection






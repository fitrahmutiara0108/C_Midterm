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
<form action="/rate/{{$rate->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="title">Data Musik</label>
    <select name="music_id" id="" class="form-control">
      <option value="">---Pilih Musik---</option>
        @foreach ($music as $item)
            @if ($item->id === $rate->music_id)
                <option value="{{$item->id}}" selected>{{$item->judul_musik}}</option>
            @else    
                <option value="{{$item->id}}">{{$item->judul_musik}}</option>       
            @endif               
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
            @if ($item->id === $rate->admin_id)
                <option value="{{$item->id}}" selected>{{$item->username}}</option>
            @else    
                <option value="{{$item->id}}">{{$item->username}}</option>
            @endif               
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
    <textarea name="komentar" id="" class="form-control" cols="30" rows="10"> {{$rate->komentar}} </textarea>
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

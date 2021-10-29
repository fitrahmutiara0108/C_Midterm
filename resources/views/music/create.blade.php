@extends('layouts.master')
@section('judul')
Menambahan Music
@endsection
@section('header')
    <h3 class="card-title">Tambah Data Music</h3>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
    </button>
    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
    </button>
    </div>
@endsection
{{-- mohon dicek kembali --}}
@section('content')
        <form action="/music" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Data Band</label>
                <select name="band_id" id="" class="form-control">
                    <option value="">---Pilih Band---</option>
                    @foreach ($band as $item)
                        <option value="{{$item->id}}">{{$item->namaband}}</option>                        
                    @endforeach
                </select>
                @error('band_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Judul Musik</label>
                <input type="text" class="form-control" name="judul_musik" id="title" placeholder="Masukkan Judul Music">
                @error('judul_musik')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Tahun Terbit</label>
                <input type="year" class="form-control" name="tahun_terbit" id="title">
                @error('tahun_terbit')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Genre Band</label>
                <select name="genre_id" id="" class="form-control">
                    <option value="">---Pilih Genre Musik---</option>
                    @foreach ($genre as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>                        
                    @endforeach
                </select>
                @error('genre_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="text">Tambahkan Lirik</label>
                <input type="file" class="form-control-file" id="img" name="file_lirik">

                @error('file_lirik')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
</div>
@endsection

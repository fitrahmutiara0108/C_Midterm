@extends('layouts.master')

@section('judul')
Edit Music
@endsection
@section('header')
    <h3 class="card-title">Edit Data Music</h3>
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
        <form action="/music/{{$music->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Data Band</label>
                <select name="band_id" id="" class="form-control">
                    <option value="">---Pilih Band---</option>
                    @foreach ($band as $item)
                        @if ($item->id === $music->band_id)
                            <option value="{{$item->id}}" selected>{{$item->namaband}}</option>                        
                        @else    
                            <option value="{{$item->id}}">{{$item->namaband}}</option>         
                        @endif               
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
                <input type="text" class="form-control" name="judul_musik" id="title" value=" {{$music->judul_musik}} " placeholder="Masukkan Judul Music">
                @error('judul_musik')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Tahun Terbit</label>
                <input type="year" class="form-control" name="tahun_terbit" id="title" value="{{$music->tahun_terbit}} ">
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
                        @if ($item->id === $music->genre_id)
                            <option value="{{$item->id}}" selected>{{$item->nama}}</option>
                        @else    
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endif               
                    @endforeach
                    
                </select>
                @error('genre_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="img">Tambahkan File Lirik</label>
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
@extends('layouts.master')

@section('judul')
Edit Data Band {{$band->namaband}}
@endsection

@section('header')
    <h3 class="card-title">Edit Data Band</h3>
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
    <form action="/band/{{$band->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Nama Band</label>
            <input type="text" class="form-control" value="{{$band->namaband}}" name="namaband" id="title" placeholder="Masukkan Nama Band">
            @error('namaband')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Album Band</label>
            <input type="text" class="form-control" value="{{$band->albumband}}" name="albumband" id="title" placeholder="Masukkan Album Band">
            @error('albumband')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="img">Tambahkan Gambar Band</label>
            <input type="file" class="form-control-file" id="img" name="gambarband">
            @error('gambarband')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
        {{-- <form action="/band{{$band->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Nama Band</label>
                <input type="text" class="form-control" value="{{$band->namaband}}" name="namaband" id="title" placeholder="Masukkan Nama Band">
                @error('namaband')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="title">Album Band</label>
                <input type="text" class="form-control" value="{{$band->albumband}}" name="albumband" id="title" placeholder="Masukkan Album Band">
                @error('albumband')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="img">Tambahkan Gambar Band</label>
                <input type="file" class="form-control-file" value="{{$band->gambarband}}" id="img" name="gambarband" accept="image/*">
                @error('gambarband')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form> --}}
</div>
@endsection
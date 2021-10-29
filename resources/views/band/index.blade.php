@extends('layouts.master')
@section('judul')
    Data Band
@endsection
@section('header')
  <h3 class="card-title">Data Band</h3>
  <a href="/band/create"><button class="btn btn-primary btn-sm float-right mr-6" type="button"><i class="fas fa-plus" ></i> Tambah Data</button></a>
@endsection
@section('content')
<div class="row">
    @foreach ($band as $item)
    <div class="col-3">
      <div class="card">
        <div class="embed-responsive embed-responsive-4by3">
        {{-- <img src=" {{asset('poster/' . $item->poster)}} " class="card-img-top" alt=""> --}}
        <img class="card-img-top embed-responsive-item" src="{{asset('gambarband/' . $item->gambarband)}}" alt="Card image cap">
        </div>
        <div class="card-body">
            <h5 class="card-title font-weight-bold">{{$item->namaband}}</h5>
            <p class="card-text">{{$item->albumband}}</p>
            <form action="/band/{{$item->id}}" method="POST">
                <a href="/band/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger my-1" value="Delete">
            </form>
        </div>
      </div>
    </div>
        
    @endforeach
  </div>






@endsection
{{-- @extends('layouts.master')

@section('judul')
    Data Band
@endsection

@section('content')

<a href="{{route ('band.create') }}" class="btn btn-primary">Tambah Band</a>
<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Band</th>
        <th scope="col">Album Band</th>
        <th scope="col">Gambar Band</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($band as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->namaband}}</td>
                <td>{{$value->albumband}}</td>
                <td>{{$value->gambarband}}</td>
                <td>
                    <form action=" {{ route('band.show', ['band'=> $value->id])}} " method="POST">
                        <a href="/band/{{$value->id}}" class="btn btn-info">Show</a>
                        <a href="/band/{{$value->id}}/edit" class="btn btn-primary">Edit</a>    
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="3">
                <td>No data</td>
            </tr>  
        @endforelse              
    </tbody>
</table>
@endsection --}}

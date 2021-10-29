@extends('layouts.master')
@section('judul')
    Data Rating
@endsection
@section('header')
  <h3 class="card-title">Data Rating</h3>
  <a href="/rate/create"><button class="btn btn-primary btn-sm float-right mr-6" type="button"><i class="fas fa-plus" ></i> Tambah Data</button></a>
@endsection

@section('content')

<table class="table" id="example1">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Music</th>
      <th scope="col">ID Admin</th>
      <th scope="col">Komentar</th>
      <th scope="col">Rating</th>
      <th scope="col" >Actions</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($rate as $key=>$value)
          <tr>
              <td>{{$key + 1}}</th>
              {{-- <td>{{$value->nama}}</td> --}}
              <td>{{$value->music_id}}</td>
              <td>{{$value->admin_id}}</td>
              <td>{{$value->komentar}}</td>
              <td>{{$value->rating}}</td>
              <td>                 
                  <form action="/rate/{{$value->id}}" method="POST">
                      <a href="/rate/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
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
    
@endsection
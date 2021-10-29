@extends('layouts.master')
@section('judul')
    Data Genre
@endsection
@section('header')
  <h3 class="card-title">Data Genre</h3>
  <a href="/genre/create"><button class="btn btn-primary btn-sm float-right mr-6" type="button"><i class="fas fa-plus" ></i> Tambah Data</button></a>
@endsection

@section('content')

<table class="table" id="example1">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col" >Actions</th>
    </tr>
  </thead>
  <tbody>
      @forelse ($genre as $key=>$value)
          <tr>
              <td>{{$key + 1}}</th>
              <td>{{$value->nama}}</td>
              <td>
                  
                  
                  <form action="/genre/{{$value->id}}" method="POST">
                      <a href="/genre/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
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
@extends('layouts.master')
@section('judul')
    Data Music
@endsection
@section('header')
{{-- <img src="https://ml5vjqzlghi6.i.optimole.com/ETLrWME.FXNq~67988/w:auto/h:auto/q:75/https://sisi.id/wp-content/uploads/2019/08/1-Consultancy-564-x-220-px.jpg" alt="" class="et-waypoint et_pb_animation_top et-animated"> --}}


  <h3 class="card-title">Data Music</h3>
  @auth
  <a href="/music/create"><button class="btn btn-primary btn-sm float-right mr-6" type="button"><i class="fas fa-plus" ></i> Tambah Data</button></a>    
  @endauth
  @endsection

@section('content')

<table class="table" id="example1">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">ID Band</th>
        <th scope="col">Judul Musik</th>
        <th scope="col">Tahun Terbit</th>
        <th scope="col">ID Genre</th>
        <th scope="col">File Lirik</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($music as $key=>$value)
            <tr>
                <td>{{$key + 1}}</th>
                <td>{{$value->band_id}} </td>
                <td>{{$value->judul_musik}}</td>
                <td>{{$value->tahun_terbit}}</td>
                <td>{{$value->genre_id}}</td>
                <td>{{$value->file_lirik}}
                    {{-- <a href="{{url('/download',$value->new_file)}}"class="btn btn-danger"><i class="icon-download-alt"> </i> Download Lirik 1 </a> --}}
                </td>
                <td>
                    @auth
                    <form action="/music/{{$value->id}}" method="POST">
                        {{-- <a href="/music/{{$value->id}}" class="btn btn-info">Show</a> --}}
                        <a href="/music/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger my-1" value="Delete">
                    </form>
                    @endauth
                    @guest
                    <a href="/music/{{$value->id}}" class="btn btn-info">Show</a>
                    @endguest
                    
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


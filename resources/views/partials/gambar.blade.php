@extends('layouts.master')

@section('header')
    <h2 class="card-title">Trending Music</h2>
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
    </button>
    </div>
@endsection
@section('content')

<img src="{{asset('/image/erd.png')}}" alt="" style="width:100%; height: 441px;">
    
@endsection
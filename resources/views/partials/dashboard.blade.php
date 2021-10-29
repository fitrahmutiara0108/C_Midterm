@extends('layouts.master')

@section('header')
    <div class="card-tools">
    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
    </button>
    
    </div>
@endsection
@section('content')
<section class="content-header">
  <center>
    <div id="carouselExampleControls" class="carousel slide col-md-8 col-md-offset-2" data-ride="carousel" style="">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <p class="display-1 text-center text-dark text-xl">SEMUA MUSIK DALAM SATU TEMPAT</p>
          <a href="/music">
          <img src="{{asset('/image/Adele.jpg')}}" class="d-block w-100" alt="..." style="width:100%; height: 441px;">
          </a>
        </div>
        <div class="carousel-item">
          <p class="display-1 text-center text-dark text-xl">MULAI DARI BAND POP, BAND METAL, DAN K-POP</p>
          <a href="/band">
          <img src="{{asset('/image/Abbey.jpg')}}" class="d-block w-100" alt="..." style="width:100%;">
         </a>
        </div>
        <div class="carousel-item">
          <p class="display-1 text-center text-dark text-xl">BERBAGAI GENRE</p>
          <a href="/genre">
          <img src="{{asset('/image/genre.jpg')}}" class="d-block w-100" alt="...">
        </div>
      </a>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </center>

</section>



@endsection
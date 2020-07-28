@extends('layouts.principal')

@section('carousel')
                          <!-- slider o carousel-->
<div class="container">
  <div class="row">
    <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#transition-timer-carousel" data-slide-to="0" class=""></li>
        <li data-target="#transition-timer-carousel" data-slide-to="1" class=""></li>
        <li data-target="#transition-timer-carousel" data-slide-to="2" class="active"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item">
          <img src="{{ asset('imagen/frente frt01.jpg') }}">
            <div class="carousel-caption">
              <h1 class="carousel-caption-header"></h1>
              <p class="carousel-caption-text hidden-sm hidden-xs"></p>
            </div>
        </div>

        <div class="item">
      		<img src="{{ asset('imagen/frente frt02.jpg') }}">
      			<div class="carousel-caption">
      			  <h1 class="carousel-caption-header"></h1>
      			  <p class="carousel-caption-text hidden-sm hidden-xs"></p>
      			</div>
      	</div>

      	<div class="item active">
      		<img src="{{ asset('imagen/frente frt03.jpg') }}">
      	   	<div class="carousel-caption">
              <h1 class="carousel-caption-header"></h1>
      			  <p class="carousel-caption-text hidden-sm hidden-xs"></p>
      		</div>
      	</div>
      </div>
        
        <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>

        <hr class="transition-timer-carousel-progress-bar animate">
    </div>
   </div>
</div> 
<div class="container">
  <h1>Carreras</h1>  
</div> 
          <!-- segundo carousel-->

       <iframe src="{{ asset ('segundo.html')}}" frameborder="0" width="100%" height="350px"></iframe>

@endsection
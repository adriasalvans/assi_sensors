
@extends('layout')

   

@section('content') 
<div class="row">
<div class="col-lg-12 text-center">
    <h1 class="mt-5">Dades meteorològiques de l'hort X</h1>
    <p class="lead">Es mesuren dades diàries de:</p>
    <ul class="list-unstyled">
    <li>Temperatura ºC</li>
    <li>Humitat %</li>
    <li>Pressió hPa</li>
    </ul>
</div>
</div>
<br><br>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="{{ asset('images/hort.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="{{ asset('images/arduino.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="{{ asset('images/bigdata.jpg') }}" alt="Third slide">
    </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>


@endsection

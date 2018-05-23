@extends('layout')

   

@section('content')
<br>
<div class="row">
<div class="col-lg-12 text-center">
    <h1 class="mt-5">{{$title}} del dia</h1>

</div>
</div>
<br>
<div>{!! $chart->container() !!}</div>

<script src=https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js charset=utf-8></script>
 {!! $chart->script() !!}

<br><br><br><br><br><br><br>
@endsection
 
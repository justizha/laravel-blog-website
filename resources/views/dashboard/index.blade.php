@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
</div>
  
<div class="d-flex justify-content-center flex-wrap mt-5 fs-5 mb-5">
    <p>
        Learn More About Laravel You Can Visit The Documentation <br/>

    </p>
</div>
<div class="d-flex justify-content-center ">
   <a href="https://laravel.com/" target="_blank"><img width="200" src="img/1200px-Laravel.svg (1).png" alt="Laravel"></a>

   
</div>
@endsection
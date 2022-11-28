

@extends('layouts.main')
@section('container')
<h1 class="mb-3 mt-5 text-center" data-aos="fade-down" data-aos-duration="1500">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6" data-aos="fade-down" data-aos-duration="1500" data-aos-delay="200">
    <form action="/post">
      @if (request('category'))
          <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari...." name="search" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit" >Cari!</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
  <div class="card mb-3"data-aos="fade-up" data-aos-duration="1200" data-aos-delay="250" data-aos-anchor-placement="top-bottom">
    @if ($posts[0]->image)
    <div style="max-height: 400px; overflow: hidden; " >
        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
    </div>
    @else
         <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
    @endif
   
    <div class="card-body text-center" >
      <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted">
          By.<a href="/post?author={{ $posts[0]->user->name }}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in
          <a href="/post?category={{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name  }}</a>{{  $posts[0]->created_at->diffForHumans() }}
        </small> 
      </p>

      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>

    </div> 
  </div>

<div class="container">
    <div class="row justify-content-center">
      @foreach ($posts->skip(1) as $post) 
        <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1600" data-aos-delay="350" data-aos-offset="280">
          <div class="card" >
            <div class="position-absolute  px-3 py-2 "style="backround-color: rgba( 0, 0, 0, 0.5)"><a href="/post?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
            </div>
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid ">
            @else
                <img src="https://source.unsplash.com/550x450?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
           
            <div class="card-body">   
              <h5 class="card-title">{{ $post->title }}</h5>
              <p>
                <small class="text-muted">
                  By.<a href="/post?author={{ $post->user->name }}" class="text-decoration-none">{{ $post->user->name }}</a> 
                  {{ $post->created_at->diffForHumans() }}
                </small>  
              </p>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
    @endforeach
  </div>
</div>
@else
  <p class="text-center fs-4">No post found</p>
@endif
<div class="d-flex justify-content-center ">
    {{ $posts->links() }}
</div>


@endsection


   

@extends('layouts.main')

@section('container')
<style>
    .title {
        padding-top: 6rem;
    }
</style>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3 title">{{ $post->title }}</h1>
                <p>By .  {{ $post->user->name }} in 
                    <a href="/post?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                @if ($post->image)
                <div style="max-height: 350px; overflow: hidden; ">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                    <article class="my-3 fs-5">
                        {!! $post->body !!}
                    </article>
                    
                <a href="/post" class="d-block mt-3">Back to post</a>
            </div>
        </div>
    </div>


   
@endsection



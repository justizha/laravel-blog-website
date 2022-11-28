@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-md-5 ">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade shows" role="alert">
      <strong>{{ session('success') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session('loginError') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <main class="form-signin m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <form action="/login" method="POST">
        @csrf
        <div class="form-floating ">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="<ame@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email addres</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
      <small class="d-block text-center mt-3">
        Belum Registasi? <a href="/register">Registasi Sekarang!</a>
    </small>
  </main> 
  </div>
</div>

@endsection
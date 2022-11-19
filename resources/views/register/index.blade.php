@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registasi</h1>
    <form class=""action="/register" method="POST">
       @csrf 
      <div class="form-floating">
        <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror" id="name" placeholder="Name..." required value="{{ old('name') }}">
        <label for="name">Name</label>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username')is-invalid @enderror" id="username" placeholder="User Name..." required value="{{ old('username') }}">
        <label for="username">User Name</label>
        @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="contoh@contoh.com" required value="{{ old('email') }}">
        <label for="email" class="">Email Address</label>
      </div>
      @error('email')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
      <div class="form-floating">
        <input type="password" name="password" class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Registasi</button>
    </form>
    <small class="d-block text-center mt-3">
      Sudah Registasi? <a href="/login">Login!</a>
    </small>
  </main>
  </div>
</div>
{{-- <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}




  @endsection
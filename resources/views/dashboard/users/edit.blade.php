@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="h2">Admin Access</h2>
</div>
<div class="col-lg-4">
    <form method="POST" action="/dashboard/users/{{ $user->id }}" class="mb-5" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label ">Name</label> 
          <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name" name="name" required autofucos value=" {{ old('name', $user->name) }}">
          @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="text" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}">
          @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="is_admin">Admin Acces</label>
            <input type="number" class="form-control @error('is_admin') is-invalid @enderror" id="is_admin" name="is_admin" required value="{{ old('is_admin',$user->is_admin) }}">
        </div>
        @error('is_admin')
            {{ $message }}
        @enderror


       
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>

@endsection



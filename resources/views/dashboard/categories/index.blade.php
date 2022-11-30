@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Posts Categories</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
 

 <div class="table-responsive col-lg-4">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="">#</th>
          <th scope="">Categoty Name</th>
          {{-- <th scope="">Action</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)    
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
          {{-- <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          </td> --}}
          {{-- <td>
            
           
            {{-- <form action="{{route('Category.destroy',$category) }}"method ="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick=" return confirm('Are u Sure want to delete this post?')"><span data-feather="x-circle"></span></button>
            </form> 
          </td>--}}
        </tr>
        @endforeach
      </tbody>
    </table>
 </div>
@endsection



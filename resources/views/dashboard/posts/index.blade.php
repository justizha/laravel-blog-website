@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
 

 <div class="table-responsive col-lg-10">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Posts</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="">#</th>
          <th scope="">Title</th>
          <th scope="">Categories</th>  
          <th scope="">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)    
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name  }}</td>
          <td>
            <a onclick="" href="/dashboard/posts/{{ $post->slug }} " id="pop" class="badge bg-info"><span data-feather="eye"></span></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/posts/{{ $post->slug }}"method ="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="popUp()"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
 </div>

 <script>
   function popUp()
    {
      Swal.fire({
      icon: 'success',
      title: 'Post has been successfully Deleted',
      showConfirmButton: false,
      timer: 2000
      })
    }
 </script>
@endsection



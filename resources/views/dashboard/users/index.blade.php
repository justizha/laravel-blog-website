@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manage user</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
  {{ session('success') }}
</div>
@endif
 

 <div class="table-responsive col-lg-9">
 
    <table class="table">
      <thead>
        <tr>
          <th scope="">#</th>
          <th scope="">Name</th>
          <th scope="">Username</th>
          <th scope="">Email</th>
          <th scope="">Admin</th>
          <th scope="">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)    
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->username }}</td>
          <td>{{ $user->email }}</td>
          <td class="text-center">{{ $user->is_admin }}</td>
          <td>
            
            <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            {{-- <form action="{{route('User.destroy',$user) }}"method ="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick=" return confirm('Are u Sure want to delete this post?')"><span data-feather="x-circle"></span></button>
            </form> --}}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
 </div>
@endsection



@extends('layout.main')
@section('title','User')
@section('content')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">No Handphone</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; ?>
      @foreach ($data as $item)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td>{{$item->username}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->phone}}</td>
        <td>{{$item->address}}</td>
        <td>
          <form action="{{route('deleteUser',$item->id)}}" method="POST">
            @csrf
            <button class="btn btn-danger">Delete</button>
          </form>
          <a href="{{route('editUser', $item->id)}}" type="submit" class="btn btn-primary">Edit</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
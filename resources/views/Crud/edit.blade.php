@extends('layout.main')
@section('title','Edit')
@section('content')
<div class="container mt-5">
    <div class="content p-4">
        <div class="card ">
            <div class="row">
                <div class="card-body" >
                    <p class="text-center h1 fw-bold">Acount</p>
                    <form action="{{route('update',$data->id)}}" method="POST">
                        @csrf
                        <div class="input-group mb-3 col-4">
                            <span class="input-group-text" id="basic-addon1">Name</span>
                            <input type="text" name="username" id="username" class="form-control" value="{{$data->username}}" >
                          </div>
                          
                          <div class="input-group mb-3 col-4">
                            <span class="input-group-text" id="basic-addon2">Email</span>
                            <input type="text" name="email" id="email" class="form-control" value="{{$data->email}}" >
                          </div>
                          
                          <div class="input-group mb-3 col-4">
                            <span class="input-group-text">Address</span>
                            <textarea name="address" id="address" cols="141" rows="2" >{{$data->address}}</textarea>
                          </div>
                
                          <div class="input-group mb-3 col-4">
                            <span class="input-group-text">Password</span>
                            <input type="password" class="form-control" name="password" value="{{$data->password}}">
                            <span class="input-group-text">Phone Number</span>
                            <input type="number" name="phone" id="phone" class="form-control" value="{{$data->phone}}">
                          </div>
                          <button type="submit" class="btn btn-primary  ">Submit</button>
                          <a href="/">back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
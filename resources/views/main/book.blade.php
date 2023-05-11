@extends('layout.main')
@section('title','Book')
@section('content')
<div class="book">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info ms-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Add+</button>
  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> Add <i class="bi bi-folder-plus"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('bookCreate')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="input-group mb-3 col-4">
                            <span class="input-group-text" id="basic-addon1">Title</span>
                            <input type="text" name="title" class="form-control" placeholder="Book Title"  >
                          </div>
                          
                          <div class="input-group mb-3 col-4">
                            <span class="input-group-text" id="basic-addon2">Author</span>
                            <input type="text" name="author" class="form-control" placeholder="Book Author" >
                          </div>
                          
                          <div class="input-group mb-3 col-4">
                            <span class="input-group-text">Release</span>
                            <input type="text" name="release" class="form-control" placeholder="Date Release" >
                          </div>
                
                          <div class="input-group mb-3 col-4">
                            <span class="input-group-text">Upload date</span>
                            <input type="date" class="form-control" name="date" >
                            <span class="input-group-text">Time</span>
                            <input type="time" name="time" class="form-control">
                          </div>
                          <div class="input-group mb-3 col-4">
                            <input type="file" name="foto" class="form-control" >
                          </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add +</button>
                </form>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


{{-- end --}}

<div class="container">
    <div class="row  my-4 g-0 ms-3">
        @foreach ($book as $bok)
        <div class="col-3 ">
            <div class="card mt-5" style="width: 18rem;">
                <img src="../assets/img/{{$bok->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">{{$bok->title}}</p>
                  <p class="card-text">{{$bok->author}}</p>
                  <p class="card-text">{{$bok->release}}</p>
                  <p class="card-text">{{$bok->date}}</p>
                  <p class="card-text">{{$bok->time}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
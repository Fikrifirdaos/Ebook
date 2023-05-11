@extends('layout.main')
@section('title','Category')
@section('content')
<div class="book">
  <div class="container">
    <div class="row  my-4 g-0 ms-3">
        @foreach ($category as $cat)
        <div class="col-3 ">
            <div class="card mt-5" style="width: 18rem;">
                <img src="../assets/img/{{$cat->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">{{$cat->title}}</p>
                  <p class="card-text">{{$cat->author}}</p>
                  <p class="card-text">{{$cat->release}}</p>
                  <p class="card-text">{{$cat->date}}</p>
                  <p class="card-text">{{$cat->time}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>
</div> 
@endsection
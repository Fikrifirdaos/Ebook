@extends('layout.main')
@section('title','Dashboard')
@section('content')
<h1>Halo Admin,{{Auth::User()->username}}</h1>
<div class="row my-4 g-0">
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-journals"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-conten-center align-items-end">
                    <div class="card-desc">
                        books
                    </div>
                    <div class="card-count">
                        {{$book}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-conten-center align-items-end">
                    <div class="card-desc">
                        Users
                    </div>
                    <div class="card-count">
                        <a href="/user" style="text-decoration: none; color: #000">{{$data}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data book">
            <div class="row">
                <div class="col-lg-6">
                    <i class="bi bi-calendar"></i>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-conten-center align-items-end">
                    <div class="card-desc">
                        Date
                    </div>
                    <div class="card-count">
                        3
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
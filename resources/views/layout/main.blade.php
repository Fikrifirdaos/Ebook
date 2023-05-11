@extends('link')
<div class="main d-flex flex-column justify-content-between">
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgba(9, 13, 241, 0.74);">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="../assets/img/Logo_Persib.png" width="50" height="50"> PERSBOOK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#openclose" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    <!---->
    <div class="body-main h-100">   
        <div class="row g-0 h-100">
            <div class="sidebar col-lg-2 collapse d-lg-block" id="openclose">
                <a href="/dashboard" @if (request()->route()->uri == 'dashboard') class='active'@endif><i class="bi bi-house p-1"></i>Dashboard</a>
                <a href="/user" @if (request()->route()->uri == 'user') class='active'@endif><i class="bi bi-person-circle p-1"></i>User</a>
                <a href="/book" @if (request()->route()->uri == 'book') class='active'@endif><i class="bi bi-journal-bookmark p-1"></i>Books</a>
                <a href="/category" @if (request()->route()->uri == 'category') class='active'@endif><i class="bi bi-tags p-1"></i>Category</a>
                <a href="/rents_logs" @if (request()->route()->uri == 'rents_logs') class='active'@endif><i class="bi bi-box2 p-1"></i>Rent Logs</a>
            </div>
            <div class="content col-lg-10">
                @yield('content')
            </div>
        </div>
    </div>
</div>



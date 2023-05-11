<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PERS BOOK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgba(9, 13, 241, 0.74)">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/Logo_Persib.png" width="50" height="50">
                PERSBOOK
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Top Three</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Horror</a></li>
                  <li><a class="dropdown-item" href="#">comedy</a></li>
                  <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                </ul>
              </li>
              <li>
                @auth
                  <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit " class="btn btn-warning">logout</button>
                  </form>
                @else
                  <a href="/login" class="btn btn-warning">Login</a>
                @endauth
              </li>
            </ul>
  
            
          </div>
        </div>
      </nav>
      <!--akhir navbar-->

      {{-- corousel --}}
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-height: 400px  max-width:100%">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" data-bs-interval="2000"> 
          <div class="carousel-item active">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="d-block w-100" alt="promosi" style="
            max-height: 400px">
          </div>
          <div class="carousel-item" data-bs-interval="2000"> 
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_9boDlvR4T4UX2H_JWtmGoVqkdMa2Z6BIKA&usqp=CAU" class="d-block w-100" alt="..." style="max-height: 400px">
          </div>
          <div class="carousel-item" data-bs-interval="2000"> 
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmpoXv5YgA2vIVa1hCtp9elXsjUn_9thWVwg&usqp=CAU" class="d-block w-100" alt="..." style="max-height: 400px">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{-- akhir corousel --}}
      {{-- jumbot --}}
      <div class="container mt-4">
        <div class="row" >
            <div class="col-lg-4 ">
                <h2>PERSBOOK</h2>
                <a hre  f="/register" class="btn btn-warning">Ayo Daftar Sekarang!!</a>
            </div>
            <div class="col-md-8 mt-4">
                <p>Perpustakaan adalah sebuah koleksi buku dan majalah. Walaupun dapat diartikan sebagai koleksi pribadi perseorangan, namun perpustakaan lebih umum dikenal sebagai sebuah koleksi besar yang dibiayai dan dioperasikan oleh sebuah kota atau institusi, dan dimanfaatkan oleh masyarakat yang rata-rata tidak mampu membeli sekian banyak buku atas biaya sendiri.</p>
            </div>
        </div>
      </div>
      {{-- akhir jumbot --}}
      {{--card category--}}
      {{-- card popular --}}
      <section class="" style="background-color:  rgb(208, 243, 12)">
        <div class="container mt-4">
            <div class="row text-center">
                <h2 class="mt-4">Popular Book</h2>
            </div>
            <div class="row ms-4">
                <div class="col-lg-4 mt-4 my-4">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Kamu Terlalu Banyak Bercanda</h5>
                          <p class="card-text">Kamu Terlalu Banyak Bercanda atau KTBB adalah novel karya Marchella FP yang merupakan seri dari buku Nanti Kita Cerita tentang Hari Ini..</p>
                          <a href="#" class="btn btn-outline-primary">Baca Sekarang</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 mt-4 my-4">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Kamu Terlalu Banyak Bercanda </h5>
                          <p class="card-text">Kamu Terlalu Banyak Bercanda atau KTBB adalah novel karya Marchella FP yang merupakan seri dari buku Nanti Kita Cerita tentang Hari Ini.</p>
                          <a href="#" class="btn btn-outline-primary">Baca Sekarang</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4 mt-4 my-4">
                    <div class="card shadow" style="width: 18rem;">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Kamu Terlalu Banyak Bercanda</h5>
                          <p class="card-text">Kamu Terlalu Banyak Bercanda atau KTBB adalah novel karya Marchella FP yang merupakan seri dari buku Nanti Kita Cerita tentang Hari Ini.</p>
                          <a href="#" class="btn btn-outline-primary">Baca sekarang</a>
                        </div>
                      </div>
                </div>
            </div>
          </div>
      </section>
      {{-- akhir card popular --}}
      <div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
        <div class="carousel-inner justify-content-center">
          <div class="carousel-item active">
            <div class="row ms-5">
              <div class="col-3"> 
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row ms-5">
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>              
            </div>
          </div>
          <div class="carousel-item">
            <div class="row ms-5">
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card" style="width: 18rem;">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAVzneWN6ivjVsjwl8IUU7QjBLxR_mFCMvcQ&usqp=CAU" class="card-img-top" alt="...">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      {{--end card category }}
      {{-- messege --}}
      <div class="container">
        <div class="row mt-4"> 
            <h2 class="text-center">Message</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form action="{{route('storeMessage')}}" method="post">
                  @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="nama" name="nama" class="form-control" id="name" placeholder="input your name" >
                    </div>
                    <div class="mb-3">
                      <label for="message" class="form-label">Message</label>
                      <textarea name="message" id="message" class="form-control" placeholder="input your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" >Submit</button>
                  </form>
            </div>
        </div>
      </div>
      {{-- akhir messege --}}
      {{-- footer --}}
      <footer class="text-center mt-4" style="height: 40px ; background-color:  rgba(9, 13, 241, 0.74)">
        <p class="text-center">Created by <a href="#" style="text-decoration: none;  color:#fff" >Muhammad Fikri Firdaos</a></p>
      </footer>
      {{-- akhir foooter --}}

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
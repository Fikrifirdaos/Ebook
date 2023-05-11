<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PersBook | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/background.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="content p-4">
            <div class="card ">
                <div class="row">
                    <div class="card-body" >
                        <p class="text-center h1 fw-bold">Register</p>
                        <form action="{{route('registerAcount')}}" method="POST">
                            @csrf
                            <div class="input-group mb-3 col-4">
                                <span class="input-group-text" id="basic-addon1">Name</span>
                                <input type="text" name="username" class="form-control" placeholder="your name"  >
                              </div>
                              
                              <div class="input-group mb-3 col-4">
                                <span class="input-group-text" id="basic-addon2">Email</span>
                                <input type="text" name="email" class="form-control" placeholder="your Email" >
                              </div>
                              
                              <div class="input-group mb-3 col-4">
                                <span class="input-group-text">Address</span>
                                <input type="text" name="address" class="form-control" placeholder="Address" >
                              </div>
                    
                              <div class="input-group mb-3 col-4">
                                <span class="input-group-text">Password</span>
                                <input type="password" class="form-control" name="password" placeholder="password">
                                <span class="input-group-text">Phone Number</span>
                                <input type="number" name="phone" class="form-control" placeholder="+62" maxlength="12">
                              </div>
                              <button type="submit" class="btn btn-primary  ">Submit</button>
                              <a href="/">back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
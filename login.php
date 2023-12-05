<!doctype html>
<html lang="en" class="h-100 w-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mantaka Login</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- My Style -->
    <link rel="stylesheet" href="/assets//css//style.css">
  </head>
  <body class="w-100 h-100 bg-gray-200">
    <div class="container w-100 h-100">
      <div class="row w-100 h-100">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <!-- Card -->
          <div class="card shadow border-0">
            <div class="card-body">
              <div class="row">
                <!-- Left Content -->
                <div class="col-12 col-lg-6 px-5">
                  <div class="row">
                    <div class="col-12">
                      <h1 class="mt-5 text-main-color fw-bold">Login Page</h1>
                      <p class="text-muted mt-3">Halo selamat datang, silahkan masukkan email dan password kamu</p>

                      <form class="mt-5">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@gmail.com" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" placeholder="password" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">
                          <a href="/index.php" class="navbar-brand">Masuk</a>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- Right Content -->
                <div class="col-12 col-lg-6 p-5 rounded">
                  <div class="shadow p-3 rounded bg-white">
                    <img src="./assets/images/login_image.png" alt="image" class="bg-cover w-100 h-100 rounded">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
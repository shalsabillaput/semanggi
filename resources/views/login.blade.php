<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="css/stylelogin.css">

    <title>Login Semanggi's Store</title>
  </head>
  <body>

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/login.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show col-md-8" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        @endif

        @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show col-md-8" style="margin-left: 100px" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        @endif
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3 class="text-center">Login</h3>

            <form action="/login" method="post">
                @csrf
                <div class="form-floating mb-4 mt-4">
                    <input type="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" autofocus required value="{{ old('username') }}" />
                    <label for="username">Username</label>

                    @error('username')
                        <div class="invalid-feedback"></div>
                        {{ $message }}
                    @enderror

                </div>

                <div class="form-floating mb-4 ">
                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" required />
                    <label for="password">Password</label>
                </div>

              <h6>Don't have an account? <a style="color: rgb(135, 135, 215)" href="/signup">Register here!</a></h6>

              <div class="pt-1 mb-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">Login</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



    <script src="js/login/jquery-3.3.1.min.js"></script>
    <script src="js/login/popper.min.js"></script>
    <script src="js/login/bootstrap.min.js"></script>
    <script src="js/login/main.js"></script>
  </body>
</html>

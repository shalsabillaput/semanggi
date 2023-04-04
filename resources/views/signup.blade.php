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

    <title>SignUp Semanggi Store</title>
  </head>
  <body>


  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/login.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3 class="text-center">Sign Up</h3>

            <form action="/signup" method="post">
                @csrf
                <div class="form-floating mb-3 mt-5">
                    <input type="text" id="name"  class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Full Name" required value="{{ old('name') }}" />
                    <label for="name">Full Name</label>

                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>

                  <div class="form-floating mb-3">
                    <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" required value="{{ old('username') }}" />
                    <label for="username">Username</label>

                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address" required value="{{ old('email') }}" />
                    <label for="email">Email Address</label>

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3 ">
                    <select class="form-select" name="role_id" id="role_id">
                        <option selected>Select one</option>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                    <label for="role_id">Role User</label>
                    @error('role_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="form-floating mb-3">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required/>
                    <label for="password">Password</label>

                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Sign Up</button>
                  </div>
              <h6>Already have an account? <a style="color: rgb(135, 135, 215)" href="/login">Login here!</a></h6>


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

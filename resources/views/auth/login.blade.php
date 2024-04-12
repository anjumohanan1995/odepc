
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Riho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Riho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <title>Riho - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/admin/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/feather-icon.css')}}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css')}}">
    <link id="color" rel="stylesheet" href="css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/responsive.css')}}">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-dark" src="images/logo.png" alt="looginpage"><img class="img-fluid for-light" src="images/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main"> 
              <form method="POST" action="{{ route('login') }}">
                        @csrf
                  <h4>Sign in to account </h4>
                  <p>Enter your email & password to login</p>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" name="email"  required="" placeholder="Test@gmail.com">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password </label>
                    <div class="form-input position-relative">
                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
                      <div class="show-hide"> <span class="show"></span></div>
                    </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="checkbox p-0">
                      <input id="checkbox1" type="checkbox">
                      <label class="text-muted" for="checkbox1">Remember password</label>
                    </div><a class="link" href="forget-password.html">Forgot password?</a>
                    <div class="text-end mt-3">
                
                      <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                    </div>
                  </div>
                  <h6 class="text-muted mt-4 or">Or Sign in with</h6>
                  
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="js/icons/feather-icon/feather.min.js"></script>
      <script src="js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- calendar js-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="js/script.js"></script>
    </div>
  </body>
</html>
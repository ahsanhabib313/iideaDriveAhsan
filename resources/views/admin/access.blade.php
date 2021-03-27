{{-- <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Victory Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="col-lg-6 bg-white">
                  <div class="auth-form-light text-left p-5">
                    <h2>Login</h2>
                    <h4 class="font-weight-light">Hello! let's get started</h4>
                    <form class="pt-5">
                      <form>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                          <i class="mdi mdi-account"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          <i class="mdi mdi-eye"></i>
                        </div>
                        <div class="mt-5">
                          <a class="btn btn-block btn-success btn-lg font-weight-medium" href="../../index.html">Login</a>
                        </div>
                        <div class="mt-3 text-center">
                          <a href="#" class="auth-link text-black">Forgot password?</a>
                        </div>
                      </form>                  
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                  <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/misc.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/victory/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2019 09:43:04 GMT -->
</html> --}}


@extends('client.layout.clientPortal')
@section('content')


  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
        <div class="row">
         <div class="col-lg-6 left-half"></div>
         <div class="col-lg-6 d-flex align-items-center justify-content-center">
             <div class="button-container">
                 <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="/clientLogin" class="btn btn-secondary"> <i class="fas fa-user"></i> <br> <Span>User</Span></a>
                    <a href="/adminlogin" class="btn btn-secondary"><i class="fas fa-crown"></i> <br><Span>Admin</Span></a>
                    <a href="manageTills" class="btn btn-secondary"><i class="fas fa-pencil-alt"></i> <br><Span>Till</Span></a>
                </div>
             </div>
         </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!--footer componment ends  -->
@endsection

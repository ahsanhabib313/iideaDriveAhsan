@extends('client.layout.clientPortal')
@section('content')


  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper">
        <div class="row">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
            <div class="row w-100">
              <div class="col-lg-8 mx-auto">
                <div class="row">
                  <div class="col-lg-6 ">
                    <div class="auth-form-light text-left p-5">
                      <h2>Login</h2>
                      <h4 class="font-weight-light">Hello! let's get started</h4>
                      <form class="pt-5">
                        <form>
                          <div class="form-group login">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                            <i class="mdi mdi-account"></i>
                          </div>
                          <div class="form-group login">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            <i class="mdi mdi-eye"></i>
                          </div>
                          <div class="mt-5">
                            <a class="btn btn-block btn-success btn-lg font-weight-medium login-btn" href="../../index.html">Login</a>
                          </div>
                          <div class="mt-3 text-center">
                            <a href="#" class="auth-link text-black">Forgot password?</a>
                          </div>
                        </form>
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-6 login-half-bg d-flex flex-row">
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
    <!--footer componment ends  -->
@endsection
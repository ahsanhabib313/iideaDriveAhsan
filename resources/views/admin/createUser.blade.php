@extends('admin.admin-layout.adminPortal')
@section('dashboard_content')
         <!--Sidebar-->
          <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.admin-layout.sidebar')
        <!-- partial -->
         <!--Sidebar-->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 bg-white p-4">
                 <h2 class="mb-4">Create Users</h2>
                <form>
                    <div class="form-row">
                            <div class="form-group col-md-4">
                        <label for="First Name">First Name</label>
                        <input type="name" class="form-control"  placeholder="First Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Last name">Last Name</label>
                        <input type="name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Username">Username</label>
                        <input type="name" class="form-control"  placeholder="Username">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="City">City</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Zip">Zip</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-4 ml-3">
                        <label for="Role">User Role</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Admin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                            <label class="form-check-label" for="gridRadios2">
                                Super Admin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option2">
                            <label class="form-check-label" for="gridRadios3">
                                Moderator
                            </label>
                        </div>    
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
                            <label class="form-check-label" for="gridRadios4">
                                Editor
                            </label>
                        </div>
                    </div>
                    </div>
                    <input type="submit" class='user-info-submit'>
                </form>
            </div> 
          </div>
            <div class="row mt-5">
                <div class="col-lg-12 bg-white p-4">
                    <h2 class="mb-4">All users</h2>
                    <table class="table">
                        <thead class="thead bg-theme-color">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">City</th>
                                <th scope="col">Zip</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Mark123</td>
                                <td>mark@gmail.com</td>
                                <td>England</td>
                                <td>1254</td>
                                <td>
                                    <a href="/modifyUser" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Rick</td>
                                <td>Wayne</td>
                                <td>Rick</td>
                                <td>rick@gmail.com</td>
                                <td>Australia</td>
                                <td>789</td>
                                <td>
                                    <a href="/modifyUser" class="modify"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Shane</td>
                                <td>Murphy</td>
                                <td>Murphy</td>
                                <td>shane@gmail.com</td>
                                <td>Netherlands</td>
                                <td>5897</td>
                                <td>
                                    <a href="/modifyUser" class="modify"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> <a href="/dashboard">Iideadrive</a>. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 @endsection
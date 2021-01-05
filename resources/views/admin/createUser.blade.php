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
            <div class="col-lg-12">
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
                        <div class="form-group col-md-6">
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
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Moderator
                                </label>
                            </div>    <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Editor
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class='user-info-submit'>
                </form>
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
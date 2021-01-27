@extends('admin.admin-layout.addUserHeader')
@section('dashboard_content')
         <!--Sidebar-->
          <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.admin-layout.sidebar')
        <!-- partial -->
         <!--Sidebar-->
        <div class="content-wrapper">
            <div class="row mt-5 ">
                <div class="col-lg-12 bg-white p-4">
                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <h2 class="mb-3">Users</h2>
                        </div>
                    </div>
                    <table class="table" id="menu-table">
                        <thead class="thead bg-theme-color">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th scope="row">John</th>
                                <td>Doe</td>
                                <td>john123</td>
                                <td>john@gmail.com</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu" ><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <th scope="row">Jane</th>
                                <td>deby</td>
                                <td>jane123</td>
                                <td>jane@gmail.com</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu" ><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <th scope="row">Shawn</th>
                                <td>Murphy</td>
                                <td>murphy007</td>
                                <td>murphy@yahoo.com</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu" ><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>   
                            <tr>
                                <th scope="row">4</th>
                                <th scope="row">Cliif</th>
                                <td>Burton</td>
                                <td>cliff66</td>
                                <td>burton@gmail.com</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu" ><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <th scope="row">James</th>
                                <td>Hetfield</td>
                                <td>Het81</td>
                                <td>james@outlook.com</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu" ><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
    
    
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- add user modal --}}
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalLongTitle">
                                  Add User
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 bg-white p-4">
                                    <div class="col-lg-8 offset-md-2">
                                        <form action="{{ url('addUser') }}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="Item Name">First Name</label>
                                                    <input type="name" class="form-control" name="first_name"  placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Image">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" >
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Price">Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" name="username" >
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Price">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email"
                                                    name="email" >
                                                </div>
                                            </div>
                                            <input type="submit" class='user-info-submit'>
                                        </form>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- add user modal --}}
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
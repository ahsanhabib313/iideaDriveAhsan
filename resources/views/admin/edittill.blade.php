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
                    <div class="col-lg-12 bg-white p-4">
                        <div class="col-lg-8 offset-md-2">
                            <h2 class="mb-4">Edit Tills</h2>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('manageTills') }}">Manage Tills</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Tills</li>
                              </ol>
                            </nav>
                            <form  method="post" action="{{ url('updatetill') }}">
                                @csrf
                               
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="Item Name">Name</label>
                                        <input type="text" class="form-control" name="name"  placeholder="name" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="Item Name">Status</label>
                                        <input type="text" class="form-control" name="name"  placeholder="status" >
                                    </div>
                                </div>
                                <input type="submit" class='user-info-submit'>
                            </form>
                        </div>
                    </div> 
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
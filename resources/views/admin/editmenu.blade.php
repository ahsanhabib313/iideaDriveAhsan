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
                            <h2 class="mb-4">Edit Menu</h2>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('manageMenu') }}">Show Menu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Menu</li>
                              </ol>
                            </nav>
                            <form  method="post" action="{{ url('updatemenu') }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['id'] }}">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="Item Name">Menu Name</label>
                                        <input type="text" class="form-control" name="name"  placeholder="name" value="{{ $data['item_name'] }}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="Item Category">Menu Category</label>
                                        <input type="text" class="form-control" name="category"  placeholder="name" value="{{ $data['item_category'] }}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="Item Price">Menu Price</label>
                                        <input type="number" class="form-control" name="price"  placeholder="name" value="{{ $data['item_price'] }}">
                                    </div>
                                     <div class="form-group col-md-12">
                                        <label for="Item Description"> Menu Description </label>
                                        <textarea type="text" class="form-control" name="description" rows="8"  placeholder="description">{{ $data['item_description'] }}</textarea>
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
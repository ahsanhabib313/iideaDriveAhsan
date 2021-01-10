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
                 <div class="col-lg-8 offset-md-2">
                     <h2 class="mb-4">Add Menu</h2>
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="Item Name">Item Name</label>
                                <input type="name" class="form-control"  placeholder="Name">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Item Image">Item Image</label>
                                <input type="file" class="form-control" >
                            </div>
                               <div class="form-group col-md-12">
                                <label for="Item Image">Category</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Item Price">Item Price</label>
                                <input type="name" class="form-control" placeholder="Price">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="Item Description">Item Description</label>
                                <textarea type="text" class="form-control" rows="8"  placeholder="Description"></textarea>
                            </div>
                        </div>
                        <input type="submit" class='user-info-submit'>
                    </form>
                 </div>
            </div> 
          </div>
            <div class="row mt-5">
                <div class="col-lg-12 bg-white p-4">
                    <h2 class="mb-4">Menus</h2>
                    <table class="table">
                        <thead class="thead bg-theme-color">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Item Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Item Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Beefy Burgers</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-1.jpg" alt=""></td>
                                <td>Fast Food</td>
                                <td>$20</td>
                                <td>The best burger in town. Order now for the ultimate experience</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu" ><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Delish Smoothie</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-4.jpg" alt=""></td>
                                <td>Drinks</td>
                                <td>$15</td>
                                <td>Creamy smoothie on the run</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu" ><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Crackled Sandwich</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-3.jpg" alt=""></td>
                                <td>Fast Food</td>
                                <td>$10</td>
                                <td>Piping Hot sandwiches for the hustlerse</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu"><i class="fas fa-trash "></i></button>
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
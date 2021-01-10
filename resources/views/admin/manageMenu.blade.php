@extends('admin.admin-layout.adminPortal')
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
                            <h2 class="mb-3">Menus</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="popup-btn">
                                <button class="popup" data-toggle="modal" data-target=".bd-example-modal-lg">Add Menu</button>
                                <button class="popup ml" data-toggle="modal" data-target="#exampleModal"">Add Category</button>
                            </div>
                        </div>
                    </div>
                    <table class="table" id="menu-table">
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
                                <td class="width">
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
                             <tr>
                                <th scope="row">4</th>
                                <td>Fried Chicken</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-6.jpg" alt=""></td>
                                <td>Non Veg</td>
                                <td>$25</td>
                                <td>Spicy fried chicken to make an evening great</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu"><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>French Fries</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-5.jpg" alt=""></td>
                                <td>Non Veg</td>
                                <td>$10</td>
                                <td>Fries for the snacks. Order now for the ultimate experience</td>
                                <td>
                                    <a href="#" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                    <button href="#" class="modify d-button deleteMenu"><i class="fas fa-trash "></i></button>
                                </td>
                            </tr>
    
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- add menu modal --}}
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalLongTitle">
                                  Add Menu
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 bg-white p-4">
                                    <div class="col-lg-8 offset-md-2">
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
                        </div>
                    </div>
                </div>
            </div>
            {{-- add menu modal --}}

            {{-- add category modal --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalLabel">Add Category</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 bg-white p-4">
                                    <div class="col-lg-8 offset-md-2">
                                        <h2 class="mb-4">Add Category</h2>
                                        <form action="#" method="post" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="Item Name">Category Name</label>
                                                    <input type="name" class="form-control"  placeholder="Name">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Description">Category Description</label>
                                                    <textarea type="text" class="form-control" rows="8"  placeholder="Description"></textarea>
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
            {{-- add category modal --}}

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
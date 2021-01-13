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
            <div class="col-lg-6">
                <h2 class="mb-2">Manage Tills </h2>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-end">
                
            </div>
              <div class="col-lg-12 bg-white p-4">
                    <table class="table" id="data-table">
                        <thead class="thead bg-theme-color">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Item</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">10101</th>
                                <td>Beefy Burger</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-1.jpg" alt=""></td>
                                <td>$20</td>
                                <td>1</td>
                                <td>$20</td>
                                <td>
                                    <button class="till-btn btn btn-primary">Active</button>
                                </td>
                            </tr>
                            <tr>
                               <th scope="row">10102</th>
                                <td>Delish Smoothie</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-4.jpg" alt=""></td>
                                <td>$5</td> 
                                <td>2</td>
                                <td>$10</td>
                                <td> <button class="till-btn btn btn-primary">Active</button></td>
                            </tr>
                            <tr>
                              <th scope="row">10103</th>
                                <td>Fried Chicken</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-6.jpg" alt=""></td>
                                <td>$25</td> 
                                <td>4</td>
                                <td>$100</td>
                                <td> <button class="till-btn btn btn-info">In Queue</button></td>
                            </tr>
                                  <tr>
                              <th scope="row">10104</th>
                                <td>Crackled Sandwich</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-3.jpg" alt=""></td>
                                <td>$25</td> 
                                <td>4</td>
                                <td>$100</td>  
                                <td>  <button class="till-btn btn btn-danger">Deactive</button></td>
                            </tr>
                            <tr>
                              <th scope="row">10105</th>
                                <td>French Fries</td>
                                <td><img src="{{asset('frontend_assets/')}}/images/food-5.jpg" alt=""></td>
                                <td>$25</td> 
                                <td>4</td>
                                <td>$100</td>
                                <td> <button class="till-btn btn btn-info">In Queue</button></td>
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
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
                <h2 class="mb-2">Order List </h2>
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-end">
                <div class="btn-group" >
                  <button type="button" class="btn btn-success">Delivered</button>
                  <button type="button" class="btn btn-primary">Delivering</button>
                  <button type="button" class="btn btn-info">In Queue</button>
              </div>
            </div>
              <div class="col-lg-12 bg-white p-4">
                    <table class="table responsive-table" id="data-table">
                        <thead class="thead bg-theme-color">
                            <tr>
                                <th scope="col">Order Id</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Item</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">10101</th>
                                <td>Dec 15, 2020</td>
                                <td>Delivered</td>
                                <td>Mark123</td>
                                <td>Beefy Burger</td>
                                <td>$20</td>
                                <td>1</td>
                                <td>$20</td>
                            </tr>
                            <tr>
                               <th scope="row">10102</th>
                                <td>Dec 31, 2020</td>
                                <td>Delivered</td>
                                <td>Austin</td>
                                <td>Delish Smoothie</td>
                                <td>$5</td> 
                                <td>2</td>
                                <td>$10</td>
                            </tr>
                            <tr>
                              <th scope="row">10103</th>
                                <td>Jan 06, 2021</td>
                                <td>On Progress</td>
                                <td>Della</td>
                                <td>Fried Chicken</td>
                                <td>$25</td> 
                                <td>4</td>
                                <td>$100</td>
                            </tr>
                                  <tr>
                              <th scope="row">10103</th>
                                <td>Jan 06, 2021</td>
                                <td>On Progress</td>
                                <td>Della</td>
                                <td>Fried Chicken</td>
                                <td>$25</td> 
                                <td>4</td>
                                <td>$100</td>
                            </tr>
                                  <tr>
                              <th scope="row">10103</th>
                                <td>Jan 06, 2021</td>
                                <td>On Progress</td>
                                <td>Della</td>
                                <td>Fried Chicken</td>
                                <td>$25</td> 
                                <td>4</td>
                                <td>$100</td>
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
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
                                <th scope="col">Action</th>
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
                                <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target=".bd-example-modal-lg">Details</button></td>
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
                                <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target=".bd-example-modal-lg">Details</button></td>
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
                                <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target=".bd-example-modal-lg">Details</button></td>
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
                                <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target=".bd-example-modal-lg">Details</button></td>
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
                                <td><button type="button" class="btn btn-info"  data-toggle="modal" data-target=".bd-example-modal-lg">Details</button></td>
                            </tr>
                        </tbody>
                    </table>
              </div>
        
            </div>
            {{-- order details modal --}}
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="modal-title text-white" id="exampleModalLongTitle">
                        Order Details
                    </h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="order-metadata">
                          <h3>Order Id: 10101</h3>
                          <h6>Date: Dec 15, 2020</h6>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="order-metadata d-flex justify-content-end">
                          <h3>Customer Name: Mark</h3>
                        </div>
                      </div>
                      <div class="col-lg-8 offset-lg-2">
                        <table class="table responsive-table mt-3" id="data-table">
                          <thead class="thead bg-theme-color">
                              {{-- <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Price</th>
                              </tr> --}}
                          </thead>
                          <tbody>
                              <tr>
                                <td><h3>Beefy Burger</h3></td>
                                <td><h6>$20</h6></td>
                              </tr>
                              <tr>
                                <td><h6>Quantity</h6></td>
                                <td><h6>1</h6></td>
                              </tr>
                              <tr>
                                <td><h6>Total</h6></td>
                                <td><h6>$20</h6></td>
                              </tr>
                              <tr>
                                <td><h6>Vat</h6></td>
                                <td><h6>15%</h6></td>
                              </tr>
                               <tr>
                                <td><h6>Grand Total</h6></td>
                                <td><h6>$23</h6></td>
                              </tr>
                          </tbody>
                      </table>
                      </div>
                    </div>
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
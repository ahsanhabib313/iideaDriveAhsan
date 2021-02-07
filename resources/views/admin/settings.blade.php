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
                <h2 class="mb-2">Settings</h2>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Language</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Payment</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <h3 >Select Prefered Language </h3>
                        <select class="mt-2">
                            <option data-display="Language">Language</option>
                            <option value="1">English</option>
                            <option value="2">Bengali</option>
                            <option value="3" >German</option>
                            <option value="4">Italian</option>
                        </select>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <h3>Confirm Payment</h3>
                        <form  class="mt-2">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">Card Number</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="0000 000 000">
                                </div>
                            </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputAddress">Expiry Date (MM-YYYY)</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="MM">
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="inputAddress2"></label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="YYYY">
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="inputAddress2">CVC/CVV</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="3 or 4 digit number ">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputState">Country</label>
                                    <select id="inputState" class="form-control">
                                        <option data-display="Country">Country</option>
                                        <option value="1">UK</option>
                                        <option value="2">USA</option>
                                        <option value="3" >Australia</option>
                                        <option value="4">Japan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip" placeholder="Zip code">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Make Payment</button>
                        </form>   
                        <div class="payment-card mt-2">
                            <img src="{{asset('admin_assets/')}}/images/cards/card1.png" alt="">
                            <img class="new-size" src="{{asset('admin_assets/')}}/images/cards/card2.png" alt="">
                            <img class="new-size ml-2" src="{{asset('admin_assets/')}}/images/cards/card3.png" alt="">
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
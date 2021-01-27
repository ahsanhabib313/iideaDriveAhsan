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
                <form class="mb-4" action="{{ url('addtills') }}" method="post">
                  @csrf
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="name" class="form-control" placeholder="Enter Name" name="name">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Status</label>
                        <input type="text" class="form-control" placeholder="Status" name="status">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Till Operator</label>
                        <input type="text" class="form-control" placeholder="Till Operator" name="till_operator">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Order In Queue </label>
                        <input type="text" class="form-control" placeholder="Order In Queue" name="order_in_queue">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Order Delivered</label>
                        <input type="text" class="form-control" placeholder="Order Delivered" name="order_delivered">
                      </div>
                      <div class="form-group col-md-4">
                        <label for="exampleInputPassword1">Last Order Delivered</label>
                        <input type="text" class="form-control" placeholder="Last Order Delivered" name="last_order_delivered">
                      </div>
                    </div>
                  <button type="submit" class="user-info-submit">Submit</button>
                </form>
                <div class="col-lg-6">
                  <h2 class="mb-2 mt-4">Show Tills </h2>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-end">
                    
                </div>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            {{-- <button type="button" class="close" data-dismiss="alert">×</button>     --}}
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($errors->all())
                        <div class="aler alert-danger alert-block p-2 mb-3">
                            @foreach ($errors->all() as $error)
                                <li><strong>{{ $error }}</strong></li>
                            @endforeach
                        </div>
                    @endif
                    <table class="table" id="data-table">
                        <thead class="thead bg-theme-color">
                            <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Till Operator</th>
                                <th scope="col">Order In Queue</th>
                                <th scope="col">Order Delivered</th>
                                <th scope="col">Last Order Delivered</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($tills as $till)
                            <tr>
                              <th scope="row">{{ $loop->index+1 }}</th>
                              <th scope="row">{{ $till->id }}</th>
                              <td> {{ $till->name }}</td>
                              <td>
                                {{-- <button class="till-btn btn btn-primary">Active</button> --}}
                                {{ $till->status }} 
                              </td>
                              <td>{{ $till->till_operator }}</td>
                              <td> {{ $till->order_in_queue }} </td>
                              <td>{{ $till->order_delivered }}</td>
                              <td>{{ $till->last_order_delivered }}</td>
                            </tr>
                          @endforeach
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
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
                {!!Form::open(array('url' => 'updatecategory'))!!}
                <div class="col-lg-12">
                    <div class="col-lg-12 bg-white p-4">
                        <div class="col-lg-8 offset-md-2">
                            <h2 class="mb-4">Edit Category</h2>
                            <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('showcategory') }}">Show Category</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                              </ol>
                            </nav>
                            <form>
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['id'] }}">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                      {!! Form::label('Item Name', trans("Category name"), ['class' => 'control-label required']) !!}
                                      {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                      @if($errors->has('name'))
                                          <p class="help-block">{{ $errors->first('name') }}</p>
                                      @endif
                                    </div>
                                    <div class="form-group col-md-12">
                                      {!! Form::label('Item Description', trans("Category description"), ['class' => 'control-label required']) !!}
                                      {!! Form::text('description', null, ['class' => 'form-control']) !!}
                                      @if($errors->has('description'))
                                          <p class="help-block">{{ $errors->first('description') }}</p>
                                      @endif
                                    </div>
                                </div>
                                 {!!Form::submit(trans("Submit"), array('class'=>"user-info-submit"))!!}
                                {{-- <input type="submit" class='user-info-submit'> --}}
                            </form>
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
@extends('admin.admin-layout.manageMenuHeader')
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
                <h4>Total Categories: {{ $total_cat }}</h4>
                <div class="col-lg-12 bg-white p-4">
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
                                <th scope="col">Category Id</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Category description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($category as $cat)
                            <tr>
                                <th scope="row">{{ $loop->index+1 }}</th>
                                <th scope="row">{{ $cat->id }}</th>
                                <td>{{Str::title($cat->name) }}</td>
                                <td>{{ $cat->description }}</td>
                                <td>
                                    <a href="{{ url('editcategory') }}/{{ $cat->id }}" class="btn btn-primary text-white">Edit</a>
                                    <button class="btn btn-danger text-white popup-delete" value="{{ url('deletecategory') }}/{{ $cat->id }}">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
              </div>
        
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
                                        <form  method="post" action="{{ url('addmenu') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="Item Name">Item Name</label>
                                                    <input type="text" name="item_name" class="form-control"  placeholder="Name">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Image">Item Image</label>
                                                    <input type="file" name="item_image" class="form-control" onchange="previewFile(this)" >
                                                     <img id="previewimage" alt="preview" style="width: 130px; margin-top:20px">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Image">Category</label>
                                                    <input type="text" name="item_category" class="form-control" >
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Price">Item Price</label>
                                                    <input type="number" name="item_price" class="form-control" placeholder="Price">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Description">Item Description</label>
                                                    <textarea type="text" name="item_description" class="form-control" rows="8"  placeholder="Description"></textarea>
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
                <script>
                    function previewFile(input){
                        var file = $('input[type=file]').get(0).files[0];
                        if(file){
                            var reader = new FileReader();
                            reader.onload = function(){
                                $('#previewimage').attr('src', reader.result);
                            }
                            reader.readAsDataURL(file);
                        }
                    }
                </script>
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
                                        <form action="{{ url('addcategory') }}"  method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="Item Name">Category Name</label>
                                                    <input type="text" class="form-control" name="name"  placeholder="name" value="{{ old('name') }}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Description">Category Description</label>
                                                    <textarea type="text" class="form-control" name="description" rows="8"  placeholder="description">{{ old('description') }}</textarea>
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
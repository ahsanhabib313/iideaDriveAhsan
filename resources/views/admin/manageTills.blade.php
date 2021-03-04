@extends('admin.admin-layout.tillHeader')
@section('dashboard_content')
         <!--Sidebar-->
          <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        @include('admin.admin-layout.sidebar')
        <!-- partial -->
         <!--Sidebar-->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 d-flex align-items-center justify-content-end">
            </div>
              <div class="col-lg-12 bg-white p-4">
               
                <div class="col-lg-6">
                  <h2 class="mb-2 mt-4">Show Tills </h2>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-end">
                    
                </div>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
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
                                <th>Actions</th>
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
                              <td> 
                                <a href="#exampleModalMenu" data-toggle="modal" data-target="#exampleModalMenu"
                                data-id="{{ $till->id }}" data-name="{{ $till->name }}" data-status="{{ $till->status }}"
                                        data-operator="{{ $till->till_operator }}" data-order="{{ $till->order_in_queue }}" data-dekiver="{{ $till->order_delivered }}"
                                        data-last = "{{ $till->last_order_delivered }}" class="btn btn-primary text-white btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm text-white popup-delete" value="{{ url('deletetill') }}/{{ $till->id }}">Delete</button>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
               {{-- add Tills modal --}}
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalLongTitle">
                                  Add Tills
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                              {!!Form::open(array('url' => 'addtills'))!!}
                                <div class="col-lg-12 bg-white p-4">
                                    <div class="col-lg-8 offset-md-2">
                                         <form >
                                          @csrf
                                            <div class="form-row">
                                              <div class="form-group col-md-4">
                                                {!! Form::label('Name', trans("Tills Name"), ['class' => 'control-label required']) !!}
                                                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                @if($errors->has('name'))
                                                  <p class="help-block">{{ $errors->first('name') }}</p>
                                                @endif
                                              </div>
                                              <div class="form-group col-md-4">
                                                {!! Form::label('Status', trans("Tills Status"), ['class' => 'control-label required']) !!}
                                                {!! Form::text('status', null, ['class' => 'form-control']) !!}
                                                @if($errors->has('status'))
                                                  <p class="help-block">{{ $errors->first('status') }}</p>
                                                @endif
                                              </div>
                                              <div class="form-group col-md-4">
                                                {!! Form::label('Till Operator', trans("Tills Operators"), ['class' => 'control-label required']) !!}
                                                {!! Form::text('till_operators', null, ['class' => 'form-control']) !!}
                                                @if($errors->has('till_operators'))
                                                  <p class="help-block">{{ $errors->first('till_operators') }}</p>
                                                @endif
                                              </div>
                                              <div class="form-group col-md-4">
                                                {!! Form::label('Order In Queue', trans("Order in queue"), ['class' => 'control-label required']) !!}
                                                {!! Form::text('order_in_queue', null, ['class' => 'form-control']) !!}
                                                @if($errors->has('order_in_queue'))
                                                  <p class="help-block">{{ $errors->first('order_in_queue') }}</p>
                                                @endif
                                              </div>
                                              <div class="form-group col-md-4">
                                                {!! Form::label('Order Delivered', trans("Order delivered"), ['class' => 'control-label required']) !!}
                                                {!! Form::text('order_delivered', null, ['class' => 'form-control']) !!}
                                                @if($errors->has('order_delivered'))
                                                  <p class="help-block">{{ $errors->first('order_delivered') }}</p>
                                                @endif
                                              </div>
                                              <div class="form-group col-md-4">
                                                {!! Form::label('Last Order Delivered', trans("last order delivered"), ['class' => 'control-label required']) !!}
                                                {!! Form::text('last_order_delivered', null, ['class' => 'form-control']) !!}
                                                @if($errors->has('last_order_delivered'))
                                                  <p class="help-block">{{ $errors->first('last_order_delivered') }}</p>
                                                @endif
                                              </div>
                                            </div>
                                            {!!Form::submit(trans("Submit"), array('class'=>"user-info-submit"))!!}
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


             {{-- edit Tills modal --}}
            <div class="modal fade" id="exampleModalMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalLabel">Edit Tills</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12 bg-white p-4">
                                    <div class="col-lg-8 offset-md-2">
                                        <form  method="post" action="{{ url('updatetill') }}">
                                            @csrf
                                            
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="Item Name">Name</label>
                                                    <input type="text" class="form-control" name="name"  placeholder="name" value="{{ old('name') }}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="Item Name">Status</label>
                                                    <input type="text" class="form-control" name="status"  placeholder="status" value="{{ old('status') }}">
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
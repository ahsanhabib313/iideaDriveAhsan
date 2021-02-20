@extends('admin.admin-layout.addUserHeader')
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
                            <h2 class="mb-3">Users</h2>
                        </div>
                    </div>
                    <table class="table" id="menu-table">
                        <thead class="thead bg-theme-color">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col">Profile</th> --}}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <th scope="row">{{$user->first_name}}</th>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->email}}</td>
                                    {{-- <td>{{$user->profile_id}}</td> --}}
                                    <td>
                                        <a  data-toggle="modal" data-target="#bd-example-modal-lg"  href="{{route('modifyUser', array('userId'=>$user->id))}}" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                        <button href="{{ route('deleteUser', array('userId'=>$user->id)) }}" class="modify d-button cat-del" ><i class="fas fa-trash "></i></button>
                                    </td>
                                </tr>
                            @endforeach 
    
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- add user modal --}}
            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalLongTitle">
                                  Add User
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                {!!Form::open(array('url' => 'createUser'))!!}
                                <div class="col-lg-12 bg-white p-4">
                                    <div class="col-lg-8 offset-md-2">
                                        <form >
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    {!! Form::label('first_name', trans("First Name"), ['class' => 'control-label required']) !!}
                                                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                                                    @if($errors->has('first_name'))
                                                        <p class="help-block">{{ $errors->first('first_name') }}</p>
                                                    @endif
                                                    {{-- <label for="Item Name">First Name</label>
                                                    <input type="name" class="form-control" name="first_name"  placeholder="First Name"> --}}
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {!! Form::label('last_name', trans("Last Name"), ['class' => 'control-label required']) !!}
                                                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                                                    @if($errors->has('last_name'))
                                                        <p class="help-block">{{ $errors->first('last_name') }}</p>
                                                    @endif
                                                    {{-- <label for="Item Image">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" > --}}
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {!! Form::label('userame', trans("Userame"), ['class' => 'control-label required']) !!}
                                                    {!! Form::text('username', null, ['class' => 'form-control']) !!}
                                                    @if($errors->has('username'))
                                                        <p class="help-block">{{ $errors->first('username') }}</p>
                                                    @endif
                                                    {{-- <label for="Item Price">Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" name="username" > --}}
                                                </div>
                                                <div class="form-group col-md-4">
                                                    {!! Form::label('email', trans("Email"), ['class' => 'control-label required']) !!}
                                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                                    @if($errors->has('email'))
                                                        <p class="help-block">{{ $errors->first('email') }}</p>
                                                    @endif
                                                    {{-- <label for="Item Price">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email"
                                                    name="email" > --}}
                                                </div>
                                                <div class="form-group col-md-4 {{ ($errors->has('password')) ? 'has-error' : '' }}">
                                                    {!! Form::label('password', trans("User.password"), ['class' => 'control-label required']) !!}
                                                    {!! Form::password('password',  ['class' => 'form-control']) !!}
                                                    @if($errors->has('password'))
                                                        <p class="help-block">{{ $errors->first('password') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4 {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                                                    {!! Form::label('password_confirmation', 'Password again', ['class' => 'control-label required']) !!}
                                                    {!! Form::password('password_confirmation',  ['class' => 'form-control']) !!}
                                                    @if($errors->has('password_confirmation'))
                                                        <p class="help-block">{{ $errors->first('password_confirmation') }}</p>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-4 {{ ($errors->has('profile')) ? 'has-error' : '' }}">
                                                    <label for="Role">User Role</label>
                                                    @foreach ($profiles as $profile)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="profile_id" id="profile" value="{{$profile->id}}">
                                                        <label class="form-check-label" for="profile">
                                                        {{$profile->description}}
                                                        </label>
                                                        @if($errors->has('profile'))
                                                        <p class="help-block">{{ $errors->first('profile') }}</p>
                                                        @endif
                                                    </div>
                                                    @endforeach 
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
            </div>
            {{-- add user modal --}}
            {{-- modify user modal --}}
            <div class="modal fade " id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="modal-title text-white" id="exampleModalLongTitle">
                                Update User
                            </h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                               <form action="" method="">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="First Name">First Name</label>
                                            <input type="name" class="form-control"  placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Last name">Last Name</label>
                                            <input type="name" class="form-control" placeholder="Last Name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Username">Username</label>
                                            <input type="name" class="form-control"  placeholder="Username">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Email">Email</label>
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="City">City</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="Zip">Zip</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-md-4 ml-3">
                                            <label for="Role">User Role</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Admin
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Super Admin
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option2">
                                                <label class="form-check-label" for="gridRadios3">
                                                    Moderator
                                                </label>
                                            </div>    
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option2">
                                                <label class="form-check-label" for="gridRadios4">
                                                    Editor
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class='user-info-submit'>Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- add user modal --}}
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
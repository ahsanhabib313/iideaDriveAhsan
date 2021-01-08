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
            {!!Form::open(array('url' => 'createUser'))!!}
            <div class="col-lg-12 bg-white p-4">
                 <h2 class="mb-4">Create Users</h2>
                <form>
                    <div class="form-row">
                    <div class="form-group col-md-4 {{ ($errors->has('first_name')) ? 'has-error' : '' }}">
                        {!! Form::label('first_name', trans("User.first_name"), ['class' => 'control-label required']) !!}
                        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                        @if($errors->has('first_name'))
                            <p class="help-block">{{ $errors->first('first_name') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-4 {{ ($errors->has('last_name')) ? 'has-error' : '' }}">
                        {!! Form::label('last_name', trans("User.last_name"), ['class' => 'control-label required']) !!}
                        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                        @if($errors->has('last_name'))
                            <p class="help-block">{{ $errors->first('last_name') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-4 {{ ($errors->has('Username')) ? 'has-error' : '' }}">
                        {!! Form::label('Username', trans("User.Username"), ['class' => 'control-label required']) !!}
                        {!! Form::text('Username', null, ['class' => 'form-control']) !!}
                        @if($errors->has('Username'))
                            <p class="help-block">{{ $errors->first('Username') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-4 {{ ($errors->has('email')) ? 'has-error' : '' }}">
                        {!! Form::label('email', trans("User.email"), ['class' => 'control-label required']) !!}
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        @if($errors->has('email'))
                            <p class="help-block">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="form-group  col-md-4 {{ ($errors->has('password')) ? 'has-error' : '' }}">
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
                    <div class="form-group col-md-4 ml-3 {{ ($errors->has('profile')) ? 'has-error' : '' }}">
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
                    {!!Form::submit(trans("User.sign_up"), array('class'=>"user-info-submit"))!!}
                </form>
            </div> 
          </div>
            <div class="row mt-5">
                <div class="col-lg-12 bg-white p-4">
                    <h2 class="mb-4">All users</h2>
                    <table class="table">
                        <thead class="thead bg-theme-color">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">City</th>
                                <th scope="col">Zip</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Mark123</td>
                                <td>mark@gmail.com</td>
                                <td>England</td>
                                <td>1254</td>
                                <td>
                                    <a href="/modifyUser" class="modify"><i class="fas fa-pencil-alt "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Rick</td>
                                <td>Wayne</td>
                                <td>Rick</td>
                                <td>rick@gmail.com</td>
                                <td>Australia</td>
                                <td>789</td>
                                <td>
                                    <a href="/modifyUser" class="modify"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Shane</td>
                                <td>Murphy</td>
                                <td>Murphy</td>
                                <td>shane@gmail.com</td>
                                <td>Netherlands</td>
                                <td>5897</td>
                                <td>
                                    <a href="/modifyUser" class="modify"><i class="fas fa-pencil-alt"></i></a>
                                </td>
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
     {!!Form::close()!!}
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 @endsection
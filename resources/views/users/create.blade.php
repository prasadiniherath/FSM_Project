@extends('layouts.app')

@section('title')
    Add-User | Sales Automation system
@endsection


@section('content')

    <br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <div class="card">

                    <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
@foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
@endif -->

                        <div class="card-header">
                            <h2>Add a new user</h2>
                        </div>
                        <div class="card-body">


                            <form method="POST" action="{{ route('user.store') }}">

                                @csrf


                                <div class="form-group row">
                                    <label for="first_name" class="col-md-2 col-form-label">First Name:</label>
                                    <div class="col-sm-10">
                                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name">

                                        @if ($errors->has('first_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('first_name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="middle_name" class="col-md-2 col-form-label">Middle Name:</label>
                                    <div class="col-sm-10">
                                        <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" required autocomplete="middle_name"autofocus placeholder="Middle Name">

                                        @if ($errors->has('middle_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('middle_name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="last_name" class="col-md-2 col-form-label">Last Name:</label>
                                    <div class="col-sm-10">
                                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Last Name">

                                        @if ($errors->has('last_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('last_name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="NIC" class="col-md-2 col-form-label">NIC:</label>
                                    <div class="col-sm-10">
                                        <input id="NIC" type="text" class="form-control @error('NIC') is-invalid @enderror" name="NIC" value="{{ old('NIC') }}" required autocomplete="NIC" autofocus placeholder="NIC">

                                        @if ($errors->has('NIC'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('NIC') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>




                                <div class="form-group row">
                                    <label for="Address" class="col-md-2 col-form-label">Address:</label>
                                    <div class="col-sm-10">
                                        <input id="Address" type="text" class="form-control @error('Address') is-invalid @enderror" name="Address" value="{{ old('Address') }}" required autocomplete="Address" autofocus placeholder="Address">

                                        @if ($errors->has('Address'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Address') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="telephone_number" class="col-md-2 col-form-label">Telephone Number:</label>
                                    <div class="col-sm-10">
                                        <input id="telephone_number" type="text" class="form-control @error('telephone_number') is-invalid @enderror" name="telephone_number" value="{{ old('telephone_number') }}" required autocomplete="telephone_number" autofocus placeholder="Telephone Number">

                                        @if ($errors->has('telephone_number'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('telephone_number') }}</strong>
                                                </span>
                                        @endif

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="gender" class="col-md-2 control-label">Gender:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="Gender" required="required" value="{{ old('Gender') }}" placeholder="--Select gender--">
                                            <option value="male" name="male">Male</option>
                                            <option value="female" name="female">Female</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="Date_Of_Birth" class="col-md-2 control-label">Date of Birth:</label>
                                    <div class="col-sm-10">
                                        <input id="Date_Of_Birth" type="date" class="Date_Of_Birth" name="Date_Of_Birth" value="{{ old('Date_Of_Birth') }}" required autofocus>

                                        @if ($errors->has('Date_Of_Birth'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('Date_Of_Birth') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="branch_name" class="col-md-2 col-form-label">Branch Name:</label>
                                    <div class="col-sm-10">
                                        <input id="branch_name" type="text" class="form-control @error('branch_name') is-invalid @enderror" name="branch_name" value="{{ old('branch_name') }}" required autocomplete="branch_name" autofocus placeholder="Branch Name">

                                        @if ($errors->has('branch_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('branch_name') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="user_typeID" class="col-md-2 control-label">User Type:</label>
                                    <div class="col-sm-10">
                                        <select class="form-control"  name="user_typeID" >
                                            @foreach ($usertypes as $usertype)
                                                <option value="{{$usertype->user_typeID}}">
                                                    {{$usertype->user_type_name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label">Email:</label>
                                    <div class="col-sm-10">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>
{{--new addded--}}
                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input   class="form-control"  name="username" value="{{ old('username') }}"  placeholder="Username">

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label">approvel</label>
                                    <div class="col-sm-10">
                                        <input   class="form-control"  name="approvel_state" value="{{ old('approvel_state') }}"  placeholder="approvel_state">

                                    </div>
                                </div>






                                <div class="form-group row">
                                    <label for="password" class="col-md-2 col-form-label">Password:</label>
                                    <div class="col-sm-10">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                        <p id="passwordHelpBlock" class="form-text text-muted">
                                            Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 special character.
                                        </p>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>



                                <div class="form-group row">
                                    <label for="password" class="col-md-2 col-form-label">Password:</label>
                                    <div class="col-sm-10">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>


                                <div class="text-right">
                                    <input name="register" id="register" class="btn btn-primary" type="submit" value="Save">
                                    <a class="btn btn-secondary" href="{{route('user.index')}}">Cancel</a>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection


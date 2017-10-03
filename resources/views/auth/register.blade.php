@extends('layouts.start')

@section('content')
<div class="container" id="login-block">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>
                    @if (session('confirmation-success'))
                        <div class="alert alert-success">
                            {{ session('confirmation-success') }}
                        </div>
                    @else
                        <form class="form-signup" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                           <div class="row">
                           <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="append-icon">                                
                                    <input id="name" type="text" class="form-control form-white firstname" placeholder="First Name" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif                                
                                 </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                             <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">                                
                                <div class="append-icon">
                                    <input id="last_name" type="text" class="form-control form-white firstname" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required >

                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group{{ $errors->has('age_range') ? ' has-error' : '' }}">                                
                                <div class="append-icon">
                                    <input id="age_range" type="text" class="form-control form-white firstname" placeholder="Age Range" name="age_range" value="{{ old('age_range') }}" required >

                                    @if ($errors->has('age_range'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('age_range') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                             <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">                                
                                <div class="append-icon">
                                    <input id="nationality" type="text" class="form-control form-white firstname" placeholder="Nationality" name="nationality" value="{{ old('nationality') }}" required >

                                    @if ($errors->has('nationality'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nationality') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                             <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">                            
                                <div class="append-icon">
                                    <input id="state" type="text" class="form-control form-white firstname" placeholder="State" name="state" value="{{ old('state') }}" required>

                                    @if ($errors->has('state'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                             <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">                            
                                <div class="append-icon">
                                    <input id="gender" type="text" class="form-control form-white firstname" placeholder="Gender" name="gender" value="{{ old('gender') }}" required>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                             <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">                                
                                <div class="append-icon">
                                    <input id="address" type="text" class="form-control form-white firstname" placeholder="Address" name="address" value="{{ old('address') }}" required >

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                                
                                <div class="append-icon">
                                    <input id="email" type="email" class="form-control form-white email" placeholder="Email" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            </div>
                             <div class="row">
                             <div class="col-sm-6">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">                                
                                <div class="append-icon">
                                    <input id="password" type="password" class="form-control form-white password" placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="form-group">
                                <div class="append-icon">
                                    <input id="password-confirm" type="password" class="form-control form-white firstname" placeholder="Repeat Password" name="password_confirmation" required>
                                </div>
                            </div>
                            </div>
                            
                            <div class="col-sm-6">
                            <div class="form-group">
                                <div class="append-icon">
                                    {!! Recaptcha::render() !!}
                                     @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                            
                            </div>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                   
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>


                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.start')

@section('content')
<div class="container" id="login-block">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                    <i class="user-img icons-faces-users-03"></i>
                    @if (session('confirmation-success'))
                        <div class="alert alert-success">
                            {{ session('confirmation-success') }}
                        </div>
                    @endif
                    @if (session('confirmation-danger'))
                        <div class="alert alert-danger">
                            {!! session('confirmation-danger') !!}
                        </div>
                    @endif
                    <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="append icon form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <!--<input type="text" name="name" id="name" class="form-control form-white username" placeholder="Username" required>-->
                                <input id="email" type="email" class="form-control form-white username" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                                

                                
                            

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" name="password" id="password" class="form-control form-white password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                {!! Recaptcha::render() !!}
                            </div>

                        </div>
                        
                        <br>
<button type="submit" id="submit-form" class="btn btn-lg btn-danger btn-block ladda-button" data-style="expand-left">Sign In</button>

                                
                        <div class="clearfix">
                                <p class="pull-left "><a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a></p>
                                <p class="pull-right "><a href="{{ url('/register') }}">Don't have an account? Register</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

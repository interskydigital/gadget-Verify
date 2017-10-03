@extends('layouts.start')

@section('content')
<div class="container" id="login-block">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03"></i>

                
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-signup" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        
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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

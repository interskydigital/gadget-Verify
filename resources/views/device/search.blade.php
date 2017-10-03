 @extends('layouts.master')
@section('content')
 
 
  <form role="form" method="POST" action="{{ url('/device/{search}S') }}">
                            {{ csrf_field() }}
                             <div class="form-group">
                        <label class="form-label">Search</label>
                        <input type="text" class="form-control" placeholder="Search by Name or IEMI or Serial Number, Plate number, Model , Category" name="search">
                      </div>
                            <center><input type="submit" name="submit" class="btn btn-info" value="Submit" /></center>
                             @endsection       
@extends('layouts.master')
@section('content')

	@if (count($errors) > 0)
		<div class="message" style="color:#9F3A38;font-size: 1em;box-shadow: 0px 0px 0px 1px #E0B4B4 inset, 0px 0px 0px 0px transparent; background-color: #FFF6F6;">
			<ul class="list">
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
  	@endif

	 @if (Session::has('flash_message'))
    <div class="message">{{ Session::get('flash_message') }}</div>
    @endif
 <form role="form" method="POST" action="{{ url('/device') }}">
    {{ csrf_field() }}
<div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header">
                  <h3><i class="fa fa-desktop"></i> Add Television</h3>
                </div>
                <div class="panel-content">              
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Manufacturer</label>
                        <input type="text" class="form-control" placeholder="Manufacturer" name="name">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Model</label>
                        <input type="text"  class="form-control" placeholder="Model" name="model">
                      </div>
                      
                        <input type="hidden" value="null" name="imei">
                      
                      <div class="form-group">
                        <label class="form-label">Serial Number</label>
                        <input type="text" data-mask="wwww-wwww-wwww-wwww" class="form-control" placeholder="Enter product serial" name="serial_chasis">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Category</label>
                        <input type="text" class="form-control readonly" name="category" placeholder>
                      </div>
                      
                        <input type="hidden" value="null"  class="form-control" placeholder="Plate Number" name="plate_no">
                      
                      
                        <input type="hidden" value="null" class="form-control" placeholder="Transmission" name="transmission">
                      
                      <div class="form-group">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" placeholder="Status" name="status">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Purchased Date</label>
                        <input type="text"  data-mask="99/99/9999" class="form-control" placeholder="purchased date" name="purchase_date">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Cost of Purchase</label>
                        <input type="text" class="form-control" placeholder="Cost of purchase" name="cost">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Condition</label>
                        <input type="text" class="form-control" placeholder="Condition" name="condition">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="description" name="description">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Receipt Number</label>
                        <input type="text" class="form-control" placeholder="Receipt Number" name="receipt_no">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Phone Image</label>
                        <input type="file" class="" name="device_image">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Receipt Image</label>
                        <input type="file" class="" name="receipt_image">
                      </div>
                      <div class="form-group">
                        <label class="form-label">Device Mark</label>
                        <input type="file" class="" name="device_mark">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
             <center><input type="submit" name="submit" class="btn btn-info" value="Submit" /></center>
         
@endsection

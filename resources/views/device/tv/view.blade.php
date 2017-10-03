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
 
    {{ csrf_field() }}
<div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header">
                  <h3><i class="fa fa-laptop"></i> Add Laptop</h3>
                </div>
                <div class="panel-content">
                  
        </div>
      </div>
    </div>
  </div> 
@endsection

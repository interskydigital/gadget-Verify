@extends('layouts.master')
@section('content')
<div class="row">
            <div class="col-lg-12 portlets">
              <div class="panel">
                <div class="panel-header">
                  <h3><i class="icons-education-science-09"></i>MY DEVICES</h3>
                </div>
                <div class="panel-content pagination2 table-responsive">
                  <table class="table table-hover table-dynamic">
                    <a href="{{ ('/device/phone_tablet/register') }}" class="btn btn-primary btn-sm"><i class="fa fa-tablet"></i>Add Phone/Tablet</a>
                    <a href="{{ ('/device/laptop/register') }}" class="btn btn-primary btn-sm"><i class="fa fa-laptop"></i>Laptop</a>
                    <a href="{{ ('/device/vehicle/register') }}" class="btn btn-primary btn-sm"><i class="fa fa-car"></i>Vehicle</a>
                    <a href="{{ ('/device/tv/register') }}" class="btn btn-primary btn-sm"><i class="fa fa-desktop"></i>TV</a>
                    <thead>
                      <tr>
                        <th>S/N</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($device as $i  => $row )
            <tr>
               <td>{{ $i }}</td>
                <td>{{$row->condition}}</td>
                       <td>{{$row->category}}</td>
                        <td>{{$row->name}}</td>
                         <td>{{$row->model}}</td>
                         <td>
                    <a href="../../device/{{ $row->category }}/view/{{ $row->id }}" class="btn btn-success btn-sm"><i class="fa fa-search"></i>View</a>
                    <a href="../../device/{{ $row->category }}/update/{{ $row->id }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="../../device/{{ $row->category }}/create/" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i>Report</a>
                         </td>
                         </tr>
                         @endforeach
                    </tbody>
                  </table>
              
                </div>
              </div>
            </div>
          </div>
      
          
         @endsection       

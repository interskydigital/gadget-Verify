@extends('layouts.master')
@section('content')
<div class="container" id="lockscreen-block">
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="account-wall">
                        <form class="form-signin" role="form">
                            <center><h2><strong>Find Devices</strong>!</h2></center>
                            <div class="input-group"> 
                                <input type="password" class="form-control" name="password" id="password" placeholder="search plates numbers, IMEIs, Serial Number"> 
                                <span class="input-group-btn"> 
                                <button type="submit" class="btn btn-primary">Search</button>
                                </span> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<br><br><br><br><br><br>
            
                  <div class="panel-group panel-accordion" id="accordion">                        
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4>
                              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><i class="icons-education-science-09"></i>
                              My Devices
                              </a>
                            </h4>
                          </div>
                          <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>model</th>                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Iphone7s</td>
                        <td>Phones</td>
                        <td>Apple</td>                        
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Iphone6s</td>
                        <td>Phones</td>
                        <td>Apple</td>                        
                      </tr>
                      
                    </tbody>
                  </table>
                            </div>
                          </div>
                        </div>
                        <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4>
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><i class="icons-badges-votes-14"></i>
                              My Reports
                            </a>
                            </h4>
                          </div>
                          <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Report Category</th>
                        <th>Device</th>
                        <th>identifier</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>

                      
                    </tbody>
                  </table>
                            </div>
                          </div>
                        </div>
                      </div>                    
                
        @endsection
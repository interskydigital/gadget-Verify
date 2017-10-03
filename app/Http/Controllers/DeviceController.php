<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;
use App\User;
use Session;
use DB;
use Auth;
use Redirect;
//use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
         if(!Auth::check()){
            return Redirect::to('/login');
        }
        
        
        return view('device.index')
->with('device', Device::where('user_id', Auth::user()->id)->get()->all())
->with('userdetails', User::where('id', Auth::user()->id)->pluck('name'));

    
        
        
        // $device = Device::where('user_id', Auth::user()->id)->get()->all();
        // $collection = collect($device)->count();
        // $userdetails = User::where('id', Auth::user()->id)->pluck('name');
        // //$countdev =  $device->count();
        // return view('device.index', ['device' => $device])->with(['collection' => $collection])->with(['userdetails' => $userdetails]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   
    {
    $device = Device::where('user_id', Auth::user()->id)->get()->all();
    $collection = collect($device)->count();
     return view('device.phone.create', ['collection' => $collection]);
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Device();
            $member->name = $request->input('name');
            $member->description = $request->input('description');
            $member->model = $request->input('model');
            $member->serial_chasis = $request->input('serial_chasis');
            $member->purchase_date = $request->input('purchase_date');
            $member->cost = $request->input('cost');
            $member->condition = $request->input('condition');
            $member->device_image = $request->input('device_image');
            //$member->receipt_no = $request->photo->storeAs('images/device', 'filename.jpg');
            $member->category = $request->input('category');
           // $member->receipt_image = $request->file('receipt_image')->store('avatars');
            $member->receipt_no = $request->input('receipt_no');
            $member->receipt_image = $request->input('receipt_image');
            //$member->receipt_no = $request->photo->storeAs('images/receipts', 'filename.jpg');
            $member->device_mark = $request->input('device_mark');
            $member->imei = $request->input('imei');
            $member->plate_no = $request->input('plate_no');
            $member->transmission = $request->input('transmission');
            $member->condition = $request->input('condition');
            $member->status = $request->input('status');
            $member->user()->associate(Auth::user('user_id'));
            $member->save();
            Session::flash('flash_message', 'Successfuly Added');
            return back();
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        return view('device/phone.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        //
    }
    
    public function search(Device $search)
    {
        
        $users = DB::table('devices')
                    ->where('user_id', Auth::user()->id)
                    ->orWhere('name', 'like', '%$search%')
                    ->orWhere('model', 'like', '%$search%')
                    ->orWhere('serial_chasis', 'like', '%$search%')
                    ->orWhere('category', 'like', '%$search%')
                    ->orWhere('plate_no', 'like', '%$search%')
                    ->orWhere('imei', 'like', '%$search%')
                    ->orWhere('receipt_no', 'like', '%$search%')
                    ->paginate(10);
                    return view('device.search', ['users' => $users]);
    }
    
    public function searchstart()
   
    {
         return view('device.search');
    }
    
    public function phoneview($id)
    
    {
         $device = Device::where('id', $id)->get();
         return view('device.phone.view', ['device' => $device]);
        

    }
     public function phoneupdate($id)
    
    {
         $device = Device::where('id', $id)->get();
         return view('device.phone.update', ['device' => $device]);
        

    }
     public function tvview($id)
    
    {
         $device = Device::where('id', $id)->get();
         return view('device.tv.view', ['device' => $device]);
        

    }
     public function tvupdate($id)
    
    {
         $device = Device::where('id', $id)->get();
     return view('device.tv.update', ['device' => $device]);
    }
    
     public function tabletview($id)
    
    {
         $device = Device::where('id', $id)->get();
     return view('device.tablet.view', ['device' => $device]);
        
    }
    
     public function tabletupdate($id)
    
    {
         $device = Device::where('id', $id)->get();
        return view('device.tablet.view', ['device' => $device]);
    }
    
    public function vehicleview($id)
    {
         $device = Device::where('id', $id)->get();
        return view('device.car.view', ['device' => $device]);
    }
    
    public function vehicleupdate($id)
    {
         $device = Device::where('id', $id)->get();
        return view('device.car.update', ['device' => $device]);
    }
}

<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;
use App\User;
use Session;
use DB;
use Auth;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
->with('device', Device::where('user_id', Auth::user()->id)->get()->all())
->with('userdetails', User::where('id', Auth::user()->id)->pluck('name'));
    }
}

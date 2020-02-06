<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;


class ClockController extends Controller
{
    public function employee(Request $request){
        $users = DB::table('user_info')->select('name')->get();        
        return view('clock',compact('users'));
    }
    public function store(Request $request)
    {
      $request['time']=date("Y-m-d h:i:s a", time());
        DB::create($request->all());
                return view('clock');
    }
}
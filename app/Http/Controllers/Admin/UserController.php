<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Response;
use Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function activeDesigner(){
        $title = "Active Designer";
        $user = DB::table('users')->where('role','designer')->where('active',1)->get();
        // dd($user);
        return view('admin.users',compact('user','title'));
    }

    public function inActiveDesigner(){
        $title = "InActive Designer";
        $user = DB::table('users')->where('role','designer')->where('active',0)->get();

        // dd($user);

        return view('admin.users',compact('user','title'));
    }

    public function activeSeller(){
        $title = "Active Seller";

        $user = DB::table('users')->where('role','seller')->where('active',1)->get();

        return view('admin.users',compact('user','title'));
    }

    public function inActiveSeller(){
        $title = "Inactive Seller";
        $user = DB::table('users')->where('role','seller')->where('active',0)->get();

        return view('admin.users',compact('user','title'));
    }


    public function userDetails($id){

        $userDetails = DB::table('users')->where('id',$id)->first();
        // dd($userDetails);

        return response::json(array(
            'userDetails' => $userDetails,
           ));
    }


    public function updateUser(Request $request){
        $data = $request->except('_token');
        DB::table('users')->where('id',$request->id)->update($data);
        $notification=array(
            'massage'=>'User updated',
            'alert-type'=>'success'
      );
        return Redirect()->back()->with($notification);

    }





    
}

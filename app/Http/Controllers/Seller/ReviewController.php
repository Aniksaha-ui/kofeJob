<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(){
        $sellerId = Auth::id();
        $users = DB::table('project_proposals')->where('status','completed')->where('seller_id',$sellerId)->select('designer_id','designer_name')->distinct('designer_name')->get();


        $reviewedUser = DB::table('ratings')->join('users','ratings.userId','users.id')->select('users.name','ratings.*')->where('seller_id',$sellerId)->paginate(20);
        // dd($reviewedUser);
        // dd($users);
        return view('seller-review',compact('sellerId','users','reviewedUser')); 
    }

    public function store(Request $Request){
        $data =($Request->all());
        // dd($data);
        $result = DB::table('ratings')->insert($data);
        $notification=array(
        'massage'=>'Your biding successfully Done',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
    
    }
}

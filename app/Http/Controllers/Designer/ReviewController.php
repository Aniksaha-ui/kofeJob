<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $reviews = DB::table('ratings')->join('users','ratings.seller_id','users.id')->select('ratings.*','users.name')->where('userId',$userId)->get();
        return view('designer-review',compact('reviews'));

    }
}

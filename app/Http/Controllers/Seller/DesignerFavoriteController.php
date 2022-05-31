<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DesignerFavoriteController extends Controller
{
    public function addFavorite(Request $Request){
        $designerId = $Request->input('id');
        $sellerId = Auth::id();
        $data = array();
        $data['designerId'] = $designerId;
        $data['sellerId'] = $sellerId;
        // dd($data);
    
        //find designer name
        $designerName = DB::table('users')->where('id',$designerId)->pluck('name')->first();
        // dd($designerName);
        $data['designerName'] = $designerName;
        $project = DB::table('seller_favorite_lists')->insert($data);
        $notification=array(
              'massage'=>'Favorite List Updated',
              'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
        
    }

    public function showFavoriteList(){
        $sellerId = Auth::id();
        $favoriteSeller =  DB::table('seller_favorite_lists')->where('sellerId',$sellerId)->paginate(20);

        return view('Seller-Favorite-Designer',compact('favoriteSeller'));
    }

    public function deleteFavoriteDesigner(Request $Request){
        $designerId = $Request->input('id');
        DB::table('seller_favorite_lists')->where('designerId',$designerId)->delete();

        //    dd($a);
           $notification=array(
            'massage'=>'Deleted Successfully',
            'alert-type'=>'success'
     	 );
           return Redirect()->back()->with($notification);
    }

}

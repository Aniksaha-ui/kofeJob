<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class SellerPostingController2 extends Controller
{
    public function index(){
        $userId = Auth::id();

    $projectRequirement = DB::table('customer_requirements')
                        ->join('users','customer_requirements.seller_id','users.id')
                        ->where('users.id',$userId)
                        ->select('users.name','customer_requirements.*')
                        ->paginate(5);

    // dd($designersProject);
        return view('manage-projects',compact('projectRequirement'));
    }

    public function viewDetails(Request $Request){
        $postId  = $Request->input('id');
        // dd($id);
        $projectDetails = DB::table('customer_requirements')
                          ->join('users','customer_requirements.seller_id','users.id')
                          ->where('customer_requirements.id',$postId)
                          ->first(); 
                        //   dd($projectDetails);

                          $projectExpertise = $projectDetails->expertise;
                          $expertise = explode(',', $projectExpertise);

                        //   dd($expertise);

        // dd(expertise);
        return view('view-project-detail',compact('projectDetails','expertise','postId'));
    }


    public function viewDesigner(Request $Request){
        $postId = $Request->input('id');
        $designers = DB::table('project_proposals')
        ->join('users','project_proposals.designer_id','users.id')
         ->where('project_id',$postId)
         ->select('users.*')
         ->paginate(5);

        // dd($designers);
        return view('designer',compact('designers','postId'));
    
    }


    public function viewDesignerDetails(Request $Request){
        $id = $Request->input('id'); //Designer id
        $postId = $Request->input('postid'); //post ID
        $userId = Auth::id();
        
        // dd($id);

        $completedProject = DB::table('designer_projects')
                            ->where('userId',$id)
                            ->where('status','completed')
                            ->count();

        
        $ongoingProject = DB::table('designer_projects')
                            ->where('userId',$id)
                            ->where('status','ongoing')
                            ->count();

         $cancleProject = DB::table('designer_projects')
                            ->where('userId',$id)
                            ->where('status','cancelled')
                            ->count();

        $totalProject = DB::table('designer_projects')
                        ->where('userId',$id)
                        ->count();

                            
        $totalFeedBack =  DB::table('ratings')
                          ->where('userId',$id)
                          ->count();
                            // dd($completedProject);


        $projectDetails = DB::table('designer_projects')->where('userId',$id)->where('status','completed')->get();

        
        // dd($projectDetails);
    	// $projectLinks = $projectDetails->Links;
        // dd($projectDetails->Links);
    	// $Links = explode(',', $projectLinks);
  	  


        $userinfo = DB::table('users')->where('id',$id)->first();
        $Admininfo = DB::table('users')->where('id',$userId)->first();
    
        return view('designer-details',compact('completedProject','ongoingProject','cancleProject','totalProject','totalFeedBack','projectDetails','userinfo','postId','Admininfo'));
    }


}

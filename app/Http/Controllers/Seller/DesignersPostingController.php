<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;


class DesignersPostingController extends Controller
{
    public function index(){
    $designersProject = DB::table('designer_projects')
                        ->join('users','designer_projects.userId','users.id')
                        ->select('users.name','designer_projects.*')
                        ->paginate(5);

        
        return view('manage-projects',compact('designersProject'));
    }

    public function viewDetails(Request $Request){
        $id = $Request->input('id');
        $projectDetails = DB::table('designer_projects')
                          ->join('users','designer_projects.userId','users.id')
                          ->where('designer_projects.id',$id)
                          ->first(); 

    	$projectExpertise = $projectDetails->expertise;
    	$expertise = explode(',', $projectExpertise);
        return view('view-project-detail',compact('projectDetails','expertise'));
    }


    public function viewDesigner(){
        $designers = DB::table('users')
                     ->where('role','designer')
                     ->paginate(5);

        // dd($designers);
        return view('designer',compact('designers'));
    
    }


    public function viewDesignerDetails(Request $Request){
        $id = $Request->input('id'); //post id
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

        $projectDetails = DB::table('designer_projects')->where('userId',$id)->get();

      
        
        // dd($projectDetails);
    	// $projectLinks = $projectDetails->Links;
        // dd($projectDetails->Links);
    	// $Links = explode(',', $projectLinks);
  	  


        $userinfo = DB::table('users')->where('id',$userId)->first();
    
        return view('designer-details',compact('completedProject','ongoingProject','cancleProject','totalProject','totalFeedBack','projectDetails','userinfo'));
    }
}

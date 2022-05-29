<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use DB;

class PostController extends Controller
{
    public function index(){
        $id = Auth::id();
        $allProject = DB::table('designer_projects')
        ->join('users','designer_projects.userId','users.id')
        ->where('users.role','designer')
        ->where('users.id',$id)
        ->select('*')
        ->paginate(5);
        // dd($allProject);

        return view('designer-project-proposals',compact('allProject'));
 
    }

    public function acceptedProject(){
        
    }

    public function ongoingProject(){
        $id = Auth::id();
        $onGoingProjects = DB::table('designer_projects')
        ->join('users','designer_projects.userId','users.id')
        ->where('users.role','designer')
        ->where('users.id',$id)
        ->where('status','ongoing')
        ->select('*')
        ->paginate(20);

        // dd($onGoingProjects);

     

        // dd($onGoingProjects);
        return view('designer-ongoing-projects',compact('onGoingProjects'));


    }

    public function cancelledProject(){
        $id = Auth::id();
        $canclledProjects = DB::table('designer_projects')
        ->join('users','designer_projects.userId','users.id')
        ->where('users.role','designer')
        ->where('users.id',$id)
        ->where('status','cancelled')
        ->select('*')
        ->paginate(20);
        return view('designer-cancelled-projects',compact('canclledProjects'));
    }


    public function completedProject(){
        $id = Auth::id();
        $completedProjects = DB::table('designer_projects')
        ->join('users','designer_projects.userId','users.id')
        ->where('users.role','designer')
        ->where('users.id',$id)
        ->where('status','completed')
        ->select('*')
        ->paginate(20);
        return view('designer-completed-projects',compact('completedProjects'));
    }


    public function projectDetails(Request $Request){
    
    $projectId = $Request->input('id'); 

    $projectDetails = DB::table('designer_projects')
                      ->join('users','designer_projects.seller_id','users.id')->where('projectId',$projectId)->first();

    // dd($projectDetails);

    $projectExpertise = $projectDetails->expertise;
    $expertise = explode(',', $projectExpertise);
    
    return view('project-details-view',compact('projectDetails','expertise'));


    }

    public function create(){
        $id = Auth::id();
        $role= DB::table('users')->where('id', $id)->select('role')->pluck('role')->first();

        return view('post-project',compact('role'));
    }

    
    public function store(Request $request){
        $data = array();
        $id = Auth::id();
        // dd($id);
        $role= DB::table('users')->where('id', $id)->select('role')->pluck('role')->first();

        $fileName = time().'.'.$request->file->getClientOriginalExtension();  
   
        $request->file->move(public_path('uploads'), $fileName);
        $data['projectName'] = $request->projectName;
        $data['category_id'] = $request->category_id;
        $data['priceType'] = $request->priceType;
        $data['fixedPrice'] = $request->fixedPrice;
        $data['hourlyPrice']  = $request->hourlyPrice;
        $data['bidingPrice']  = $request->bidingPrice;
        $data['expertise'] = $request->expertise;
        $data['projectPeriod'] = $request->projectPeriod;
        $data['startingDate'] = $request->startingDate;
        $data['docs'] = 'uploads/'.$fileName;
        $data['Links'] = $request->Links;
        $data['description'] = $request->description;

        // dd($data);
        if($role=='designer'){
            $data['userId'] = $id;
            $project = DB::table('designer_projects')->insert($data);
            $notification=array(
                  'massage'=>'Your Post Added successfully',
                  'alert-type'=>'success'
            );
                 return Redirect()->back()->with($notification);
        } else if($role=='seller'){
            $data['seller_id'] = $id;
            $project = DB::table('customer_requirements')->insert($data);
            $notification=array(
                  'massage'=>'Your Post Added successfully',
                  'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }

    }

}

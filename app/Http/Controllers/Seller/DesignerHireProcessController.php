<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class DesignerHireProcessController extends Controller
{
    public function store(Request $Request){
        // dd($Request->all());
        $cancleStatus = array();
        $cancleStatus['status'] = "cancelled";

        $hiredStatus=array();
        $hiredStatus['status']= "hired";

        $data = array();
        $data['designerId'] = $Request->designerId;
        $data['projectId'] = $Request->projectId;
        $data['sellerId'] = $Request->sellerId;
        $data['status'] = "hired";

        //insert into hired table
        $hiredResult = DB::table('hired_designer')->insert($data);


        //update project status of customer_requirement table
        $updateRequireProject = DB::table('customer_requirements')->where('id',$Request->projectId)->update($hiredStatus); 
        
        
        //update project_proposals table
        $updateDesignerBiddingStatus = DB::table('project_proposals')->where('project_id',$Request->projectId)->update($cancleStatus);
         
        
        //update project proposal table hired people
         $updateDesignerBiddingStatus = DB::table('project_proposals')->where('project_id',$Request->projectId)->where('designer_id',$Request->designerId)->update($hiredStatus);

        //update Designer_projects table
        $updateDesignerProjects = DB::table('designer_projects')->where('projectId',$Request->projectId)->update($cancleStatus);
       
       
        $updateDesignerProjects = DB::table('designer_projects')->where('projectId',$Request->projectId)->where('userId',$Request->designerId)->update($hiredStatus);

       
        $notification=array(
            'massage'=>'You hired!!!!',
            'alert-type'=>'success'
      );
      return Redirect()->back()->with($notification);

        
    }
}

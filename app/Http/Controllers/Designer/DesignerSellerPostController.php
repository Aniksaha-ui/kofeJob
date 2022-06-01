<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DesignerSellerPostController extends Controller
{
    public function index(){
        $sellerPosts = DB::table('customer_requirements')
                       ->join('users','customer_requirements.seller_id','users.id') 
                       ->select('users.name','users.stack','users.role','customer_requirements.*')  
                       ->get();

                    //    dd($sellerPosts);
                    //    ->paginate(5);  

       return view('designer-milestones',compact('sellerPosts'));                
    }

    public function viewProject(Request $Request){
        $project_id = $Request->input('id');
        $user_id = Auth::id();
        $projectDetails = DB::table('customer_requirements')
                          ->join('users','customer_requirements.seller_id','users.id')
                          ->where('customer_requirements.id',$project_id)
                          ->select('customer_requirements.*','users.name')  
                          ->first(); 
                        //   dd($projectDetails);

                          $projectExpertise = $projectDetails->expertise;
                          $expertise = explode(',', $projectExpertise);

                        //   dd($expertise);

                      $exist = DB::table('project_proposals')->where('project_id',$project_id)->where('designer_id',Auth::id())->first();
                      if($exist){
                        $status = 1;
                      }else{
                        $status=0;
                      }

        // dd(expertise);
        return view('tasks',compact('projectDetails','expertise','project_id','status'));
    }


    public function store(Request $Request){
      $project_id = $Request->id;
      $projectDetails = DB::table('customer_requirements')->where('id',$project_id)->first();
      $seller_id =  $projectDetails->seller_id; 
      
      $seller_name= DB::table('users')->where('id',$seller_id)->select('name')->pluck('name')->first();
      $userName = DB::table('users')->where('id',Auth::id())->select('name')->pluck('name')->first();
      // dd($seller_name);
      $data = array();

      $data['projectName'] = $projectDetails->projectName;
      $data['designer_id'] = Auth::id();
      $data['project_id'] =$projectDetails->id;
      $data['seller_id'] = $projectDetails->seller_id;
      $data['priceType'] = $projectDetails->priceType;
      $data['coverLetter'] = $Request->cover_letter;
      $data['designer_name'] = $userName;
      
      
      $proposal = array();
      $proposal['projectName'] = $projectDetails->projectName;
      $proposal['projectId'] =$projectDetails->id;
      $proposal['userId'] = Auth::id();
      $proposal['seller_id'] = $projectDetails->seller_id;
      $proposal['seller_name']=$seller_name;
      $proposal['priceType'] = $projectDetails->priceType;
      $proposal['category_id'] = $projectDetails->category_id;
      $proposal['fixedPrice'] = $projectDetails->fixedPrice;
      $proposal['hourlyPrice']  = $projectDetails->hourlyPrice;
      $proposal['bidingPrice']  = $projectDetails->bidingPrice;
      $proposal['expertise'] = $projectDetails->expertise;
      $proposal['projectPeriod'] = $projectDetails->projectPeriod;
      $proposal['startingDate'] = $projectDetails->startingDate;
      $proposal['docs'] = $projectDetails->docs;
      $proposal['Links'] = $projectDetails->Links;
      $proposal['description'] = $projectDetails->description;
      $proposal['status'] = $projectDetails->status;

      

      if($projectDetails->priceType=='fixed'){
      $data['biddingPrice'] = $projectDetails->fixedPrice;

      } else if($projectDetails->priceType=='hourly'){
        $data['biddingPrice'] = $projectDetails->hourlyPrice;

      }else{
        $data['biddingPrice'] = $Request->price;
      }
      // dd($data,$proposal);

      $result = DB::table('project_proposals')->insert($data);
      $designerTable = DB::table('designer_projects')->insert($proposal);
      $notification=array(
            'massage'=>'Your biding successfully Done',
            'alert-type'=>'success'
      );

      return Redirect()->back()->with($notification);
 }

    

}

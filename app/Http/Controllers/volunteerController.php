<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\volen;
use App\User;
use App\Donor;
use App\Contact;

class volunteerController extends Controller
{
    public function store1(){
    $user = User::all();
   return view('/project/volunteer')->with('user', $user); 

   
   }
    public function apply(Request $request){
 
  
  $this->validate($request,[
 'vname'=>'required',
 'vemail'=>'required',
 'branch'=>'required',
 'cv'=>'nullable|image',
 'message'=>'required'
     ]);
     $input=new volen;
     $input->vname=$request->vname; 
      $input->vemail=$request->vemail; 
       $input->branch=$request->branch; 
       $input->message=$request->message; 
             
       
    $input->cv= $request->cv->store('public/images');
       
       $input->save();
  return redirect('/volunteer');
    }

    public function volunteerinfoshow(){

        
  $input =volen::all();
  $count=Contact::where('status',0)->count();
  $count1=Donor::where('status',0)->count();
  $count2=volen::where('status',0)->count();
 return view('/admin/volunteerlist')->with('input', $input)->with('count',$count)->with('count1',$count1)->with('count2',$count2); 

}
public function showInbox2(){

      
      $count=Contact::where('status',0)->count();
      $count1=Donor::where('status',0)->count();
      $input=volen::where('status',0)->get();
      $count2=volen::where('status',0)->count();
      return view('/admin/volunteerInbox')->with('input',$input)->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }
    public function seenbox2($id){
       $count1=Donor::where('status',0)->count();
      $input=volen::find($id);
      volen::where('id',$id)->update(['status'=>1]);
        $count=Contact::where('status',0)->count();
        $count2=volen::where('status',0)->count();
        return view('/admin/volunteerSeenbox')->with('input',$input)->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }

}

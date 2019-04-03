<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;
use App\User;
use App\Contact;
use App\volen;


class donorController extends Controller
{
	

 public function store(){
    $user = User::all();
   return view('/project/donate-now')->with('user', $user); 

   
   }
    public function donateFood(Request $request){
 
  
  $this->validate($request,[
 'dname'=>'required',
 'demail'=>'required',
 'dammount'=>'required',
 'cname'=>'required',
 'dmessage'=>'required'
     ]);
     $input=new Donor;
     $input->dname=$request->dname; 
     $input->demail=$request->demail; 
      $input->dammount=$request->dammount; 
       $input->dlocation=$request->dlocation; 
       $input->cname=$request->cname; 
        $input->dmessage=$request->dmessage; 
       $input->save();
  return redirect('/donatenow');
    }
      public function donorinfoshow(){

        
  $input =Donor::all();
$count=Contact::where('status',0)->count();
$count1=Donor::where('status',0)->count();
$count2=volen::where('status',0)->count();
        
        return view('/admin/donorlist')->with('count1',$count1)->with('input', $input)->with('count',$count)->with('count2',$count2); 

}

public function showInbox1(){

      
      $count=Contact::where('status',0)->count();
      $input=Donor::where('status',0)->get();
      $count1=Donor::where('status',0)->count();
      $count2=volen::where('status',0)->count();
      return view('/admin/donorInbox')->with('input',$input)->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }
    public function seenbox1($id){
       $count1=Donor::where('status',0)->count();
      $input=Donor::find($id);
      Donor::where('id',$id)->update(['status'=>1]);
        $count=Contact::where('status',0)->count();
        $count2=volen::where('status',0)->count();
        return view('/admin/donorSeenbox')->with('input',$input)->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }

}

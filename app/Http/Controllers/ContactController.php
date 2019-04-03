<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Contact;
use App\Donor;
use App\volen;

class ContactController extends Controller
{
    public function store2(){
    $user = User::all();
   return view('/project/contact')->with('user', $user); 

   
   }
    public function contactus(Request $request){
 
  
  $this->validate($request,[
 'name'=>'required',
 'email'=>'required',
 'massage'=>'required'
     ]);
     $input=new Contact;
     $input->name=$request->name; 
      $input->email=$request->email; 
       $input->massage=$request->massage; 
       
       $input->save();
  return redirect('/contact');
    }
    public function showInbox(){
      $count1=Donor::where('status',0)->count();
         $count2=volen::where('status',0)->count();

      $input=Contact::where('status',0)->get();
      $count=Contact::where('status',0)->count();

     // $count=Donor::where('status',0)->count();
      return view('/admin/inbox')->with('input',$input)->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }
    public function seenbox($id){
      $count1=Donor::where('status',0)->count();
         $count2=volen::where('status',0)->count();
      $input=Contact::find($id);
      Contact::where('id',$id)->update(['status'=>1]);
        $count=Contact::where('status',0)->count();
        
        return view('/admin/seenbox')->with('input',$input)->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }
}

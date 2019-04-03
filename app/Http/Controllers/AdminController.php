<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Donor;
use App\volen;

class AdminController extends Controller
{
    public function index(){
        $count=Contact::where('status',0)->count();
        $count1=Donor::where('status',0)->count();
         $count2=volen::where('status',0)->count();
        
        return view('/admin/index')->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }
    public function logout(){
         $count2=volen::where('status',0)->count();
     $count=Contact::where('status',0)->count();
      $count1=Donor::where('status',0)->count();
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Successfully')->with('count',$count)->with('count1',$count1)->with('count2',$count2); 
    }

     public function donorlist(){
         $count2=volen::where('status',0)->count();
         $count1=Donor::where('status',0)->count();
        $count=Contact::where('status',0)->count();
        
        return view('/admin/donorlist')->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }
    public function volunteerlist(){
         $count2=volen::where('status',0)->count();
         $count1=Donor::where('status',0)->count();
        $count=Contact::where('status',0)->count();
        
        return view('/admin/volunteerlist')->with('count',$count)->with('count1',$count1)->with('count2',$count2);
    }


    
     

}

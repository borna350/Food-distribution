<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public function index(){
        
        return view('/project/index');
    }
     public function about(){
        
        return view('/project/about');
    }
    public function contact(){
        
        return view('/project/contact');
    }
    public function donatenow(){
        
        return view('/project/donate-now');
    }
    public function volunteer(){
        
        return view('/project/volunteer');
    }
    
}

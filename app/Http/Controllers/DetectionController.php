<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetectionController extends Controller
{
   public function index()
   {
       $data  = [

        "title"=>"Detection|Dashboard",
       ];
       return view('DetectionPanel.dashboard');


   }
   public function comingsoon()
   {
       $data  = [

        "title"=>"Detection|Coming Soon",
       ];
       return view('DetectionPanel.comingsoon');


   }
   public function login()
   {
       $data  = [

        "title"=>"Detection|Login",
       ];
       return view('DetectionPanel.login');


   }
}

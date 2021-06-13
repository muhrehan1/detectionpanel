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
       return view('adminpanel');


   }

}

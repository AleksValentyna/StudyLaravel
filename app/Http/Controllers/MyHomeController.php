<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHomeController extends Controller

{
   public function index(){
      // print_r('hello');
   return view ('myhome');
   }

   

   public function info(){
      $data = ['name'=>"User", 'age'=>12];
      return view ('info', ['info'=>$data ]);

      // return view ('info');
   }
   
}

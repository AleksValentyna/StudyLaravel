<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class ContactController extends Controller
{
   public function index(){
      // print_r('hello');
   return view ('contact');
   }


   public function submit(Request $request){
      // dd($request);
      Staff::create($request->all());
      return redirect()->back();
      }

   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller


{
   public function index(){
      print_r('hello');
      return view ('page');
      
}

// public function submit(Request $request){
//    // dd($request);
//    Post::create($request->all());
//    return redirect()->back();
//    }


}
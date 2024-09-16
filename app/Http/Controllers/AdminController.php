<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
      public function index(){
        $unpublished = DB::table('unpublished')->get();
        
        return view('admin', ['unpublished' => $unpublished]);
    }

     public function writeData($id, Request $request){
        $result =  DB::table('published')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'rating'=> $request->rating,
        ]);
         
        return redirect()->action([OutController::class, 'index']);
     }
}

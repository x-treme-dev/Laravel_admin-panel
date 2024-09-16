<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    private $deleted;
    //
      public function index(){
        $unpublished = DB::table('unpublished')->get();
        
        return view('admin', ['unpublished' => $unpublished]);
    }

     public function writeData($id, Request $request){
      // обработать нажатие кнопок delete и publish в форме
      if($request->input('action') === 'delete'){
        $this->deleted = DB::delete('delete from unpublished where id = :id', ['id' => $id]);
        return redirect()->route('admin.index', ['id' => $id])->with('deleted', 'Comment №'. $id . ' is deleted');
      } 
      else if($request->input('action') === 'publish'){
        $result =  DB::table('published')->insert([
          'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'message' => $request->message,
          'rating'=> $request->rating,
      ]);
      return redirect()->route('out')->with('success', 'Comment is published!');
      }
        
       
        
     }
}

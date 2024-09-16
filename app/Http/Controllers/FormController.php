<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
     //
     public function index(){
        return view('form');
    }

    public function getData(Request $request){
    // получить данные из формы и записать в таблицу
    // при успешной записи в таблицу фасад вернет true
     $result =  DB::table('unpublished')->insert([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message,
                'rating'=> $request->rating,
    ]);
    
    return view('form',  compact('result'));
      
    }
}

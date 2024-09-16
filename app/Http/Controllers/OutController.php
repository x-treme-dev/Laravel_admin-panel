<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutController extends Controller
{
    //
    public function index(){
        $published = DB::table('published')->get();
        
        return view('out')->with('published', $published);
    }
}

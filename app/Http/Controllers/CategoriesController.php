<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoriesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       $arr['categories'] = category::all(); 
       return view('backend.categories.index')->with($arr);
    }
}

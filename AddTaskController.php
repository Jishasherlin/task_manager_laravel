<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddTaskController extends Controller
{
     public function index(){
         return view('addtask');
    }
}

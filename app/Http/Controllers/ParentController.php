<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParentController extends Controller
{
     public function __constructor(){


          $this->middleware(['auth:sanctum'.'verified']);


      }
}

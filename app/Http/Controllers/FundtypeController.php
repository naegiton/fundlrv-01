<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Fundtype;
class FundtypeController extends Controller
{
    //
    public function index(){

      $fundtype=Fundtype::all();

      return view('index_fund',compact('fundtype'));
    }
}

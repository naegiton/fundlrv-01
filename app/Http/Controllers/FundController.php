<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
//use DB;

class FundController extends Controller
{
    //
    public function Index() {
      // $data = DB::table('fundtypes')->get();
      //$data=FundType::all();
    //  dd($data);
    $data=['aaaa','bbb','ccc'];
      return View('index_fund')->with(['data'=>$data]);

    }
}

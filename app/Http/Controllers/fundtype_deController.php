<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\fundtype_deRequest;
use App\fundtype_de;

class fundtype_deController extends Controller
{
            public function index(){

                $data=fundtype_de::all();
                $no=0;

               return view('admin.fundtype_de.index_fund',compact('data','no'));
            }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){

                $data=fundtype_de::find($id);
                return view('admin.fundtype_de.show',compact('data'));

     }

     public  function create(){

        return  view('admin.fundtype_de.create',['url' => 'fundtype_de','id' => 0,'data' => false]);
     }


    public function store(fundtype_deRequest $request){

        print_r( $request->all() );
        /*
        F_fundtype_d_l::insert($input);
        return redirect('fundtype_d');
        */
        $item = new fundtype_de;
        $item->fundnamel = $request->input('fundname');
        $item->fundname2l = $request->input('fundname2');
        $item->save();
        return redirect('fundtype');
    }

    public function edit($id){
      $item = fundtype_de::where('fundid', $id)->first();
      if( !$item ) return false;
      return  view('admin.fundtype_d.create',['url' => 'fundtype_d/'. $id ,'id' => $id , 'data' => $item ]);

    }

    public function update( Request $request, $id){
      echo '<pre>'
      , print_r( $request->all()),'</pre>';
      $item =  fundtype_de::where('fundidL', $id)->first();
      $item->fundnamel = $request->input('fundname');
      $item->fundname2l = $request->input('fundname2');
      $item->save();
      return redirect('fundtype_d');
    }

    public function delete($id){
      fundtype_d::where('fundid',$id)->delete();
      return redirect()->back();
    }

}

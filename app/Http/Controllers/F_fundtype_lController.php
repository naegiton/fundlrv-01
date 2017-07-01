<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\F_fundtype_lRequest;
use App\F_fundtype_l;

class F_fundtype_lController extends Controller
{
            public function index(){

                $data=F_fundtype_l::all();
                $no=0;

               return view('admin.fundtype.index_fund',compact('data','no'));
            }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){

                $data=F_fundtype_l::find($id);
                return view('admin.fundtype.show',compact('data'));

     }

     public  function create(){

        return  view('admin.fundtype.create',['url' => 'fundtype','id' => 0]);
     }


    public function store(F_fundtype_lRequest $request){

        print_r( $request->all() );
        /*
        F_fundtype_l::insert($input);
        return redirect('fundtype');
        */
        $item = new F_fundtype_l;
        $item->fundnamel = $request->input('fundname');
        $item->fundname2l = $request->input('fundname2l');
        $item->save();
        return redirect('fundtype');
    }

    public function edit($id){
      $item = F_fundtype_l::where('fundidL', $id)->first();
      if( !$item ) return false;
      return  view('admin.fundtype.create',['url' => 'fundtype/'. $id ,'id' => $id , 'data' => $item ]);

    }

    public function update( Request $request, $id){
      echo '<pre>'
      , print_r( $request->all()),'</pre>';
      $item =  F_fundtype_l::where('fundidL', $id)->first();
      $item->fundnamel = $request->input('fundname');
      $item->fundname2l = $request->input('fundname2l');
      $item->save();
      return redirect('fundtype');
    }

    public function delete($id){
      F_fundtype_l::where('fundidL',$id)->delete();
      return redirect()->back();
    }

}

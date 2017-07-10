<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\images;

class UploadController extends Controller
{
        public function getIndex(){
              $images = images::get();
        return view('admin.upload.index',['images' => $images]);
    }

    public function postAction(Request $request){
        if($request->exists('btn-upload')){
            $file = $request->file('uploader');
            $path = 'images/uploads';
            $filename = $file->getClientOriginalName();
            $file->move('images/uploads',$file->getClientOriginalName());
            $image = new Images;
            $image->image_name = $filename;
            $image->save();
            echo 'Uploaded';

        }
        return redirect()->back();
    }

}

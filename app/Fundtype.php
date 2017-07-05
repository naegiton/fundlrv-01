<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fundtype extends Model
{

    protected $table = 'fundtype';
    protected $primaryKey = 'fundid';

    public static function namefund($fundid){
				$data=fundtype::where('fundid',$fundid)->first();
				return $data ? $data->fundname :'no' ;
			}
}

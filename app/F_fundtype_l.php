<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F_fundtype_l extends Model
{

    protected $table = 'f_fundtype';
    protected $primaryKey = 'fundid';

    public static function namefund($fundid){
				$data=F_fundtype_l::where('fundid',$fundid)->first();
				return $data ? $data->fundname :'no' ;
			}
}

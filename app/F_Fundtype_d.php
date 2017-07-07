<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F_Fundtype_d extends Model
{
    //
		protected $table = 'f_fundtype_de';
    protected $primaryKey = 'fundidd';

		public static function tdata($fundid,$idoffice){
				$data=F_Fundtype_d::where('fundid',$fundid)->where('idoffice', $idoffice)->first();
				return $data ? 'yes':'no' ;
			}
}

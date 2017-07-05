<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fundtype_de extends Model
{
    //
		protected $table = 'fundtype_de';
    protected $primaryKey = 'fundidd';

		public static function tdata($fundid,$idoffice){
				$data=fundtype_de::where('fundid',$fundid)->where('idoffice', $idoffice)->first();
				return $data ? 'yes':'no' ;
			}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{

	use SoftDeletes;
   		public static $rules = [
        	'name'=>'required',
        	//'description'=>'',
        	'start' => 'date'
        ];

      	public static $messages = [
        	'name.required'=>'Ingresar nombre del proyecto',
        	'start.date'=>'Ingresar fecha con formato'
        ];

        protected $fillable = [
        'name', 'description', 'start',
    	];

        //relationships
        public function users()
        {
            return $this->belongsToMany('App\User');
        }

        //accesors

        public function categories()
        {
            return $this->hasMany('App\Category');
        }

        public function levels()
        {
            return $this->hasMany('App\Level');
        }

        //accesors

        public function getFirstLevelIdAttribute()
        {
            return $this->levels->first()->id;
        }
}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $table ='courses';
	protected $primaryKey = 'id_course';
	protected $fillable =  array('active', 'date_end', 'date_start', 'description', 'id_course', 'name');
	protected $hidden = ['created_at','updated_at'];



	public function __toString()
    {
        if ($this == NULL) {
            return "";
        } else {
	    	return $this->name;
        }
    }
}

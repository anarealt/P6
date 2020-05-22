<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomStudent extends Model
{
	protected $table ='classroom_student';
	protected $primaryKey = 'id_classroom_studen';
	protected $fillable =  array('id_classroom_studen', 'id_classroom', 'id_user');
	protected $hidden = ['created_at','updated_at'];
}

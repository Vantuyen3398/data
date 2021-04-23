<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
	public $timestamps = false;
	public $fillable = [
		'name','email', 'password'
	];
	public $primaryKey = 'id';
	public $table = 'admin';
}

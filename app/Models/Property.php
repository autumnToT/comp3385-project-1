<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
	use HasFactory;
	
	protected $fillable = [
		'title',
		'number_of_bedrooms',
		'number_of_bathrooms',
		'location',
		'price',
		'type',
		'description',
		'photo',
	];
}

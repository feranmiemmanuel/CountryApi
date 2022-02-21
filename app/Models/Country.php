<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory ;
    public $timestamps = false;
     protected $table = '_z_country';
     protected $fillable= [
     	'iso',
     	'name',
     	'd name',
     	'iso3',
     	'position',
     	'numcode',
     	'phonecode',
     	'created',
     	'register_by',
     	'modified',
     	'modified_by',
     ];
}

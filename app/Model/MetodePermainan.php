<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MetodePermainan extends Model
{
   protected $table = 'metode_permainan'; // nama table

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_metode_permainan',
		'nama_metode_permainan',
	];
}

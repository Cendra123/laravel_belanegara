<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tema_soal extends Model
{
    protected $table = 'tema_soal'; //nama table

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_tema_soal',
		'nama_tema_soal',
	];
}

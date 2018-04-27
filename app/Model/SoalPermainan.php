<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SoalPermainan extends Model
{
    protected $table = 'soal_permainan'; //nama table

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_soal',
		'soal',
		'jawaban',
		'tema_soal',
		'kategori_soal',
		'kelompok_soal',
		'status_soal',
	];
}

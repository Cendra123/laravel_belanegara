<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KelompokSoal extends Model
{
    //
    protected $table = 'kelompok_soal'; // nama tabel

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_kelompok_soal',
		'nama_kelompok_soal',
	];
}

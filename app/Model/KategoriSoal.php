<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KategoriSoal extends Model
{
    //
    protected $table = 'kategori_soal'; // nama tabel

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_kategori_soal',
		'nama_kategori_soal',
	];
}

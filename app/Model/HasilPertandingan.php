<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HasilPertandingan extends Model
{
    //
    protected $table = 'hasil_pertandingan'; // nama tabel

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_hasil_pertandingan',
		'kode_pertandingan_fk',
		'nama_pemenang',
		'peringkat',
	];
}

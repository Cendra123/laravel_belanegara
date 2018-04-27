<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    protected $table = 'pertandingan'; // nama table

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_pertandingan',
		'kode_pertandingan',
		'tanggal_pertandingan',
		'tempat_pertandingan',
		'juri',
		'jumlah_pemain',
		'metode_pertandingan',
		'durasi_pertandingan',
	];
}

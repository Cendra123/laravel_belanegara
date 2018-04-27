<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PengarangLagu extends Model
{
    protected $table = 'pengarang_lagu'; // nama table

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_pengarang_lagu',
		'nama_pengarang_lagu',
		'url_foto',
		'riwayat_singkat',
	];
}

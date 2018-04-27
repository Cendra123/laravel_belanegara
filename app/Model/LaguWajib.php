<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LaguWajib extends Model
{

    protected $table = 'lagu_wajib'; // nama tabel

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_lagu_wajib',
		'judul_lagu_wajib',
		'pengarang_lagu',
		'nada_dasar',
		'ketukan',
		'lirik',
		'url_lagu',
	];

}

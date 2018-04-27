<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KategoriArtikel extends Model
{
    //
    protected $table = 'kategori_artikel'; // nama tabel

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_kategori_artikel',
		'nama_kategori_artikel',
	];
}

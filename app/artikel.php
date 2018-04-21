<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
	
	protected $table = 'artikel'; // nama tabel
	public $timestamps = false;


	protected $fillable = [ // nama kolom yang tersedia
		'id_artikel',
		'judul_artikel',
		'viewer',
		'waktu',
		'kategori_artikel',
		'konten_artikel',
		'is_artikel_approved',
	];
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
	
	protected $table = 'artikel'; // nama tabel
	public $timestamps = false;


	protected $fillable = [ // nama kolom yang tersedia
		'id_artikel',
		'judul_artikel',
		'viewer',
		'author',
		'waktu',
		'kategori_artikel',
		'konten_artikel',
		'is_article_approved',
	];
}

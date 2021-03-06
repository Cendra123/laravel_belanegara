<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $table = 'berita'; // nama tabel

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id',
		'judul',
		'penulis',
		'featured_image',
		'konten',
		'headline',
		'waktu',
		'status',
		'viewer',
	];
}

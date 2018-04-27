<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KritikSaran extends Model
{
    //
    protected $table = 'kritik_saran'; // nama tabel

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_kritik_saran',
		'nama',
		'email',
		'waktu',
		'isi',
	];
}

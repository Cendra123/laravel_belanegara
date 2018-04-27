<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StatusSoalPermainan extends Model
{
    protected $table = 'status_soal_permainan'; //nama table

    public $timestamps = false;

	protected $fillable = [ // nama kolom yang tersedia
		'id_status_soal',
		'keterangan',
	];
}

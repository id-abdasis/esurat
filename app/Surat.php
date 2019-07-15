<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surat extends Model
{

    protected $table = 'surat';
    protected  $fillable = ['tanggal_diterima', 'nomor_surat', 'tanggal_surat', 'pengirim_surat', 'perihal', 'nama_penerima', 'disposisi'];
    use SoftDeletes;
}

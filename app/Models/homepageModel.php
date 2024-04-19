<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homepageModel extends Model
{
    use HasFactory;

    protected $table = 'tbhome';
    protected $fillable = ['id', 'imageurl', 'header', 'text', 'no', 'nama_keberangkatan', 'nama_daerah', 'jam_keberangkatan', 'kuota', 'stasiun'];
};

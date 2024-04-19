<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\armadaModel;

class helperModel extends Model
{
    use HasFactory;
    protected $table = 'tbhelper';
    protected $primaryKey = 'id_helper';
    protected $fillable = ['nama_helper', 'email', 'foto_profile', 'tgl_lahir', 'nik'];
}

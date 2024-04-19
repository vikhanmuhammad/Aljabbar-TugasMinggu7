<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\armadaModel;

class driverModel extends Model
{
    use HasFactory;
    protected $table = 'tbdriver';
    protected $primaryKey = 'id_driver';
    protected $fillable = ['nama_driver', 'email', 'foto_profile', 'tgl_lahir', 'nik', 'nomor_sim'];
}

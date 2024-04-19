<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bergabungModel extends Model
{
    use HasFactory;
    protected $table = 'tbadmin';
    protected $fillable = ['nama_lengkap', 'email', 'password', 'nama_pt', 'nama_po', 'foto_profil', 'jabatan_pekerjaan', 'telepon',
    'jumlah_kendaraan', 'jenis_bus', 'provinsi', 'alamat'];
}

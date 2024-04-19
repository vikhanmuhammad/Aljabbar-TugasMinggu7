<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;


class loginModel extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;

    protected $table = 'tbadmin';
    protected $fillable = ['nama_lengkap', 'email', 'password', 'nama_perusahaan', 'jabatan_pekerjaan', 'telepon',
'jumlah_kendaraan', 'jenis_bus', 'provinsi', 'alamat'];
}

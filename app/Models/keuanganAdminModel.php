<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keuanganAdminModel extends Model
{
    use HasFactory;
    protected $table = 'tbkeuangan';
    protected $primaryKey = 'id_keuangan';
    protected $fillable = ['jenis', 'jumlah', 'foto_bukti', 'jam', 'tanggal', 'id_armada'];
}

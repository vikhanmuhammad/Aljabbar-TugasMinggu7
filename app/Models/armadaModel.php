<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\helperModel;
use App\Models\driverModel;
use App\Models\keuanganAdminModel;

class armadaModel extends Model
{
    use HasFactory;
    protected $table = 'tbarmada';
    protected $primaryKey = 'id_armada';
    protected $fillable = ['plat_depan', 'nomor_plat', 'plat_belakang', 'tgl_kir', 'julukan', 'kelas', 'foto_armada', 'jarak_tempuh', 'kapasitas_kursi', 'nomor_body', 'status', 'tempat_awal', 'tempat_akhir', 'jam_keberangkatan', 'tanggal_keberangkatan','id_driver', 'id_helper'];

    // Relasi ke tbhelper
    public function helper()
    {
        return $this->belongsTo(helperModel::class, 'id_helper', 'id_helper');
    }

    // Relasi ke tbdriver
    public function driver()
    {
        return $this->belongsTo(driverModel::class, 'id_driver', 'id_driver');
    }

    public function keuangan()
    {
        return $this->hasMany(keuanganAdminModel::class, 'id_armada');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ArmadaModel; 
use App\Models\DriverModel; 
use App\Models\HelperModel; 

class BerandaController extends Controller
{

    public function index()
    {
        // 1. Ambil data jumlah armada per status
        $armadaStatuses = ArmadaModel::selectRaw('status, count(*) as jumlah')
                                      ->groupBy('status')
                                      ->get();

        // 2. Ambil data armada, driver, helper                
        $dataArm = ArmadaModel::with(['helper', 'driver'])->get();
        $dataDrv = DriverModel::all();
        $dataHlp = HelperModel::all();

        // Pass semua data ke view
        return view('admin.beranda', [
            'armadaStatuses' => $armadaStatuses,
            'dataArm' => $dataArm,
            'dataDrv' => $dataDrv, 
            'dataHlp' => $dataHlp
        ]);
    }

}

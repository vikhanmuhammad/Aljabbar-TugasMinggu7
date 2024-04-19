<?php

namespace App\Http\Controllers;

use App\Models\monitorArmadaModel;
use Illuminate\Http\Request;

class monitorArmadaController extends Controller
{
    public function indexMonitor(){
        $datamonitor = monitorArmadaModel::all();
        return view('monitorArmada', compact("datamonitor"));
    }
}

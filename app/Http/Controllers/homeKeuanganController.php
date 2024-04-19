<?php

namespace App\Http\Controllers;

use App\Models\homeKeuanganModel;
use Illuminate\Http\Request;

class homeKeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexKeuangan(){
        $datakeuangan = homeKeuanganModel::all();
        return view('keuangan', compact("datakeuangan"));
    }
}


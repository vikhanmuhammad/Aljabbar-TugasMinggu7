<?php

namespace App\Http\Controllers;

use App\Models\selengkapnyaModel;
use Illuminate\Http\Request;

class selengkapnyaController extends Controller
{
    public function indexSelengkapnya(){
        $dataselengkapnya = selengkapnyaModel::all();
        return view('selengkapnya', compact("dataselengkapnya"));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\pengingatModel;
use Illuminate\Http\Request;

class pengingatController extends Controller
{
    public function indexPengingat(){
        $datapengingat = pengingatModel::all();
        return view('pengingat', compact("datapengingat"));
    }
}

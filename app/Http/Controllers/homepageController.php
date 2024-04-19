<?php

namespace App\Http\Controllers;

use App\Models\homepageModel;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function index(){
        $data = homepageModel::all();
        return view('homepage', compact("data"));
    }
}

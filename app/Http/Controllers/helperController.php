<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\helperModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class helperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataHlp = helperModel::all();
        return view('admin.helper', compact('dataHlp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_helper' => 'required|string|max:255',
            'email' => 'required|email',
            'tgl_lahir' => 'required',
            'foto_profile' => 'required',
            'nik' => 'required',
        ]);

        // $fotopath = $request->input('foto_profile');

        $helper = new helperModel([
            'nama_helper' => $request->input('nama_helper'),
            'email' => $request->input('email'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'foto_profile' => $request->file('foto_profile')->store('post-image', 'public'),
            'nik' => $request->input('nik'),
        ]);

        $helper->save();

        // dd($helper->toArray());

        return redirect()->route('admin.helper');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_helper)
    {
        $dataHlp = helperModel::where('id_helper' ,$id_helper)->first();

        if(!$dataHlp){
            abort(404);
        }

        return view('admin.crud.helper.detailHelper', ['dataHlp' => $dataHlp]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataHlp = helperModel::find($id);
        return view('admin.crud.helper.editHelper', ['dataHlp' => $dataHlp]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_helper)
    {
        $dataHlp = helperModel::find($id_helper);
        $request->validate([
            'nama_helper' => 'required|string|max:255',
            'email' => 'required|email',
            'tgl_lahir' => 'required',
            'foto_profile' => 'required',
            'nik' => 'required',
        ]);

        $file = request()->file('foto_profile') ? request()->file('foto_profile')->store('post-image', 'public') : null;
        helperModel::where('id_helper', $dataHlp->id_helper)->update([
            'nama_helper' => $request['nama_helper'],
            'email' => $request['email'],
            'tgl_lahir' => $request['tgl_lahir'],
            'foto_profile' => $file,
            'nik' => $request['nik'],
        ]);
        return redirect()->route('admin.helper');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_helper)
    {
        $dataHlp = helperModel::where('id_helper' ,$id_helper)->first();
        $image_name = $dataHlp->foto_profile;
        $image_path = \public_path('storage/' . $dataHlp->foto_profile);
        if(File::exists($image_path)){
            unlink($image_path);
        }
        helperModel::destroy($dataHlp->id_helper);
        return redirect()->route('admin.helper');
    }
}

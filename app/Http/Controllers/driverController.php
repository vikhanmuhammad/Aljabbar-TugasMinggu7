<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driverModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class driverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataDrv = driverModel::all();
        return view('admin.driver', compact('dataDrv'));
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
            'nama_driver' => 'required|string|max:255',
            'email' => 'required|email',
            'tgl_lahir' => 'required',
            'foto_profile' => 'required',
            'nik' => 'required',
            'nomor_sim' => 'required'
        ]);

        // $fotopath = $request->input('foto_profile');

        $driver = new driverModel([
            'nama_driver' => $request->input('nama_driver'),
            'email' => $request->input('email'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'foto_profile' => $request->file('foto_profile')->store('post-image', 'public'),
            'nik' => $request->input('nik'),
            'nomor_sim' => $request->input('nomor_sim'),
        ]);

        $driver->save();

        // dd($helper->toArray());

        return redirect()->route('admin.driver');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_driver)
    {
        $dataDrv = driverModel::where('id_driver' ,$id_driver)->first();

        if(!$dataDrv){
            abort(404);
        }

        return view('admin.crud.driver.detailDriver', ['dataDrv' => $dataDrv]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataDrv = driverModel::find($id);
        return view('admin.crud.driver.editDriver', ['dataDrv' => $dataDrv]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_driver)
    {
        $dataDrv = driverModel::find($id_driver);
        $request->validate([
            'nama_driver' => 'required|string|max:255',
            'email' => 'required|email',
            'tgl_lahir' => 'required',
            'foto_profile' => 'required',
            'nik' => 'required',
            'nomor_sim' => 'required'
        ]);

        $file = request()->file('foto_profile') ? request()->file('foto_profile')->store('post-image', 'public') : null;
        driverModel::where('id_driver', $dataDrv->id_driver)->update([
            'nama_driver' => $request['nama_driver'],
            'email' => $request['email'],
            'tgl_lahir' => $request['tgl_lahir'],
            'foto_profile' => $file,
            'nik' => $request['nik'],
            'nomor_sim' => $request->input('nomor_sim'),
        ]);
        return redirect()->route('admin.driver');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_driver)
    {
        $dataDrv = driverModel::where('id_driver' ,$id_driver)->first();
        $image_name = $dataDrv->foto_profile;
        $image_path = \public_path('storage/' . $dataDrv->foto_profile);
        if(File::exists($image_path)){
            unlink($image_path);
        }
        driverModel::destroy($dataDrv->id_driver);
        return redirect()->route('admin.driver');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\armadaModel;
use App\Models\helperModel;
use App\Models\driverModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class armadaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataArm = armadaModel::with(['helper', 'driver'])->get();
        $dataDrv = driverModel::all();
        $dataHlp = helperModel::all();

        return view('admin.armada', compact('dataArm', 'dataDrv', 'dataHlp' ));
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
            'plat_depan' => 'required',
            'nomor_plat' => 'required',
            'plat_belakang' => 'required',
            'tgl_kir' => 'required',
            'julukan' => 'required',
            'kelas' => 'required',
            'foto_armada' => 'required',
            'jarak_tempuh' => 'required',
            'kapasitas_kursi' => 'required',
            'nomor_body' => 'required',
            'id_driver' => 'required',
            'id_helper' => 'required'
        ]);

        // $fotopath = $request->input('foto_profile');

        $armada = new armadaModel([
            'plat_depan' => $request->input('plat_depan'),
            'nomor_plat' => $request->input('nomor_plat'),
            'plat_belakang' => $request->input('plat_belakang'),
            'tgl_kir' => $request->input('tgl_kir'),
            'julukan' => $request->input('julukan'),
            'kelas' => $request->input('kelas'),
            'foto_armada' => $request->file('foto_armada')->store('post-image', 'public'),
            'jarak_tempuh' => $request->input('jarak_tempuh'),
            'kapasitas_kursi' => $request->input('kapasitas_kursi'),
            'nomor_body' => $request->input('nomor_body'),
            'status' => $request->input('status'),
            'tempat_awal' => $request->input('tempat_awal'),
            'tempat_akhir' => $request->input('tempat_akhir'),
            'jam_keberangkatan' => $request->input('jam_keberangkatan'),
            'tanggal_keberangkatan' => $request->input('tanggal_keberangkatan'),
            'id_driver' => $request->input('id_driver'),
            'id_helper' => $request->input('id_helper')
        ]);

        $armada->save();

        // dd($helper->toArray());

        return redirect()->route('admin.armada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_armada)
    {
        // $dataArm = armadaModel::with(['driver', 'helper'])->where('id_armada', $id_armada)->first();

        // if(!$dataArm){
        //     abort(404);
        // }

        // return view('admin.crud.armada.detailArmada', ['dataArm' => $dataArm]);
        $dataArm = armadaModel::with(['driver', 'helper', 'keuangan'])->find($id_armada);

        if (!$dataArm) {
            abort(404);
        }

        // Menambahkan data driver dan helper untuk ditampilkan di view
        $dataDrv = driverModel::find($dataArm->id_driver);
        $dataHlp = helperModel::find($dataArm->id_helper);

        return view('admin.crud.armada.detailArmada', ['dataArm' => $dataArm, 'dataDrv' => $dataDrv, 'dataHlp' => $dataHlp]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Memuat data armada berserta data terkait dari tbdriver dan tbhelper
        $dataArm = armadaModel::with(['driver', 'helper', 'keuangan'])->find($id);
        $dataDrv = driverModel::all(); // Ambil semua data driver
        $dataHlp = helperModel::all(); // Ambil semua data helper

        if (!$dataArm) {
            abort(404);
        }

        return view('admin.crud.armada.editArmada', ['dataArm' => $dataArm, 'dataDrv' => $dataDrv, 'dataHlp' => $dataHlp]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_armada)
    {
        $dataArm = armadaModel::with(['driver', 'helper', 'keuangan'])->find($id_armada);
        $request->validate([
            'plat_depan' => 'required',
            'nomor_plat' => 'required',
            'plat_belakang' => 'required',
            'tgl_kir' => 'required',
            'julukan' => 'required',
            'kelas' => 'required',
            'foto_armada' => 'required',
            'jarak_tempuh' => 'required',
            'kapasitas_kursi' => 'required',
            'nomor_body' => 'required',
            'id_driver' => 'required',
            'id_helper' => 'required'
        ]);

        $file = request()->file('foto_armada') ? request()->file('foto_armada')->store('post-image', 'public') : null;
        armadaModel::where('id_armada', $dataArm->id_armada)->update([
            'plat_depan' => $request->input('plat_depan'),
            'nomor_plat' => $request->input('nomor_plat'),
            'plat_belakang' => $request->input('plat_belakang'),
            'tgl_kir' => $request->input('tgl_kir'),
            'julukan' => $request->input('julukan'),
            'kelas' => $request->input('kelas'),
            'foto_armada' => $request->file('foto_armada')->store('post-image', 'public'),
            'jarak_tempuh' => $request->input('jarak_tempuh'),
            'kapasitas_kursi' => $request->input('kapasitas_kursi'),
            'nomor_body' => $request->input('nomor_body'),
            'status' => $request->input('status'),
            'tempat_awal' => $request->input('tempat_awal'),
            'tempat_akhir' => $request->input('tempat_akhir'),
            'jam_keberangkatan' => $request->input('jam_keberangkatan'),
            'tanggal_keberangkatan' => $request->input('tanggal_keberangkatan'),
            'id_driver' => $request->input('id_driver'),
            'id_helper' => $request->input('id_helper')
        ]);
        return redirect()->route('admin.armada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataArm = armadaModel::with(['driver', 'helper'])->where('id_armada', $id)->first();
        $image_name = $dataArm->foto_armada;
        $image_path = \public_path('storage/' . $dataArm->foto_armada);
        if(File::exists($image_path)){
            unlink($image_path);
        }
        armadaModel::destroy($dataArm->id_armada);
        return redirect()->route('admin.armada');
    }
}

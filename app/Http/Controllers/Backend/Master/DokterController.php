<?php

namespace App\Http\Controllers\Backend\Master;

use App\Http\Controllers\Controller;
use App\Models\M_Dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DokterController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('backend.pages.dokter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.pages.dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $no_sip = $request->input('no_sip');
        $no_str = $request->input('no_str');
        $gelar_awal = $request->input('gelar_awal');
        $nama_dokter = $request->input('nama_lengkap');
        $email_dokter = $request->input('email_dokter');
        $no_hp = $request->input('no_hp');
        $tempat_lahir = $request->input('tempat_lahir');
        $tgl_lahir = $request->input('tgl_lahir');
        $alamat = $request->input('alamat');

        $datasave = [
            'no_sip' => $no_sip,
            'no_str' => $no_str,
            'nama' => $nama_dokter,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'no_hp' => $no_hp,
            'email' => $email_dokter,
            'alamat' => $alamat,
        ];

        $save = M_Dokter::insert($datasave);

        if ($save) {
            $r = [
                'success' => true,
                'msg' => 'Data berhasil disimpan!',
            ];
        } else {
            $r = [
                'success' => false,
                'msg' => 'Data gagal disimpan!',
            ];
        }

        return response()->json($r);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}

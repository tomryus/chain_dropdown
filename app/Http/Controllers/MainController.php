<?php

namespace App\Http\Controllers;
Use \App\Province;
Use \App\City;
Use \App\Kecamatan;
Use \App\Desa;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $province = Province::all()->pluck('nama','id');
        return view('welcome',compact('province'));
    }

    public function getCity($id)
    {
        $city = City::where('provinsi_id', $id)->pluck('nama','id');
        return json_encode($city);
    }
    public function getCamat($id)
    {
        $kecamatan = Kecamatan::where('kabupaten_id', $id)->pluck('nama','id');
        return json_encode($kecamatan);
    }
    public function getDesa($id)
    {
        $desa = Desa::where('kecamatan_id', $id)->pluck('nama','id');
        return json_encode($desa);
    }
    public function Store(request $request)
    {
        $data = $request->all();
        return $data;
    }
}

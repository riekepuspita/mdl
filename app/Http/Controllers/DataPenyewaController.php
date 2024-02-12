<?php

namespace App\Http\Controllers;

use App\Models\DataPenyewa;
use Illuminate\Http\Request;

class DataPenyewaController extends Controller
{
    public function index()
    {
        $data = DataPenyewa::all();

        // dd($data);
        return view('menu.datapenyewa', compact('data'));
    }

    public function tambahpenyewa()
    {
        return view('menu.tambahdata');
    }

    public function insertdata(Request $request)
    {
        // dd($request->all());
        DataPenyewa::create($request->all());
        return redirect()->route('datapenyewa')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id)
    {

        $data = DataPenyewa::find($id);
        // dd($data);

        return view('menu.tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
        $data = DataPenyewa::find($id);
        $data->update($request->all());
        return redirect()->route('datapenyewa')->with('sucess', 'Data Berhasil Diubah');
    }


    public function delete($id)
    {
        $data = DataPenyewa::find($id);
        $data->delete();
        return redirect()->route('datapenyewa')->with('sucess', 'Data Berhasil Dihapus');
    }
}

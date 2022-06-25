<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\rs_apotek;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RsApotekController extends Controller
{
    public function index()
    {
        $data['title'] = "Rumah Sakit Dan Apotek";

        return view('data.index', $data);
    }

    public function create()
    {
        $data['kategori'] = kategori::all();
        return view('data.create',$data);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id_kategori' => 'required',
            'nama' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'lat' => 'required|numeric',
            'long' => 'required|numeric',
        ]);        
        rs_apotek::create($validateData);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function show($id)
    {
        $data['id'] = $id;
        $data['kategori'] = kategori::all();
        $data['data'] = rs_apotek::where('id', $id)->first();
        return view('data.show',$data);
    }

    public function edit($id)
    {        
        $data['id'] = $id;
        $data['kategori'] = kategori::all();
        $data['data'] = rs_apotek::where('id', $id)->first();
        return view('data.edit', $data);
    }

    public function update(Request $request)
    {
        $validateData = $request->validate([
            'id_kategori' => 'required',
            'nama' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'lat' => 'required',
            'long' => 'required',
        ]); 
        rs_apotek::where('id', $request->id)->update($validateData);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function destroy(Request $request)
    {
        rs_apotek::findOrFail($request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function DataTable()
    {
        $table = rs_apotek::select('*');
        return DataTables::of($table)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn_lihat = '<button type="button" class="btn btn-sm btn-success" id="showData" data-id="' . $row->id . '"><i class="fas fa-eye"></i></button>';
                $btn_edit = '<button type="button" class="btn btn-sm btn-info" id="editData" data-id="' . $row->id . '"><i class="fas fa-edit"></i></button>';
                $btn_hapus = '<button type="button" class="btn btn-sm btn-danger" id="hapusData" data-id="' . $row->id . '" data-Text="' . $row->nama . '"><i class="fas fa-trash"></i></button>';

                $btn = '<div class="btn-group" role="group" aria-label="LihatData">' .
                    $btn_lihat .
                    $btn_edit .
                    $btn_hapus .
                    '</div>';
                return $btn;
            })
            ->addColumn('foto', function ($row) {
                $btn = '<button type="button" class="btn btn-sm btn-secondary" id="showFoto" data-id="' . $row->id . '">photo</i></button>';
                return $btn;
            })
            ->addColumn('fasilitas', function ($row) {
                $btn = '<button type="button" class="btn btn-sm btn-secondary" id="showFasilitas" data-id="' . $row->id . '">Fasilitas</i></button>';
                return $btn;
            })
            ->rawColumns(['action','foto','fasilitas'])
            ->make(true);
    }
}

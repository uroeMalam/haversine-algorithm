<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FasilitasController extends Controller
{

    public function index()
    {
        $data['title'] = "Fasilitas";

        return view('fasilitas.index', $data);
    }

    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $filename= time().'.'.$request->foto->extension();

        $file= $request->file('foto');
        $file-> move(public_path('public/Image'), $filename);
        
        fasilitas::create([
            'nama' => $request->nama,
            'foto' => $filename
        ]);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {        
        $data['id'] = $id;
        $data['data'] = fasilitas::where('id', $id)->first();
        return view('fasilitas.edit', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $filename= time().'.'.$request->foto->extension();
        // $filename= date('YmdHi').$file->getClientOriginalName(); //incase you one original name

        $file= $request->file('foto');
        $file-> move(public_path('public/Image'), $filename);
        
        fasilitas::where('id', $request->id)->update([
            'nama' => $request->nama,
            'foto' => $filename
        ]);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function destroy(Request $request)
    {
        fasilitas::findOrFail($request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function DataTable()
    {
        $table = fasilitas::select('*');
        return DataTables::of($table)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn_edit = '<button type="button" class="btn btn-sm btn-info" id="editData" data-id="' . $row->id . '"><i class="fas fa-edit"></i></button>';
                $btn_hapus = '<button type="button" class="btn btn-sm btn-danger" id="hapusData" data-id="' . $row->id . '" data-Text="' . $row->nama . '"><i class="fas fa-trash"></i></button>';

                $btn = '<div class="btn-group" role="group" aria-label="LihatData">' .
                    $btn_edit .
                    $btn_hapus .
                    '</div>';
                return $btn;
            })
            ->addColumn('showImg', function ($row) {
                $btn = '<img src="public/Image/'.$row->foto.'" style="height: 100px; width: 150px;">';
                return $btn;
            })
            ->rawColumns(['action','showImg'])
            ->make(true);
    }
}

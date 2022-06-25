<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Kategori";

        return view('kategori.m_kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $filename= time().'.'.$request->foto->extension();
        // $filename= date('YmdHi').$file->getClientOriginalName(); //incase you one original name

        $file= $request->file('foto');
        $file-> move(public_path('public/Image'), $filename);
        
        kategori::create([
            'nama' => $request->nama,
            'foto' => $filename
        ]);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $data['id'] = $id;
        $data['data'] = kategori::where('id', $id)->first();
        return view('kategori.edit', $data);
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
        
        kategori::where('id', $request->id)->update([
            'nama' => $request->nama,
            'foto' => $filename
        ]);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function destroy(Request $request)
    {
        kategori::findOrFail($request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function DataTable()
    {
        $table = kategori::select('*');
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

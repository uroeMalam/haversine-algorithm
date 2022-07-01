<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use App\Models\fasilitasrs;
use App\Models\foto;
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

    // btn foto
    public function foto($id)
    {        
        $data['id'] = $id;
        return view('data.foto', $data);
    }

    public function DataTableFoto(Request $request)
    {
        $table = foto::select('*')->where('id_rs',$request->id);
        return DataTables::of($table)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<button type="button" class="btn btn-sm btn-danger" id="deleteFoto" data-id="' . $row->id . '" data-text="' . $row->foto . '">Delete</i></button>';
                return $btn;
            })
            ->addColumn('showImg', function ($row) {
                $btn = '<img src="public/Image/'.$row->foto.'" style="width: 500px;">';
                return $btn;
            })
            ->rawColumns(['action','showImg'])
            ->make(true);
    }

    public function storePhoto(Request $request)
    {
        $request->validate([
            'id_rs' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $filename= time().'.'.$request->foto->extension();

        $file= $request->file('foto');
        $file-> move(public_path('public/Image'), $filename);
        
        foto::create([
            'id_rs' => $request->id_rs,
            'foto' => $filename
        ]);
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    public function destroyPhtoto(Request $request)
    {
        foto::findOrFail($request->id)->delete();
        return response()->json(['status' => true, 'message' => 'berhasil']);
    }

    // fasilitas
    public function fasilitas($id)
    {        
        $data['id'] = $id;
        $data['fasilitas'] = fasilitas::all();
        // $data['dataFasilitas'] = fasilitasrs::where(['id_rs_apotek'=>$id,'deleted_at'=>null])->get();
        
        // $data['fasilitas'] = fasilitas::select('tb_fasilitas_rs.id_fasilitas as id','tb_fasilitas.nama','tb_fasilitas_rs.keterangan')->rightJoin('tb_fasilitas_rs', 'tb_fasilitas_rs.id_fasilitas', '=', 'tb_fasilitas.id')->where(['tb_fasilitas_rs.id_rs_apotek'=>$id,'tb_fasilitas.deleted_at'=>null])->get();
        return view('data.fasilitas', $data);
    }

    public function storeFasilitas(Request $request)
    {
        $fasilitas = fasilitas::all();
        $temp = [];
        foreach ($fasilitas as $a) {
            $data = [
                'id_rs_apotek'=>$request->id_rs,
                'id_fasilitas'=>$request->id_fasilitas[$a->id],
                'keterangan'=>$request->value[$a->id],
            ];
            array_push($temp,$data);
        };
        // upsert jalan tapi di harus primary key
        $delete = fasilitasrs::where('id_rs_apotek',$request->id_rs);
        $delete->delete();
        // fasilitasrs::upsert($temp,['keterangan']);
        return response()->json(['status' => true, 'message' => "Berhasil Disimpan"]);
    }
}

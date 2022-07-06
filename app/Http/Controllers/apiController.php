<?php

namespace App\Http\Controllers;

use App\Models\fasilitasrs;
use App\Models\foto;
use App\Models\rs_apotek;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function index()
    {
        $data['status'] = true;
        // $data['data'] = rs_apotek::leftJoin('tb_foto', 'tb_rs_apotek.id', '=', 'tb_foto.id_rs')->get();
        $subQuery = DB::table('tb_foto')
                        ->select('id_rs', 'foto')
                        ->groupBy('id_rs');
        $data['data'] = rs_apotek::leftJoinSub($subQuery,'t',function ($query) {
                                                            $query->on('t.id_rs', '=', 'tb_rs_apotek.id');
                                                            })->get();
        $data['message'] = "berhasil didapat";
        return response()->json($data,200);
    }

    public function category($id)
    {
        $data['status'] = true;
        $subQuery = DB::table('tb_foto')
                        ->select('id_rs', 'foto')
                        ->groupBy('id_rs');
        $data['data'] = rs_apotek::leftJoinSub($subQuery,'t',function ($query) {
                                                            $query->on('t.id_rs', '=', 'tb_rs_apotek.id');
                                                            })->where('id_kategori',$id)->get();
        $data['message'] = "berhasil didapat";
        return response()->json($data,200);
    }

    public function img($id)
    {
        // if ($id == "null") {
        //     return response()->file('./public/Image/1656820998.jpg');
        // }
        $filePath = './public/Image/'. $id;
        return response()->file($filePath);
    }

    public function imgCarousel($id)
    {
        $data['status'] = true;
        $data['data'] = foto::where('id_rs',$id)->get();
        $data['message'] = "berhasil didapat";
        return response()->json($data,200);
    }

    public function fasilitasList($id)
    {
        $data['status'] = true;
        $data['data'] = fasilitasrs::join('tb_fasilitas', 'tb_fasilitas.id', '=', 'tb_fasilitas_rs.id_fasilitas')->where('tb_fasilitas_rs.id_rs_apotek',$id)->get();
        $data['message'] = "berhasil didapat";
        return response()->json($data,200);
    }
}

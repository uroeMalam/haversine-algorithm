<?php

namespace App\Http\Controllers;
use App\Models\rs_apotek;

class ApiController extends Controller
{
    public function index()
    {
        $data['status'] = 200;
        $data['data'] = rs_apotek::all();
        $data['message'] = "berhasil didapat";
        return response()->json($data,200);
    }

    public function img($id)
    {
        $filePath = './public/Image/'. $id;
        return response()->file($filePath);
    }
}

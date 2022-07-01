<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class katagoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kategori')->insert([
            'id'=>1,
            'nama'=>'RS Umum',
            'foto'=>'1656699296.png',
            'created_at'=>'2022-07-01 11:14:56',
            'updated_at'=>'2022-07-01 11:14:56',
            'deleted_at'=>NULL
            ] );
                        
        DB::table('tb_kategori')->insert([
            'id'=>2,
            'nama'=>'Klinik',
            'foto'=>'1656699353.png',
            'created_at'=>'2022-07-01 11:15:53',
            'updated_at'=>'2022-07-01 11:15:53',
            'deleted_at'=>NULL
            ] );
                        
        DB::table('tb_kategori')->insert([
            'id'=>3,
            'nama'=>'Apotek',
            'foto'=>'1656699378.png',
            'created_at'=>'2022-07-01 11:16:18',
            'updated_at'=>'2022-07-01 11:16:18',
            'deleted_at'=>NULL
            ] );
                        
        DB::table('tb_kategori')->insert([
            'id'=>4,
            'nama'=>'Puskesmas',
            'foto'=>'1656699403.png',
            'created_at'=>'2022-07-01 11:16:43',
            'updated_at'=>'2022-07-01 11:16:43',
            'deleted_at'=>NULL
            ] );
    }
}

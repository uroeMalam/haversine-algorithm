<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class fasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_fasilitas')->insert([
            'id'=>1,
            'nama'=>'UGD',
            'foto'=>'1656699475.png',
            'created_at'=>'2022-07-01 11:17:55',
            'updated_at'=>'2022-07-01 11:17:55',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>2,
            'nama'=>'R.Inap',
            'foto'=>'1656699489.png',
            'created_at'=>'2022-07-01 11:18:09',
            'updated_at'=>'2022-07-01 11:18:09',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>3,
            'nama'=>'R.Jalan',
            'foto'=>'1656699502.png',
            'created_at'=>'2022-07-01 11:18:22',
            'updated_at'=>'2022-07-01 11:18:22',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>4,
            'nama'=>'BPJS',
            'foto'=>'1656699516.png',
            'created_at'=>'2022-07-01 11:18:36',
            'updated_at'=>'2022-07-01 11:18:36',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>5,
            'nama'=>'Swab',
            'foto'=>'1656699532.png',
            'created_at'=>'2022-07-01 11:18:52',
            'updated_at'=>'2022-07-01 11:18:52',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>6,
            'nama'=>'Buka 24 jam',
            'foto'=>'1656699544.png',
            'created_at'=>'2022-07-01 11:19:04',
            'updated_at'=>'2022-07-01 11:19:04',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>7,
            'nama'=>'Menerima resep dokter',
            'foto'=>'1656699559.png',
            'created_at'=>'2022-07-01 11:19:19',
            'updated_at'=>'2022-07-01 11:19:19',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>8,
            'nama'=>'Buka 11 jam',
            'foto'=>'1656699570.png',
            'created_at'=>'2022-07-01 11:19:30',
            'updated_at'=>'2022-07-01 11:19:30',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>9,
            'nama'=>'Buka 12 jam',
            'foto'=>'1656699581.png',
            'created_at'=>'2022-07-01 11:19:41',
            'updated_at'=>'2022-07-01 11:19:41',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>10,
            'nama'=>'Buka 24 jam',
            'foto'=>'1656699593.png',
            'created_at'=>'2022-07-01 11:19:53',
            'updated_at'=>'2022-07-01 11:19:53',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>11,
            'nama'=>'Buka 13 jam',
            'foto'=>'1656699604.png',
            'created_at'=>'2022-07-01 11:20:04',
            'updated_at'=>'2022-07-01 11:20:04',
            'deleted_at'=>NULL
            ] );
            
            
                        
        DB::table('tb_fasilitas')->insert([
            'id'=>12,
            'nama'=>'Buka 8 jam',
            'foto'=>'1656699620.png',
            'created_at'=>'2022-07-01 11:20:20',
            'updated_at'=>'2022-07-01 11:20:20',
            'deleted_at'=>NULL
            ] );
            
            
    }
}

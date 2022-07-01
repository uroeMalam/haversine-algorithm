<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_rs_apotek')->insert([
            'id'=>1,
            'id_kategori'=>1,
            'nama'=>'Rumah Sakit Arun Lhokseumawe',
            'kota'=>'Bathupat',
            'alamat'=>'Jln. Plaju Komplek Perumahan PT.Arun NGL Batuphat,Lhokseumawe Batuphat, Kec. Muara Dua',
            'lat'=>'5.2163999',
            'long'=>'97.0466001',
            'created_at'=>'2022-07-01 11:21:19',
            'updated_at'=>'2022-07-01 11:21:19',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>2,
            'id_kategori'=>1,
            'nama'=>'Rumah Sakit Cut Meutia',
            'kota'=>'Blang Mangat',
            'alamat'=>'Jl. Banda Aceh - Medan Km. 6 Buket Rata, Kec. Banda Sakti',
            'lat'=>'5.1221634',
            'long'=>'97.1521512',
            'created_at'=>'2022-07-01 11:21:56',
            'updated_at'=>'2022-07-01 11:21:56',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>3,
            'id_kategori'=>1,
            'nama'=>'Rumah Sakit RUMAH SAKIT UMUM KASIH IBU',
            'kota'=>'Kuta Blang',
            'alamat'=>'Jl. Merdeka No. 17  Kuta Blang, Kec. Banda Sakti',
            'lat'=>'5.185216',
            'long'=>'97.1199172',
            'created_at'=>'2022-07-01 11:22:29',
            'updated_at'=>'2022-07-01 11:22:29',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>4,
            'id_kategori'=>1,
            'nama'=>'Rumah Sakit PT.RUMAH SAKIT UMUM SAKINAH',
            'kota'=>'Jawa Baru',
            'alamat'=>'JALAN ANTARA NO.30 GAMPONG JAWA BARU KEC.BANDA SAKTI KOTA LHOKSEUMAWE',
            'lat'=>'5.1879172',
            'long'=>'97.1418683',
            'created_at'=>'2022-07-01 11:23:07',
            'updated_at'=>'2022-07-01 11:23:07',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>5,
            'id_kategori'=>2,
            'nama'=>'Arifa Medikal Klinik',
            'kota'=>'Blang Pulo',
            'alamat'=>'Jl. Medan - Banda Aceh No.22, Dusun Arongan, Blang Pulo, Kec. Muara Satu, Kota Lhokseumawe, Aceh',
            'lat'=>'5.2104031',
            'long'=>'97.0691973',
            'created_at'=>'2022-07-01 11:23:40',
            'updated_at'=>'2022-07-01 11:23:40',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>6,
            'id_kategori'=>3,
            'nama'=>'Apotek Kimia Farma No.60',
            'kota'=>'Kp. Jawa Lama',
            'alamat'=>'JALAN MERDEKA NO. 47 B-C SIMPANG EMPAT, Kec. Banda Sakti',
            'lat'=>'5.2103992',
            'long'=>'97.0013446',
            'created_at'=>'2022-07-01 11:24:25',
            'updated_at'=>'2022-07-01 11:24:25',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>7,
            'id_kategori'=>3,
            'nama'=>'Apotek CHEK DIEN',
            'kota'=>'Bathupat',
            'alamat'=>'JLN MEDAN - BANDA ACEH GAMPONG BATUPHAT TIMUR Batuphat Timur, Kec. Muara Batu',
            'lat'=>'0',
            'long'=>'0',
            'created_at'=>'2022-07-01 11:25:08',
            'updated_at'=>'2022-07-01 11:25:08',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>8,
            'id_kategori'=>3,
            'nama'=>'Apotek Kimia Farma Darussalam',
            'kota'=>'Jawa Baru',
            'alamat'=>'Jl. Darussalam No.49B Jawa Baru, Kec. Banda Sakti',
            'lat'=>'5.1893801',
            'long'=>'97.1445666',
            'created_at'=>'2022-07-01 11:25:42',
            'updated_at'=>'2022-07-01 11:25:42',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>9,
            'id_kategori'=>2,
            'nama'=>'Klinik VINCA ROSEA',
            'kota'=>'Jawa Baru',
            'alamat'=>'JALAN DARUSSALAM NO.36 G GAMPONG JAWA BARU, Kec. Banda Sakti',
            'lat'=>'5.1839708',
            'long'=>'97.1433834',
            'created_at'=>'2022-07-01 11:26:13',
            'updated_at'=>'2022-07-01 11:26:13',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>10,
            'id_kategori'=>1,
            'nama'=>'Rumah Sakit Umum Kesrem Lhokseumawe',
            'kota'=>'Jawa Lama',
            'alamat'=>'Kp. Jawa Lama, Kec. Banda Sakti, Kota Lhokseumawe, Aceh',
            'lat'=>'5.1852452',
            'long'=>'97.1408704',
            'created_at'=>'2022-07-01 11:26:44',
            'updated_at'=>'2022-07-01 11:26:44',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>11,
            'id_kategori'=>1,
            'nama'=>'RS Prima Inti Medika',
            'kota'=>'Tambon Tunong',
            'alamat'=>'Tambon Tunong, Kec. Dewantara, Kabupaten Aceh Utara, Aceh',
            'lat'=>'5.2215687',
            'long'=>'97.0237589',
            'created_at'=>'2022-07-01 11:27:15',
            'updated_at'=>'2022-07-01 11:27:15',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>12,
            'id_kategori'=>1,
            'nama'=>'RS Pendidikan Universitas Malikussaleh',
            'kota'=>'Sawang',
            'alamat'=>'Jl. Cot Teungku Nie, Paya Gaboh, Kec. Sawang, Kabupaten Aceh Utara, Aceh 24313',
            'lat'=>'5.2320528',
            'long'=>'96.9770971',
            'created_at'=>'2022-07-01 11:27:53',
            'updated_at'=>'2022-07-01 11:27:53',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>13,
            'id_kategori'=>2,
            'nama'=>'KLINIK PRATAMA ASNAWI / Apotek Zakia',
            'kota'=>'Tambon Baroh',
            'alamat'=>'Jl. Medan - Banda Aceh No.KM. 259, Tambon Baroh, Kec. Dewantara, Kabupaten Aceh Utara, Aceh 24354',
            'lat'=>'5.2364011',
            'long'=>'97.023637',
            'created_at'=>'2022-07-01 11:28:20',
            'updated_at'=>'2022-07-01 11:28:20',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>14,
            'id_kategori'=>2,
            'nama'=>'Klinik Meutuah',
            'kota'=>'Tanah Luas',
            'alamat'=>'Jln. Exxon Mobil A1, Desa, Paya, Kec. Tanah Luas, Kabupaten Aceh Utara, Aceh 24385',
            'lat'=>'5.0512449',
            'long'=>'97.2606525',
            'created_at'=>'2022-07-01 11:28:48',
            'updated_at'=>'2022-07-01 11:28:48',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>15,
            'id_kategori'=>3,
            'nama'=>'Dien Farma',
            'kota'=>'Uteun Geulinggang',
            'alamat'=>'Uteun Geulinggang, Kec. Dewantara, Kabupaten Aceh Utara, Aceh',
            'lat'=>'5.2379569',
            'long'=>'97.0155632',
            'created_at'=>'2022-07-01 11:29:19',
            'updated_at'=>'2022-07-01 11:29:19',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>16,
            'id_kategori'=>3,
            'nama'=>'Apotek Rasa',
            'kota'=>'Krueng Geukueh',
            'alamat'=>'Jl.Ramai, No.96, Kruna Geukueh, Dewantara, Keude Krueng Geukueh, Kec. Dewantara, Kabupaten Aceh Utara, Aceh 24184',
            'lat'=>'5.3090386',
            'long'=>'96.2154473',
            'created_at'=>'2022-07-01 11:29:51',
            'updated_at'=>'2022-07-01 11:29:51',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>17,
            'id_kategori'=>3,
            'nama'=>'Apotek Aswin Farma',
            'kota'=>'Blang Peuria',
            'alamat'=>'Blang Peuria, Kec. Samudera, Kabupaten Aceh Utara, Aceh 24374',
            'lat'=>'5.1168267',
            'long'=>'97.2046476',
            'created_at'=>'2022-07-01 11:30:25',
            'updated_at'=>'2022-07-01 11:30:25',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>18,
            'id_kategori'=>1,
            'nama'=>'rumah sakit yayasan arun medika',
            'kota'=>'Tanah Luas',
            'alamat'=>'Jl. Medan Banda Aceh, Pulo U, Kec. Tanah Luas, Kabupaten Aceh Utara, Aceh 24386',
            'lat'=>'5.0915643',
            'long'=>'97.2966873',
            'created_at'=>'2022-07-01 11:30:57',
            'updated_at'=>'2022-07-01 11:30:57',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>19,
            'id_kategori'=>2,
            'nama'=>'Klinik Husada Lhoksukon',
            'kota'=>'Ceubrek',
            'alamat'=>'Ceubrek, Kec. Lhoksukon, Kabupaten Aceh Utara, Aceh 24372',
            'lat'=>'5.0422797',
            'long'=>'97.3236653',
            'created_at'=>'2022-07-01 11:31:30',
            'updated_at'=>'2022-07-01 11:31:30',
            'deleted_at'=>NULL
            ] );
            
            
                        
            DB::table('tb_rs_apotek')->insert([
            'id'=>20,
            'id_kategori'=>4,
            'nama'=>'Puskesmas Lhoksukon',
            'kota'=>'Lhoksukon',
            'alamat'=>'24382, Jl. Lhoksukon, Kuta Lhoksukon, Lhoksukon, North Aceh Regency, Aceh 24376',
            'lat'=>'5.0422797',
            'long'=>'97.3236653',
            'created_at'=>'2022-07-01 11:32:00',
            'updated_at'=>'2022-07-01 11:32:00',
            'deleted_at'=>NULL
            ] );
            
            
    }
}

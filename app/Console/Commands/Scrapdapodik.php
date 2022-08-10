<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\M_dapodik_kecamatan;
use App\Models\M_dapodik_kota;
use App\Models\M_dapodik_provinsi;
use App\Models\M_dapodik_sekolah;
use Illuminate\Http\Request;
use Goutte\Client;
use Illuminate\Support\Facades\Http;

class Scrapdapodik extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:scrapdapodik {semester}';
 

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
         // ini_set('max_execution_time',999999999999); 
         $ch = curl_init();
         set_time_limit(0);
         curl_setopt($ch, CURLOPT_TIMEOUT,500);
         curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
         $response = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah');
         if($response->successful()){
             $data = $response->json();
             foreach($data as $datas){
                 $kode_wilayah = $datas;
                 unset($datas['kode_wilayah']);
             
                 $tabel_dapodik_provinsi = M_dapodik_provinsi::updateOrCreate(
                     [
                         'kode_wilayah'  => $kode_wilayah['kode_wilayah'],
                     ],$datas
                 );
 
                 $response_kota = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=1&kode_wilayah='.$kode_wilayah['kode_wilayah'].'&semester_id='.$this->argument('semester'));   
                 $data_kota = $response_kota->json();
             
                 if($data_kota != [])
                 {
                     
                     foreach($data_kota as $data_kotas)
                     {
                         $kode_wilayah_kota = $data_kotas;
                         unset($data_kotas['kode_wilayah']);
                         $tabel_dapodik_kota = M_dapodik_kota::updateOrCreate(
                             [
                                 'kode_wilayah'  => $kode_wilayah_kota['kode_wilayah'],
                             ],$data_kotas
                         );
 
                         $response_kecamatan = Http::get('https://dapo.kemdikbud.go.id/rekap/dataSekolah?id_level_wilayah=2&kode_wilayah='.$kode_wilayah_kota['kode_wilayah'].'&semester_id='.$this->argument('semester'));
                         
                         $data_kecamatan = $response_kecamatan->json();
                         if($data_kecamatan != [])
                         {
                             foreach($data_kecamatan as $data_kecamatans)
                             {
                         
                                     $kode_kecamatan = $data_kecamatans;
                                     // dd($kode_kecamatan);
                                     unset($data_kecamatans['kode_wilayah']);
                                     $tabel_dapodik_kota = M_dapodik_kecamatan::updateOrCreate(
                                         [
                                             'kode_wilayah'  => $kode_kecamatan['kode_wilayah'],
                                         ],$data_kecamatans
                                     );
     
                                     $response_sekolah= Http::get('https://dapo.kemdikbud.go.id/rekap/progresSP?id_level_wilayah=3&kode_wilayah='.$kode_kecamatan['kode_wilayah'].'&semester_id='.$this->argument('semester').'&bentuk_pendidikan_id=sekolah');   
                                     $data_sekolah = $response_sekolah->json();
                                   
                                     foreach ($data_sekolah as $data_sekolahs)
                                     {
                                         if($data_sekolah != [])
                                         {
                                             
                                             $kode_sekolah = $data_sekolahs;
                                             unset($data_sekolahs['sekolah_id']);
                                             $tabel_dapodik_sekolah = M_dapodik_sekolah::updateOrCreate(
                                                 [
                                                     'sekolah_id'  => $kode_sekolah['sekolah_id'],
                                                 ],$data_sekolahs
                                             );
                                             
                                         }
                                     }                            
                             }
 
                         }
                     
                        
                      
 
                     }
                  
                 }
             }
        
         }
    }
}

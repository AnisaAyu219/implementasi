<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CURLFILE;
use App\Http\Requests\ImageStoreRequest;
use Illuminate\Support\Facades\Storage;

class PelatihanController extends Controller
{
    public function input_pelatihan(Request $request)
    {

        $deskripsi = $request->input('deskripsi');
        $sertifikat = $request->file('sertifikat');
        $tahun_pelaksanaan = $request->input('tahun_pelaksanaan');
        $nama = $request->input('nama');
        $bidang = $request->input('bidang');
        $nim = $request->input('nim');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/input_pelatihan',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('deskripsi'=>$deskripsi,'sertifikat' => new CURLFILE($sertifikat->path()),'tahun_pelaksanaan'=>$tahun_pelaksanaan,'nama'=>$nama,'bidang'=>$bidang,'nim'=>$nim),
            CURLOPT_HTTPHEADER => array(
              'Accept: application/json'
            ),
          ));

          $response = curl_exec($curl);
          $result = json_decode($response);

          echo "<pre>";
            print_r($result);
            echo "</pre>";

          curl_close($curl);
          echo $response;

    }

    public function getall_pelatihan(Request $request)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/getall_pelatihan',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($response);
        // echo "<pre>";
        //     print_r($result);
        //     echo "</pre>";
        curl_close($curl);
        // echo $response;

        if($response_code == 200){
            //Lalu di kirim ke view jurnal
            return view('tablepelatihan', compact('result'));
          }else{
            //Jika gagal di arahkan ke logout
            print('error');
            }
    }


    public function delete_pelatihan($id_pelatihan){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/delete_pelatihan/'.$id_pelatihan,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'DELETE',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        return redirect()->to('http://localhost:8010/getall_pelatihan');


    }
}

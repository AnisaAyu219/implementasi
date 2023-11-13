<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanKerjaController extends Controller
{
    public function input_pengalaman_kerja(Request $request)
    {
        $tempat = $request->input('tempat');
        $jabatan = $request->input('jabatan');
        $tanggal_mulai = $request->input('tanggal_mulai');
        $tanggal_selesai = $request->input('tanggal_selesai');
        $nim = $request->input('nim');
        $id_pengubah = $request->input('id_pengubah');
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/input_pengalaman_kerja',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('tempat' =>$tempat,'jabatan' => $jabatan, 'tanggal_mulai' => $tanggal_mulai, 'tanggal_selesai' => $tanggal_selesai, 'id_pengubah' => $id_pengubah),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=kDfufpeWj8RQx9MznY0jntrP0A5RS8n72n3Qxn7r'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }

    public function getall_pengalaman_kerja(Request $request)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/getall_pengalaman_kerja',
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
            return view('tablepengalamankerja', compact('result'));
          }else{
            //Jika gagal di arahkan ke logout
            print('error');
            }
    }

    public function delete_pengalaman_kerja($id_pengalaman_kerja){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/delete_pengalaman_kerja/'.$id_pengalaman_kerja,
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

        return redirect()->to('http://localhost:8010/getall_pengalaman_kerja');


    }
}

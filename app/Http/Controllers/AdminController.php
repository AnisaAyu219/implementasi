<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getall_admin(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/getall_admin',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=z5sPmbpvjm86HCUYTAKKWSOMWnraNkRYxEhThDQr'
        ),
        ));

        $response = curl_exec($curl);
        $result = json_decode($response);
        $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if($response_code == 200){
            //Lalu di kirim ke view jurnal
            return view('p_tabeladmin', compact('result'));
          }else{
            print "error nisa, coba cek lagi. Semangat :D";
            }

    }


}

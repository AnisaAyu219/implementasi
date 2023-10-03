<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function get_profile_mahasiswa(Request $request, $nim){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/get_profile_mahasiswa/'.$nim,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=cbJwsiLyUpxTwmGV1ecu3EQVBnbQaL3KivYSFr70'
        ),
        ));

        $response = curl_exec($curl);
        $data = json_decode($response, true);
        $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    if($response_code == 200){
      //Lalu dikirim ke view profile
      return view('profilemahasiswa', ['data' => $data ]);
    }else{
      //Jika gagal di arahkan ke logout
    //   return redirect()->to('http://localhost:8010/logout');
    }

    }


    public function get_profile_dosen(Request $request, $id_dosen){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/get_profile_dosen/'.$id_dosen,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=cbJwsiLyUpxTwmGV1ecu3EQVBnbQaL3KivYSFr70'
        ),
        ));

        $response = curl_exec($curl);
        $result = json_decode($response, true);
        $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    // if($response_code == 200){
    //   Lalu dikirim ke view profile
    //   return view('profilemahasiswa', ['data' => $data ]);
    // }else{
    //   Jika gagal di arahkan ke logout
    //   return redirect()->to('http://localhost:8010/logout');
    // }
    }

    public function get_profile_admin(Request $request, $id_admin){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/get_profile_admin/'.$id_admin,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=cbJwsiLyUpxTwmGV1ecu3EQVBnbQaL3KivYSFr70'
        ),
        ));

        $response = curl_exec($curl);
        $result = json_decode($response, true);
        $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        echo "<pre>";
        print_r($result);
        echo "</pre>";

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KomentarController extends Controller
{
    public function input_komentar(Request $request){

        $id_karya = $request->input('id_karya');
        $isi = $request->input('isi');
        $nim = $request->input('nim');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/input_komentar',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('id_karya'=>$id_karya, 'isi'=>$isi, 'nim'=>$nim),
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

    public function getall_komentar(Request $request){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/getall_komentar',
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

        curl_close($curl);
        // echo $response;

        if($response_code == 200){
            //Lalu di kirim ke view jurnal
            return view('p_tabelkomentar', compact('result'));
          }else{
            //Jika gagal di arahkan ke logout
            echo "<pre>";
            print_r($result);
            echo "</pre>";
            }

    }

    public function delete_komentar($id_komentar){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/delete_komentar/'.$id_komentar,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
              'Accept: application/json'
            ),
          ));

          $response = curl_exec($curl);

          curl_close($curl);
          echo $response;

          return redirect()->to('http://localhost:8010/getall_komentar');

    }


    public function komentar_karya(Request $request, $id_karya){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/komentar_karya/'.$id_karya,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=GMghIxUQtUTHqhOccptjU7QY9GEPEXf5n9wZtvVr'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $result = json_decode($response);

        echo "<pre>";
            print_r($result);
            echo "</pre>";
            }
}

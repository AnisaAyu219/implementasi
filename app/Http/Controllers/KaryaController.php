<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CURLFILE;
use App\Http\Requests\ImageStoreRequest;
use Illuminate\Support\Facades\Storage;



class KaryaController extends Controller
{
    public function input_karya(Request $request){

        $deskripsi = $request->input('deskripsi');
        $dokumentasi = $request->file('dokumentasi');
        $link_karya = $request->input('link_karya');
        $nama = $request->input('nama');
        $bidang = $request->input('bidang');
        $nim = $request->input('nim');


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/input_karya',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('deskripsi'=>$deskripsi,'dokumentasi' => new CURLFILE($dokumentasi->path()),'link_karya'=>$link_karya,'nama'=>$nama,'bidang'=>$bidang,'nim'=>$nim),
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

    public function getall_karya(Request $request)
{

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/getall_karya',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json'
        ),
        ));

        $response = curl_exec($curl);
        $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result = json_decode($response);
        curl_close($curl);

        if($response_code == 200){
            //Lalu di kirim ke view jurnal
            return view('tablekarya', compact('result'));
          }else{
            //Jika gagal di arahkan ke logout
            return redirect()->to('http://localhost:8010/logout');
            }


        }


    public function delete_karya($id_karya){


            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/delete_karya/'.$id_karya,
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

            return redirect()->to('http://localhost:8010/getall_karya');

        }

    public function get_edit($id_karya){


            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/get_edit/'.$id_karya,
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
            $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $result = json_decode($response);
            curl_close($curl);

            if($response_code == 200){
                //Lalu di kirim ke view jurnal
                return view('editkarya', compact('result'));
              }else{
                //Jika gagal di arahkan ke logout
                return redirect()->to('http://localhost:8010/logout');
                }
        }

      public function update_karya(Request $request, $id_karya)
{
      $deskripsi = $request->input('deskripsi');
      $dokumentasi = $request->file('dokumentasi');
      $link_karya = $request->input('link_karya');
      $nama = $request->input('nama');
      $bidang = $request->input('bidang');
      $nim = $request->input('nim');

      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/update_karya/'.$id_karya,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('deskripsi'=>$deskripsi,'dokumentasi' => new CURLFILE($dokumentasi->path()),'link_karya'=>$link_karya,'nama'=>$nama,'bidang'=>$bidang,'nim'=>$nim),
        CURLOPT_HTTPHEADER => array(
          'Accept: application/json',
          'Cookie: laravel_session=GMghIxUQtUTHqhOccptjU7QY9GEPEXf5n9wZtvVr'
        ),
      ));

      $response = curl_exec($curl);
    $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $result = json_decode($response);
    curl_close($curl);

    if($response_code == 200){
        //Lalu di kirim ke view jurnal
        return redirect()->to('http://localhost:8010/getall_karya');
      }else{
        //Jika gagal di arahkan ke logout
        return redirect()->to('http://localhost:8010/logout');
        }
}

}

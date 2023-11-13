<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CURLFILE;
use App\Http\Requests\ImageStoreRequest;
use Illuminate\Support\Facades\Storage;

class KaryaController extends Controller
{
    public function input_karya(Request $request){
        $nama_karya = $request->input('nama_karya');
        $tanggal_pembuatan = $request->input('tanggal_pembuatan');
        $jenis_keahlian = $request->input('jenis_keahlian');
        $link_karya = $request->input('link_karya');
        $deskripsi = $request->input('deskripsi');
        $dosen_pembimbing = $request->input('dosen_pembimbing');
        $dokumentasi = $request->file('dokumentasi');
        $id_pengubah = $request->input('id_pengubah');
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
            CURLOPT_POSTFIELDS => array('nama_karya'=>$nama_karya, 'tanggal_pembuatan'=>$tanggal_pembuatan, 'jenis_keahlian'=>$jenis_keahlian, 'link_karya'=>$link_karya, 'deskripsi'=>$deskripsi, 'dosen_pembimbing'=>$dosen_pembimbing,'dokumentasi' => new CURLFILE($dokumentasi->path()),'id_pengubah'=>$id_pengubah,'nim'=>$nim),
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
            return view('p_tablekarya', compact('result'));
          }else{
            //Jika gagal di arahkan ke logout
            // return redirect()->to('http://localhost:8010/logout');
            print "error nisa, coba cek lagi. Semangat :D";
            }


        }

    public function delete_karya($id_karya)
    {

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

    public function get_detail_karya($id_karya){


            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/get_detail_karya/'.$id_karya,
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
                return view('p_editkarya', compact('result'));
              }else{
                //Jika gagal di arahkan ke logout
                // return redirect()->to('http://localhost:8010/logout');
                print "error nisa, coba cek lagi. Semangat :D";
                }
        }

    public function update_karya(Request $request, $id_karya)
    {
        $nama_karya = $request->input('nama_karya');
        $tanggal_pembuatan = $request->input('tanggal_pembuatan');
        $jenis_keahlian = $request->input('jenis_keahlian');
        $link_karya = $request->input('link_karya');
        $deskripsi = $request->input('deskripsi');
        $dosen_pembimbing = $request->input('dosen_pembimbing');
        $dokumentasi = $request->file('dokumentasi');
        $id_pengubah = $request->input('id_pengubah');
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
        CURLOPT_POSTFIELDS => array('nama_karya'=>$nama_karya, 'tanggal_pembuatan'=>$tanggal_pembuatan, 'jenis_keahlian'=>$jenis_keahlian, 'link_karya'=>$link_karya, 'deskripsi'=>$deskripsi, 'dosen_pembimbing'=>$dosen_pembimbing,'dokumentasi' => new CURLFILE($dokumentasi->path()),'id_pengubah'=>$id_pengubah,'nim'=>$nim),
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
        // return redirect()->to('http://localhost:8010/logout');
        print "error nisa, coba cek lagi. Semangat :D";
        }
}

public function get_search_karya($nama_karya){

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost:8000/api/get_search_karya/'.$nama_karya,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'GET',
      CURLOPT_HTTPHEADER => array(
        'Accept: application/json',
        'Cookie: laravel_session=EOCXnWe9jUREOPCT2MGoslSZTZj0kcdH9TlAErax'
      ),
    ));

    $response = curl_exec($curl);
    $result = json_decode($response);

    curl_close($curl);
    echo $response;
    echo "<pre>";
            print_r($result);
            echo "</pre>";

    }


    public function get_karya_mhs($nim){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:8000/api/get_karya_mhs/'.$nim,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=EOCXnWe9jUREOPCT2MGoslSZTZj0kcdH9TlAErax'
          ),
        ));

        $response = curl_exec($curl);
        $result = json_decode($response);

        curl_close($curl);
        echo $response;
        echo "<pre>";
                print_r($result);
                echo "</pre>";

        }

}

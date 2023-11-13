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
        $nama_pelatihan = $request->input('nama_pelatihan');
        $total_waktu = $request->input('total_waktu');
        $institusi_pelatihan = $request->input('institusi_pelatihan');
        $nama_pembimbing = $request->input('nama_pembimbing');
        $deskripsi = $request->input('deskripsi');
        $sertifikat_peserta = $request->file('sertifikat_peserta');
        $sertifikat_kompetensi = $request->file('sertifikat_kompetensi');
        $tahun_pelaksanaan = $request->input('tahun_pelaksanaan');
        $id_pengubah = $request->input('id_pengubah');
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
            CURLOPT_POSTFIELDS => array('nama_pelatihan'=>$nama_pelatihan, 'total_waktu'=>$total_waktu, 'institusi_pelatihan'=>$institusi_pelatihan, 'nama_pembimbing'=>$nama_pembimbing, 'deskripsi'=>$deskripsi, 'sertifikat_peserta' => new CURLFILE($sertifikat_peserta->path()), 'sertifikat_kompetensi' => new CURLFILE($sertifikat_kompetensi->path()), 'tahun_pelaksanaan'=>$tahun_pelaksanaan, 'id_pengubah'=>$id_pengubah,'nim'=>$nim),
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
            return view('p_tabelpelatihan', compact('result'));
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

    public function get_detail_pelatihan($id_pelatihan){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/get_detail_pelatihan/'.$id_pelatihan,
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
            return view('p_editpelatihan', compact('result'));
          }else{
            //Jika gagal di arahkan ke logout
            // return redirect()->to('http://localhost:8010/logout');
            print "error nisa, coba cek lagi. Semangat :D";
            }
    }

    public function get_pelatihan_mhs($nim){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:8000/api/get_pelatihan_mhs/'.$nim,
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


public function get_search_pelatihan($nama_pelatihan){

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost:8000/api/get_search_pelatihan/'.$nama_pelatihan,
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

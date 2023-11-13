<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CURLFILE;

class PrestasiController extends Controller
{
    public function input_prestasi(Request $request)
    {
        $program_studi = $request->input('program_studi');
        $nama_prestasi = $request->input('nama_prestasi');
        $jenis_keahlian = $request->input('jenis_keahlian');
        $tingkat_prestasi = $request->input('tingkat_prestasi');
        $tahun_prestasi = $request->input('tahun_prestasi');
        $tanggal_pencapaian = $request->input('tanggal_pencapaian');
        $penyelenggara = $request->input('penyelenggara');
        $jenis_pencapaian = $request->input('jenis_pencapaian');
        $lokasi_penyelenggara = $request->input('lokasi_penyelenggara');
        $dokumentasi_prestasi = $request->file('dokumentasi_prestasi');
        $jenis_aktifitas_mahasiswa = $request->input('jenis_aktifitas_mahasiswa');
        $dosen_pembimbing = $request->input('dosen_pembimbing');
        $no_surat_tugas = $request->input('no_surat_tugas');
        $deskripsi = $request->input('deskripsi');
        $keterangan = $request->input('keterangan');
        $id_pengubah = $request->input('id_pengubah');
        $nim = $request->input('nim');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/input_prestasi',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('program_studi'=>$program_studi, 'nama_prestasi'=>$nama_prestasi, 'jenis_keahlian'=>$jenis_keahlian, 'tingkat_prestasi'=>$tingkat_prestasi, 'tahun_prestasi'=>$tahun_prestasi, 'tanggal_pencapaian'=>$tanggal_pencapaian, 'penyelenggara'=>$penyelenggara,'lokasi_penyelenggara'=>$lokasi_penyelenggara, 'jenis_pencapaian'=>$jenis_pencapaian, 'dokumentasi_prestasi' => new CURLFILE($dokumentasi_prestasi->path()),'jenis_aktifitas_mahasiswa'=>$jenis_aktifitas_mahasiswa, 'dosen_pembimbing'=>$dosen_pembimbing, 'no_surat_tugas'=>$no_surat_tugas, 'deskripsi'=>$deskripsi, 'keterangan'=>$keterangan, 'id_pengubah'=>$id_pengubah,'nim'=>$nim),
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


    public function getall_prestasi(Request $request)
{

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/getall_prestasi',
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
            return view('p_tabelprestasi', compact('result'));
          }else{
            //Jika gagal di arahkan ke logout
            // return redirect()->to('http://localhost:8010/logout');
            print "error nisa, coba cek lagi. Semangat :D";
            }


        }

    public function delete_prestasi($id_prestasi)
    {

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/delete_prestasi/'.$id_prestasi,
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

            return redirect()->to('http://localhost:8010/getall_prestasi');

        }

    public function get_detail_prestasi($id_prestasi){


            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/get_detail_prestasi/'.$id_prestasi,
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
                return view('p_editprestasi', compact('result'));
              }else{
                //Jika gagal di arahkan ke logout
                // return redirect()->to('http://localhost:8010/logout');
                print "error nisa, coba cek lagi. Semangat :D";
                }
        }

public function get_search_prestasi($nama_prestasi){

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'http://localhost:8000/api/get_search_prestasi/'.$nama_prestasi,
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


    public function get_prestasi_mhs($nim){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://localhost:8000/api/get_prestasi_mhs/'.$nim,
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

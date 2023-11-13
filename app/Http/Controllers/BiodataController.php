<?php

namespace App\Http\Controllers;
use CURLFILE;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function input_biodata(Request $request)
    {
        $nama_lengkap = $request->input('nama_lengkap');
        $program_studi = $request->input('program_studi');
        $semester = $request->input('semester');
        $jenis_keahlian = $request->input('jenis_keahlian');
        $no_telp = $request->input('no_telp');
        $email = $request->input('email');
        $alamat = $request->input('alamat');
        $tempat_lahir = $request->input('tempat_lahir');
        $tanggal_lahir = $request->input('tanggal_lahir');
        $foto_profile = $request->file('foto_profile');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $keahlian = $request->input('keahlian');
        $profile_singkat = $request->input('profile_singkat');
        $id_pengubah = $request->input('id_pengubah');
        $nim = $request->input('nim');

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/input_biodata',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('nama_lengkap'=>$nama_lengkap, 'program_studi'=>$program_studi, 'semester'=>$semester, 'jenis_kelamin'=>$jenis_keahlian, 'no_telp'=>$no_telp, 'email'=>$email, 'alamat'=>$alamat, 'tempat_lahir'=>$tempat_lahir, 'tanggal_lahir'=>$tanggal_lahir, 'profile_singkat'=>$profile_singkat, 'keahlian'=>$keahlian, 'jenis_kelamin'=>$jenis_kelamin, 'foto_profile' => new CURLFILE($foto_profile->path()),'id_pengubah'=>$id_pengubah,'nim'=>$nim),
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


    public function get_detail_biodata($id_biodata)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/get_detail_biodata/'.$id_biodata,
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
                return view('p_editbiodata', compact('result'));
              }else{
                //Jika gagal di arahkan ke logout
                // return redirect()->to('http://localhost:8010/logout');
                print "error nisa, coba cek lagi. Semangat :D";
                }
    }


        public function getall_biodata(Request $request)
        {

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/getall_biodata',
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
                    return view('p_tabelbiodata', compact('result'));
                  }else{
                    //Jika gagal di arahkan ke logout
                    // return redirect()->to('http://localhost:8010/logout');
                    print "error nisa, coba cek lagi. Semangat :D";
                    }
                }

//Fuction ini belum selesai
    public function update_biodata(Request $request, $id_biodata)
{
    $nama_lengkap = $request->input('nama_karya');
    $program_studi = $request->input('program_studi');
    $semester = $request->input('semester');
    $jenis_kelamin = $request->input('jenis_kelamin');
    $no_telp = $request->input('no_telp');
    $email = $request->input('email');
    $alamat = $request->input('alamat');
    $tempat_lahir = $request->input('tempat_lahir');
    $tanggal_lahir = $request->input('tanggal_lahir');
    $profile_singkat = $request->input('profile_singkat');
    $keahlian = $request->input('keahlian');
    $foto_profile = $request->file('foto_profile'); // Ambil foto profil baru
    $id_pengubah = $request->input('id_pengubah');
    $nim = $request->input('nim');

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/update_biodata/'.$id_biodata,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
            'nama_lengkap' => $nama_lengkap,
            'program_studi' => $program_studi,
            'semester' => $semester,
            'jenis_kelamin' => $jenis_kelamin,
            'no_telp' => $no_telp,
            'email' => $email,
            'alamat' => $alamat,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'profile_singkat' => $profile_singkat,
            'keahlian' => $keahlian,
            'foto_profile' => ($foto_profile) ? new CURLFILE($foto_profile->path()) : null, // Upload foto profil baru jika ada
            'id_pengubah' => $id_pengubah,
            'nim' => $nim,
        ),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=GMghIxUQtUTHqhOccptjU7QY9GEPEXf5n9wZtvVr'
        ),
    ));

    $response = curl_exec($curl);
    $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $result = json_decode($response);
    curl_close($curl);

    if ($response_code == 200) {
        // Lalu di kirim ke view jurnal
        return redirect()->to('http://localhost:8010/getall_karya');
    } else {
      echo "<pre>";
            print_r($result);
            echo "</pre>";

          curl_close($curl);
          echo $response;
    }
}

public function delete_biodata($id_biodata)
    {

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://localhost:8000/api/delete_karya/'.$id_biodata,
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
          $result = json_decode($response);

          echo "<pre>";
            print_r($result);
            echo "</pre>";

          curl_close($curl);
          echo $response;

        }


    }


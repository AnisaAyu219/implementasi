<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
        public function login_mhs(Request $request)
        {
            $nim = $request->input('nim');
            $password = $request->input('password');
        
            $curl = curl_init();
        
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://localhost:8000/api/login_mhs', // Tambahkan http://
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('nim' => $nim, 'password' => $password),
                CURLOPT_HTTPHEADER => array(
                    'Accept: application/json',
                ),
            ));
        
            $response = curl_exec($curl);
            $response_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
            curl_close($curl);
            $result = json_decode($response);
            
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
        
            if ($response_code == 200) {
                return view('welcome'); 
            } else {
                return view('login'); 
            }
        }
     
    
}

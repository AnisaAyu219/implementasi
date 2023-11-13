<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register_admin(Request $request)
    {
        $username = $request->input('username');
        $nama = $request->input('nama');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/register_admin',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('username'=>$username, 'nama'=>$nama, 'password'=>$password, 'password_confirmation'=>$password_confirmation),
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Cookie: laravel_session=1s0ntCKs6nsuXaDihfe8jCC6W9JefJnQqnBoszw2'
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    public function login_user(Request $request)
    {

        $username = $request->input('username');
        $password = $request->input('password');
        $user_type = $request->input('user_type');

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:8000/api/login_user',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('username' => $username, 'password' => $password, 'user_type'=> $user_type),
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
}

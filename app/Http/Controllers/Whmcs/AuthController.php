<?php

namespace App\Http\Controllers\Whmcs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;

use App\User;

use App\Http\Resources\Whmcs\User as UserRes;




class AuthController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $http = new Client();

        $login = $http->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'ValidateLogin',
                'email' => $request->email,
                'password2' => $request->password,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);
        $login = json_decode($login->getBody()->getContents());

        if($login->result === 'error') {
            return response(['status' => 'error', 'message' => 'Email and password credentials did not match.']);
        }


        $response = $http->post(url('oauth/token'), [
            'form_params' => [
                'grant_type' => 'client_credentials',
                'client_id' => '3',
                'client_secret' => '58GR2xIRJXHryWCvYfIQ7vlyOVYYUCYcviGdeavR',
                'scope' => '',
            ],
        ]);

        $details = $http->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'GetClientsDetails',
                'clientid' => $login->userid,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);

        return response(['status' => 'success', 'auth' => json_decode((string) $response->getBody(), true), 'user' => new UserRes(json_decode($details->getBody()->getContents()))]);















    }
}

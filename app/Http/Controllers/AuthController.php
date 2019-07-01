<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;

use App\User;

use App\Http\Resources\User as UserRes;




class AuthController extends Controller
{
    public function login(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if(!$user) {
            return response(['status' => 'error', 'message' => 'User not found']);
        }

        if(Hash::check($request->password, $user->password)) {
            $http = new Client;
            $response = $http->post(url('oauth/token'), [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => '2',
                    'client_secret' => 'Y1xLXdYra28waOsc0e122V6ooF79Xc5CXJ2nEP02',
                    'username' => $request->email,
                    'password' => $request->password,
                    'scope' => '',
                ],
            ]);
            return response(['status' => 'success', 'auth' => json_decode((string) $response->getBody(), true), 'user' => new UserRes($user)]);
        } else {
            return response(['status' => 'error', 'message' => 'Email and password credentials did not match.']);
        }

    }
}

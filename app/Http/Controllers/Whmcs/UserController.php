<?php

namespace App\Http\Controllers\Whmcs;

use App\Http\Controllers\Controller;
use App\Http\Resources\Whmcs\Client;
use App\Http\Resources\Whmcs\Domain;
use App\Http\Resources\Whmcs\Order;

use GuzzleHttp\Client as Guzzle;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        //
    }

    public function users($id)
    {
        $client = new Guzzle();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'getpartnerclients',
                'partnerid' => $id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);
        return Client::collection(collect(json_decode($res->getBody()->getContents())->partnerclients));
    }

    public function domains($id)
    {
        $client = new Guzzle();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'GetClientsDomains',
                'clientid' => $id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);
        return Domain::collection(collect(json_decode($res->getBody()->getContents())->domains->domain));

    }

    public function products($id)
    {
        $client = new Guzzle();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'GetClientsProducts',
                'clientid' => $id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);

        return Order::collection(collect(json_decode($res->getBody()->getContents())->products->product));
    }


}

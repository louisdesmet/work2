<?php

namespace App\Http\Resources\Whmcs;

use GuzzleHttp\Client as Guzzle;
use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->firstname,
            'last_name' => $this->lastname,
            'name' => $this->firstname . ' ' . $this->lastname,
            'email' => $this->email,
            'company' => $this->companyname,
            'address' => $this->address1,
            'state' => $this->state,
            'city' => $this->city,
            'postal_code' => $this->postcode,
            'country' => $this->country,
            'phonenumber' => $this->phonenumber,
            'users' => $this->users(),
            //'enduser' => (count($this->resellers) ? 0 : 1)
        ];
    }

    public function users() {
        $client = new Guzzle();
        $res = $client->request('POST', 'http://cloudhighwaytest.nomeo.be/includes/api.php', [
            'form_params' => [
                'action' => 'getpartnerclients',
                'partnerid' => $this->id,
                'username' => 'api',
                'password' => '3bc94f7f330955b6a9f776c10cc313e4',
                'responsetype' =>  'json'
            ]
        ]);





        return Client::collection(collect(json_decode($res->getBody()->getContents())->partnerclients));
    }
}

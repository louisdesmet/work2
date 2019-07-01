<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Resources\Product as ProductRes;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return ProductRes::collection(Product::with('category', 'vendor', 'prices', 'productOptions', 'productOptions.prices')->get());
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }

    public function tenantAvailability($tenant) {
        $client = new Client([
            'headers' => [
                'X-Login' => 'cloudhighway',
                'X-Passkey' => md5('dreCraf6E&' . date("Y") . date("m") . date("d")),
                'Accept' => 'application/json',
            ]
        ]);
        return $client->request('GET', 'http://servicestest2.nomeo.be/office/domain/available/' . $tenant . '.onmicrosoft.com')->getBody()->getContents();
    }

    public function findTenant($tenant) {
        $client = new Client([
            'headers' => [
                'X-Login' => 'cloudhighway',
                'X-Passkey' => md5('dreCraf6E&' . date("Y") . date("m") . date("d")),
                'Accept' => 'application/json',
            ]
        ]);
        return $client->request('GET', 'http://servicestest2.nomeo.be/office/customer/tenantidfromdomain/test/' . $tenant . '.onmicrosoft.com')->getBody()->getContents();
        //return $client->request('GET', 'https://services.nomeo.be/office/domain/iscsp/production/' . $tenant . '.onmicrosoft.com')->getBody()->getContents();
    }

    public function getTenant($tenant) {
        $client = new Client([
            'headers' => [
                'X-Login' => 'cloudhighway',
                'X-Passkey' => md5('dreCraf6E&' . date("Y") . date("m") . date("d")),
                'Accept' => 'application/json',
            ]
        ]);
        return $client->request('GET', 'http://servicestest2.nomeo.be/office/customer/readAll/production/' . $tenant)->getBody()->getContents();
    }

}

<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\ProductKey;
use App\ProductOption;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        foreach($request->all()['items'] as $items) {
            $order = new Order;
            $order->reference = (isset($items['reference'])) ? $items['reference'] : null;
            $order->email = (isset($items['options']['email'])) ? $items['options']['email'] : null;
            if(in_array($items['product_id'], [16, 17, 18, 19, 20, 21])) {
                $order->amount = (isset($items['options']['userAmount'])) ? $items['options']['userAmount'] : null;
                $order->duration = (isset($items['options']['duration'])) ? $items['options']['duration'] : null;
            }

            $order->billing = (isset($items['options']['billing'])) ? $items['options']['billing'] : null;
            $order->user()->associate($items['user_id']);
            $order->product()->associate($items['product_id']);
            if(in_array($items['product_id'], [1, 2, 3, 4, 5, 6])) {
                $key = ProductKey::where('product_id', $items['product_id'])->where('used', 0)->where('language', $items['options']['language'])->first();
                $key->used = 1;
                $key->save();
                $order->productKey()->associate($key->id);
            }
            if(in_array($items['product_id'], [13, 14, 15])) {
                $key = ProductKey::where('product_id', $items['product_id'])->where('used', 0)->where('users', $items['options']['userAmount'])->first();
                $key->used = 1;
                $key->save();
                $order->productKey()->associate($key->id);
            }
            if(in_array($items['product_id'], [22, 23])) {
                $key = ProductKey::where('product_id', $items['product_id'])->where('used', 0)->where('duration', $items['options']['duration'])->where('users', $items['options']['userAmount'])->first();
                $key->used = 1;
                $key->save();
                $order->productKey()->associate($key->id);
            }
            $order->domain = (isset($items['microsoftDomain'])) ? $items['microsoftDomain'] : null;
            $order->tenant = (isset($items['tenant'])) ? $items['tenant'] : null;
            $order->save();
            if(isset($items['office365options'])) {

                $result = new \stdClass();

                $subscriptionList = array();
                foreach ($items['office365options'] as $index => $option) {
                    $options = new \stdClass();
                    $options->Quantity = $option["amount"];
                    $options->SubscriptionId = "";
                    $options->OfferId = $option["code"];
                    $options->FriendlyName = $option["msname"];
                    $options->TenantId = $items['tenant'];

                    $subscriptionList[] = $options;

                    $detail = new OrderDetail;
                    $detail->amount = $option["amount"];
                    $detail->order()->associate($order->id);
                    $detail->productOption()->associate(ProductOption::where('name', $index)->where('product_id', $items['product_id'])->first()->id);
                    $detail->save();
                }

                $data = new \stdClass();
                $data->TenantId = $items['tenant'];
                $data->Subscriptions = $subscriptionList;

                if($items['tenant'] == '') {
                    $url = 'createtenantwithsubscription/test';
                    $user = User::find($items['user_id']);
                    $customer = new \stdClass();
                    $customer->FirstName = $user->first_name;
                    $customer->LastName = $user->last_name;
                    $customer->CompanyName = ($user->company === "") ? $user->first_name . $user->first_name : $user->company;
                    $customer->PostalCode = $user->postal_code;
                    $customer->City = $user->city;
                    $customer->StreetAddress = $user->address;
                    $customer->CountryCode = 'BE'; //$user->country;
                    $customer->LanguageCode = 'nl';
                    $customer->State = 'NA'; //$user->state;
                    $customer->PhoneNumber = $user->phonenumber;
                    $customer->Email = $user->email;
                    $customer->Domain = $items['microsoftDomain'] . '.onmicrosoft.com';
                    $customer->Culture = 'nl-be';
                    $result->Customer = $customer;
                    $result->Order = $data;
                } else {
                    $url = 'subscriptions/update/test';
                    $result = $data;
                }

//                $client = new Client();
//                return  $client->request('POST', 'http://servicestest2.nomeo.be/office/customer/' . $url, [
//                    'headers' => [
//                        'X-Login' => 'cloudhighway',
//                        'X-Passkey' => md5('dreCraf6E&' . date("Y") . date("m") . date("d")),
//                        'Accept' => 'text/json',
//                        'Content-Type' => 'application/json'
//                    ],
//                    'json' => $result
//                ]);
            }
            if(isset($items['cloudServerOptions'])) {
                foreach ($items['cloudServerOptions'] as $index => $option) {
                    $detail = new OrderDetail;
                    if($index === 'backup') {
                        $detail->amount = ($option["data"] === 1 ? 'yes' : 'no');
                    } else {
                        $detail->amount = $option["data"];
                    }
                    $detail->order()->associate($order->id);
                    $detail->productOption()->associate(ProductOption::where('varname', $index)->where('product_id', $items['product_id'])->first()->id);
                    $detail->save();
                }
            }
        }
    }

    public function show(Order $order)
    {
        //
    }

    public function edit(Order $order)
    {
        //
    }

    public function update(Request $request, Order $order)
    {
        //
    }

    public function destroy(Order $order)
    {
        //
    }
}

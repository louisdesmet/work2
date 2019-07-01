<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Http\Resources\Domain as DomainRes;
use App\Order;
use App\Http\Resources\Order as OrderRes;
use App\User;
use App\Http\Resources\User as UserRes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        //return new UserRes(User::all());
    }

    public function store(Request $request)
    {
        $data = $request->all()['items'];
        $user = new User;
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->name = $data['first_name'] . ' ' .  $data['last_name'];
        $user->email = $data['email'];
        if(isset($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        $user->email = $data['email'];
        $user->company = $data['company'];
        $user->address = $data['address'];
        $user->city = $data['city'];
        $user->postal_code = $data['postal_code'];
        $user->country = $data['country'];
        $user->phonenumber = $data['phonenumber'];
        $user->save();
        if($data['enduser'] == 0) {
            $reseller = User::find($data['user']['user']['id']);
            $reseller->users()->attach($user->id);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = $request->all()['items'];
        $user = User::find($id);
        $user->first_name = $data['first_name'];
        $user->last_name = $data['last_name'];
        $user->name = $data['first_name'] . ' ' . $data['last_name'];
        $user->email = $data['email'];
        if(isset($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        $user->email = $data['email'];
        $user->company = $data['company'];
        $user->address = $data['address'];
        $user->city = $data['city'];
        $user->postal_code = $data['postal_code'];
        $user->country = $data['country'];
        $user->phonenumber = $data['phonenumber'];
        $user->save();
        if ($data['enduser'] == 1 && count($user->resellers)) {
            $reseller = User::find($request->all()['user']);
            $reseller->users()->detach($id);
        }
    }


    public function destroy($id)
    {
        //
    }

    public function users($id)
    {
        return UserRes::collection(User::with('users', 'users.resellers')->where('id', $id)->get());
    }

    public function domains($id)
    {
        return DomainRes::collection(Domain::where('user_id', $id)->get());
    }

    public function products($id)
    {
        return OrderRes::collection(Order::with('product', 'productKey', 'orderDetails', 'orderDetails.productOption')->where('user_id', $id)->get());
    }

}

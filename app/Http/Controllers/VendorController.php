<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vendor;
use App\Http\Resources\Vendor as VendorRes;


class VendorController extends Controller
{

    public function index()
    {
        return VendorRes::collection(Vendor::all());
    }
}

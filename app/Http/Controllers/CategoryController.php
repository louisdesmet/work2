<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\Category as CategoryRes;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return CategoryRes::collection(Category::all());
    }
}

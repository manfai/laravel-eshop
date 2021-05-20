<?php

namespace DevinGray\CustomAuth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CartController extends Controller
{

    public function create()
    {
        dd('create form');
    }

    public function store(Request $request)
    {
        dd($request);
    }

}

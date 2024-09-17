<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    public function index(Request $request)
    {
    }

    public function store(Request $request)
    {
        dd($request->file('logo'));
    }
}

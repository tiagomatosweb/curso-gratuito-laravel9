<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business::create([
            'name' => 'Jon Snow',
            'email' => 'jon@snow.com',
            'address' => 'Rua a quadra b'
        ]);
        dd($business);
    }
}

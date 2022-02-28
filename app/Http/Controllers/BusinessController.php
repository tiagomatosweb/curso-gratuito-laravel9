<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        \DB::connection()->enableQueryLog();
        $business = Business::where('name', 'LIKE', '%jon%')->get();
        $query = \DB::getQueryLog();
        dd($query);
        // $business->delete();
        // dd($business);
    }
}

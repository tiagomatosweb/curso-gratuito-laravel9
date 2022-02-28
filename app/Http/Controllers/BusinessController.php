<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        // $business = Business::find(10)->update([
        //     'name' => 'Jon',
        //     'email' => 'sdsd@sdsd.com'
        // ]);
        //
        // $business = Business::find(10);
        // $business->name = 'Tiago';
        // $business->email = 'tiago@laravel9.com';
        // $business->address = 'Quadra c rua B';
        // $business->save();

        $input = [
            'name' => 'Jon 2',
            'email' => 'sdsd@sdsd.com2',
        ];
        $business = Business::find(10);
        $business->fill($input);
        $business->save();
        dd($business);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::paginate();
        return view('businesses', compact('businesses'));
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'logo' => 'file',
        ]);
        $file = $input['logo'];
        $path = $file->store('logos', 'public');

        $input['logo'] = $path;

        Business::create($input);

        return Redirect::route('businesses.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Provider;

class HomeController extends Controller
{
    public function index(Provider $user_name)
    {
        $provider = $user_name;
        $locations = $provider->locations()->latest()->paginate();
        return view('home', compact('locations'));
    }
}

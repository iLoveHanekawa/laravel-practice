<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getusers() {
        $request = Http::get('http://localhost:4000/rappers');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

class RapperController extends Controller
{
    public function getrappers() {
        $response = Http::get('http://localhost:4000/rappers');
        if($response->ok()) {
            return json_decode($response->body());
        }
        return [];
    }
}

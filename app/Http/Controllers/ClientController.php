<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function signup(Request $request): void
    {
        $validated = $request->validate([
            'fullname' => "required|string|min:5",
            'sexe' => "required|string",
            'etablissement' => "required|string",
            'email' => "required|email|unique:clients",
            'telephone' => "required|string",
            'nbre-participants' => "required|integer",
        ]);

        Client::create($validated);
    }
}

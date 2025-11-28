<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function signup(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'fullname' => "required|string|min:5",
            'sexe' => "required|string",
            'telephone' => "required|string",
        ]);

        Client::create($validated);

        return response()->json();
    }
}

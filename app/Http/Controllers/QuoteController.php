<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apiKey = "CRM+jZOnOLlFuzm5BS4v3w==UDHitxA5JrtGEvGS";
        $params = ['category' => 'love'];

        $response = Http::withHeader('X-Api-Key', $apiKey)
            ->get('https://api.api-ninjas.com/v1/quotes', $params);

        $data = $response->json();

        return Inertia::render('Quote', [
            'data' => $data,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Todo/Index', [
            'list' => ['DATA'],
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function quote()
    {
        $apiKey = "CRM+jZOnOLlFuzm5BS4v3w==UDHitxA5JrtGEvGS";
        $params = ['category' => 'love'];

        $response = Http::withHeader('X-Api-Key', $apiKey)
            ->get('https://api.api-ninjas.com/v1/quotes', $params);

        $data = $response->json();

        return Inertia::render('Todo/Create', [
            'data' => $data,
        ]);
    }
}

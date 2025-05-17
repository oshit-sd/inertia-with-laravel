<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Home');
    }

    /**
     * Display a listing of the resource.
     */
    public function features()
    {
        return Inertia::render('Features');
    }

    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        return Inertia::render('Blog');
    }

    /**
     * Display a listing of the resource.
     */
    public function contact()
    {
        return Inertia::render('Contact');
    }
}

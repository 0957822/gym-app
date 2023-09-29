<?php

namespace App\Http\Controllers\PagesController;

use Illuminate\Http\Request;

/** @noinspection PhpUnused */class PagesController extends Controller
{
    public function index()
    {
        // Controller logic here
        return view('pages.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMoviesController extends Controller
{
    public function index() {
        return view('admin.peliculas.index');
    }
}

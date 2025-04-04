<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        // Fetch all files from the database
        $archivos = [];
        // Return the view with the files data
        return view('admin.archivos.index', compact('archivos', 'search'));
    }
}

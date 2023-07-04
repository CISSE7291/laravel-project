<?php

namespace App\Http\Controllers;

// App/Http/Controllers/ApprenantController.php

use App\Models\Apprenant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprenantController extends Controller
{
    public function index()
    {
        $apprenants = Apprenant::all();
        return view('index', compact('apprenants'));
    }

    public function create()
    {
        return view('apprenants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:apprenants,email',
            'telephone' => 'required',
        ]);

        Apprenant::create($request->all());

        return redirect('/apprenants')->with('success', 'Apprenant.e enregistré.e avec succès !');
    }
}

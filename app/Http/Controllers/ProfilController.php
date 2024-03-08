<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer tous les profils
        $profils = Profil::all();
        return view('profils.index', compact('profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Afficher le formulaire pour créer un nouveau profil
        return view('profils.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valider les données
        $request->validate([
            'nom' => 'required|unique:profils',
            // Vous pouvez ajouter d'autres règles de validation si nécessaire
        ]);

        // Créer un nouveau profil
        Profil::create($request->all());

        // Rediriger avec un message
        return redirect()->route('profils.index')
            ->with('success', 'Profil créé avec succès.');
    }

    // Ajoutez les autres méthodes pour gérer les opérations CRUD

}

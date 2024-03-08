<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pointage;

class PointageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer tous les pointages
        $pointages = Pointage::all();
        return view('pointages.index', compact('pointages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Afficher le formulaire pour créer un nouveau pointage
        return view('pointages.create');
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
            'user_id' => 'required',
            'heure_pointage' => 'required|date',
            // Vous pouvez ajouter d'autres règles de validation si nécessaire
        ]);

        // Créer un nouveau pointage
        Pointage::create($request->all());

        // Rediriger avec un message
        return redirect()->route('pointages.index')
            ->with('success', 'Pointage créé avec succès.');
    }

    // Ajoutez les autres méthodes pour gérer les opérations CRUD

}

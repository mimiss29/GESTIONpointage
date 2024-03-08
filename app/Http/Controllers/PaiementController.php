<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paiement;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer tous les paiements
        $paiements = Paiement::all();
        return view('paiements.index', compact('paiements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Afficher le formulaire pour créer un nouveau paiement
        return view('paiements.create');
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
            'montant' => 'required|numeric',
            'date_paiement' => 'required|date',
            // Vous pouvez ajouter d'autres règles de validation si nécessaire
        ]);

        // Créer un nouveau paiement
        Paiement::create($request->all());

        // Rediriger avec un message
        return redirect()->route('paiements.index')
            ->with('success', 'Paiement créé avec succès.');
    }

    // Ajoutez les autres méthodes pour gérer les opérations CRUD

}

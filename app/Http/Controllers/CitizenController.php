<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;

class CitizenController extends Controller
{
    /**
     * Affiche la liste des citoyens.
     */
    public function index()
    {
        $citizens = Citizen::paginate(10);
        return view('citizens.index', compact('citizens'));
    }

    /**
     * Affiche le formulaire de création d'un citoyen.
     */
    public function create()
    {
        return view('citizens.create');
    }

    /**
     * Stocke un nouveau citoyen dans la base de données.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'date_of_birth' => 'required|date',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20|unique:citizens,phone_number',
            'has_driver_license' => 'boolean',
            'has_weapon_license' => 'boolean',
        ]);

        try {
            // Création du citoyen
            Citizen::create($validatedData);

            // Redirection avec un message de succès
            return redirect()->route('citizens.index')
                ->with('success', 'Citoyen créé avec succès.');
        } catch (\Exception $e) {
            // Gestion des erreurs
            return redirect()->route('citizens.create')
                ->with('error', 'Échec de la création du citoyen : ' . $e->getMessage());
        }
    }

    /**
     * Affiche les détails d'un citoyen spécifique.
     */
    public function show(Citizen $citizen) // Route Model Binding
    {
        return view('citizens.show', compact('citizen'));
    }

    /**
     * Affiche le formulaire d'édition d'un citoyen.
     */
    public function edit(Citizen $citizen) // Route Model Binding
    {
        return view('citizens.edit', compact('citizen'));
    }

    /**
     * Met à jour les informations d'un citoyen.
     */
    public function update(Request $request, Citizen $citizen)
    {
        // Validation des données
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'date_of_birth' => 'required|date',
            'address' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:20|unique:citizens,phone_number,' . $citizen->id,
            'has_driver_license' => 'boolean',
            'has_weapon_license' => 'boolean',
        ]);

        // Mise à jour du citoyen
        $citizen->update($validatedData);

        // Redirection avec un message de succès
        return redirect()->route('citizens.index')->with('success', 'Citoyen mis à jour avec succès.');
    }

    /**
     * Supprime un citoyen de la base de données.
     */
    public function destroy(Citizen $citizen) // Route Model Binding
    {
        $citizen->delete();

        // Redirection avec un message de succès
        return redirect()->route('citizens.index')->with('success', 'Citoyen supprimé avec succès.');
    }

    /**
     * Convertit un citoyen en format JSON.
     */
    public function toJson(Citizen $citizen)
    {   
        $citizens = Citizen::all()->toJson();

        return response()->json($citizens);
    }


}

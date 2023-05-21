<?php

namespace App\Http\Controllers;

use App\Models\salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //équivalent à "select * from salles"
         $resultats = Salle::all();         
         //demande d'affichage de la liste des salles à la vue
         return view('gestion.salles', ["lessalles" => $resultats]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("gestion.ajout");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, ['numsalle' => 'required']);
        $this -> validate($request, ['nom' => 'required']);
        $this -> validate($request, ['capacite' => 'required']);
        $this -> validate($request, ['equipement' => 'required']);
        $this -> validate($request, ['service' => 'required']);
        $this -> validate($request, ['batiment' => 'required']);


        
        $salle = new salle();


        $salle->numeroSalle = $request -> input('numsalle');
        $salle->nom = $request -> input('nom');
        $salle->capacite = $request -> input('capacite');
        $salle->equipements = $request -> input('equipement');
        $salle->services = $request -> input('service');
        $salle->batiment = $request -> input('batiment');



        

        $salle->save();



        


        //affichage de la vue qui liste les inscrits


        return redirect ('/salle');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function show(salle $salle)
    {
        
        return view('gestion.description', ["maSalle" => $salle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function edit(salle $salle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salle $salle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\salle  $salle
     * @return \Illuminate\Http\Response
     */
    public function destroy(salle $salle)
    {
        //
    }
}
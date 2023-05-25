<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Reservation::all();
        return view('gestion.reservation',['lesreservations' => $results]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("gestion.ajoute");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, ['id' => 'required']);
        $this -> validate($request, ['date' => 'required']);
        $this -> validate($request, ['heured' => 'required']);
        $this -> validate($request, ['heuref' => 'required']);
        $this -> validate($request, ['complement' => 'required']);
        $this -> validate($request, ['motif' => 'required']);
        $this -> validate($request, ['codeC' => 'required']);
        $this -> validate($request, ['nums' => 'required']);



        
        $reservation = new reservation();


        $reservation->id = $request -> input('id');
        $reservation->dateres = $request -> input('date');
        $reservation->heuredeb = $request -> input('heured');
        $reservation->heurefin = $request -> input('heuref');
        $reservation->motif = $request -> input('motif');
        $reservation->complément = $request -> input('complement');
        $reservation->codeclient = $request -> input('codec');
        $reservation->numsalle = $resuest -> input('nums');


        

        $reservation->save();



        


        //affichage de la vue qui liste les inscrits


        return redirect ('/reservation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(reservation $reservation)
    {
       return view('gestion.fiche', ["Reserv" => $reservation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}

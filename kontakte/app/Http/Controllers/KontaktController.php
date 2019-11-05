<?php

namespace App\Http\Controllers;

use App\Kontakt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KontaktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Kontakt $kontakts)
    {
        return view('layouts.index', compact('kontakts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.kontakthinzu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($_POST['lastname']==null && $_POST['firstname']==null){
            $request->validate([
                'inputLastName' => 'required',
                'inputFirsttName' => 'required'
            ]);
        };
        
        if($_POST['housenumber'] == null){
            $_POST['housenumber'] = 0;
        }

        if($_POST['tel'] == null){
            $_POST['tel'] = 0;
        }

        $data = [
            'user_id' => Auth::user()->id,
            'lastname' => $_POST['lastname'], 
            'firstname' => $_POST['firstname'], 
            'address' => $_POST['address'],
            'housenumber' => $_POST['housenumber'],
            'plz' => $_POST['plz'],
            'stadt' => $_POST['stadt'],
            'tel' => $_POST['tel']
        ];


        Kontakt::create($data); 
        $request->session()->flash('message', 'Kontakt wurde erstellt.');
        return view('layouts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function show(Kontakt $kontakt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontakt $kontakt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kontakt $kontakt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontakt $kontakt)
    {
        //
    }
}

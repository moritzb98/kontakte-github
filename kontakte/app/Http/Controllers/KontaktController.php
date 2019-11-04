<?php

namespace App\Http\Controllers;

use App\Kontakt;
use Illuminate\Http\Request;

class KontaktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.kontakthinzu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
         /*  
         
         
         $request->validate([
            'inputLastName' => 'required'
        ]);*/
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

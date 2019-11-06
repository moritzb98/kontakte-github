<?php

namespace App\Http\Controllers;

use App\Kontakt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class KontaktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset(Auth::user()->id)){
            $user_id = Auth::user()->id;
            $data=DB::select("select * from kontakts where user_id='$user_id'");
            return view('layouts.index',['data'=>$data]);
        }else{
            return redirect('login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(isset(Auth::user()->id)){
            $user_id = Auth::user()->id;    
            $data=DB::select("select * from kontakts where user_id='$user_id'");
            return view('layouts.kontakthinzu', ['data'=>$data]);
        }else{
            return redirect('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset(Auth::user()->id)){
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

            $datanew = [
                'user_id' => Auth::user()->id,
                'lastname' => $_POST['lastname'], 
                'firstname' => $_POST['firstname'], 
                'address' => $_POST['address'],
                'housenumber' => $_POST['housenumber'],
                'plz' => $_POST['plz'],
                'stadt' => $_POST['stadt'],
                'tel' => $_POST['tel']
            ];

            
            Kontakt::create($datanew); 
            $request->session()->flash('message', 'Kontakt wurde erstellt.');
            $user_id = Auth::user()->id;    
            $data=DB::select("select * from kontakts where user_id='$user_id'");
            return view('layouts.index', ['data'=>$data]);
        }else{
            return redirect('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function show(Kontakt $kontakt) 
    {
        if(isset(Auth::user()->id)){
            $user_id = Auth::user()->id;
            $data=DB::select("select * from kontakts where user_id='$user_id'");
            return view('layouts.kontaktdetails',['data'=>$data], compact('kontakt'));
        }else{
            return redirect('login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontakt $kontakt) 
    {
        if(isset(Auth::user()->id)){
            $user_id = Auth::user()->id;
            $data=DB::select("select * from kontakts where user_id='$user_id'");
            return view('layouts.edit',['data'=>$data], compact('kontakt'));
        }else{
            return redirect('login');
        }
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
        if(isset(Auth::user()->id)){

        }else{
            return redirect('login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kontakt  $kontakt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kontakt $kontakt)
    {
        if(isset(Auth::user()->id)){
            
        }else{
            return redirect('login');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Kontakt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //So könnte man eine Seite nur für einen Admin aufrufbar machen
        /*
        $user = Auth::user();
        $user->authorizeRoles(admin);
        */
        return view('home');
    }

    public function ajaxRequest(){
        $user_id = Auth::user()->id;
            $data=DB::select("select * from kontakts where user_id='$user_id'");
            return view('layouts.ajaxRequest',['data'=>$data]);
    }

    public function ajaxRequestPost(Request $request){
        $input = $request->all();
        return response()->json(['success'=>'Es hat funktioniert, das ist ein simpler Ajax-Request']);
    }
}



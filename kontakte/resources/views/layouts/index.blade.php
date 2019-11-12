@extends('layouts.app')

@section('content')
        <div class="col">
        <div class="message">
            @include('messages.message')
        </div>
            <div class="card">
                <div class="card-header">Kontaktdetails</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 style="margin: 25px;">Willkommen bei meiner Anwendung!</h1>
                    <img style="max-width: 500px; margin: 25px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Heilbronner_Stimme_Logo.svg/2000px-Heilbronner_Stimme_Logo.svg.png" id="logo">
                    <h3 style="margin: 25px;">Geschrieben von Moritz Banhardt, ON18</h3>
                </div>
                 
            </div>
        </div>
@endsection
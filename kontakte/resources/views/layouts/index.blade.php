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
                    <h1>Willkommen bei meiner Anwendung!</h1>
                    <h3>Geschrieben von Moritz Banhardt, ON18</h3>
                </div>
                 
            </div>
        </div>
@endsection
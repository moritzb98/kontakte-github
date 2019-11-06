@extends('layouts.app')

@section('content')
        <div class="col">
        <div class="message">
            @include('messages.message')
        </div>
            <div class="card">
                <div class="card-header">Kontaktdetails löschen</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('kontakt.destroy', $kontakt->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Blogeintrag endgültig löschen</button>
                        <a href="{{route('kontaktdetails', $kontakt->id)}}" class="btn btn-info light">Doch nicht löschen</a>
                    </form>
                </div>
                 
            </div>
        </div>
@endsection


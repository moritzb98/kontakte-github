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
                    
                    
                    @foreach($data as $kontakt)
                            <table>
                                <tr>
                                    <td>{{$kontakt->id}}</td>
                                </tr>
                            </table>
                    @endforeach
                    
                </div>
            </div>
        </div>
@endsection
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

                    <form action="{route('kontakt.edit')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputLastName">Nachname</label>
                            <input type="text" class="form-control details" id="inputLastName" value="{{$data[0]->lastname}}" name="lastname">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputFirstName">Vorname</label>
                            <input type="text" class="form-control details" id="inputFirstName" value="{{$data[0]->firstname}}" name="firstname">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="inputAddress">Straße</label>
                                <input type="text" class="form-control details" id="inputAddress" value="{{$data[0]->address}}" name="address">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputHousenumber">Hausnummer</label>
                                <input type="text" class="form-control details" id="inputHousenumber" value="{{$data[0]->housenumber}}" name="housenumber">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <label for="inputPLZ">PLZ</label>
                            <input type="text" class="form-control" id="inputPLZ" value="{{$data[0]->plz}}" name="plz">
                            </div>
                            <div class="form-group col-md-5">
                            <label for="inputCity">Stadt</label>
                            <input type="text" class="form-control" id="inputCity" value="{{$data[0]->stadt}}" name="stadt">
                            </div>
                            <div class="form-group col-md-5">
                            <label for="inputNumber">Telefonnummer</label>
                            <input type="tel" class="form-control" id="inputNumber" value="{{$data[0]->tel}}" name="tel">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Fertig</button>
                    </form>
                </div>
                 
            </div>
        </div>
@endsection
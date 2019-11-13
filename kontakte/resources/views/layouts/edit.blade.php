@extends('layouts.app')

@section('content')
        <div class="col">
        <div class="message">
            @include('messages.message')
        </div>
            <div class="card">
                <div class="card-header">Kontaktdetails bearbeiten</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('kontakt.update', $kontakt->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputLastName">Nachname</label>
                            <input type="text" class="form-control details" id="inputLastName" value="{{$kontakt->lastname}}" name="lastname">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputFirstName">Vorname</label>
                            <input type="text" class="form-control details" id="inputFirstName" value="{{$kontakt->firstname}}" name="firstname">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="inputAddress">Straße</label>
                                <input type="text" class="form-control details" id="inputAddress" value="{{$kontakt->address}}" name="address">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputHousenumber">Hausnummer</label>
                                <input type="text" class="form-control details" id="inputHousenumber" value="{{$kontakt->housenumber}}" name="housenumber">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <label for="inputPLZ">PLZ</label>
                            <input type="text" class="form-control" id="inputPLZ" value="{{$kontakt->plz}}" name="plz">
                            </div>
                            <div class="form-group col-md-5">
                            <label for="inputCity">Stadt</label>
                            <input type="text" class="form-control" id="inputCity" value="{{$kontakt->stadt}}" name="stadt">
                            </div>
                            <div class="form-group col-md-5">
                            <label for="inputNumber">Telefonnummer</label>
                            <input type="tel" class="form-control" id="inputNumber" value="{{$kontakt->tel}}" name="tel">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Speichern</button>
                        <a href="{{route('kontaktdetails', $kontakt->id)}}" class="btn btn-danger light">Abbrechen</a>
                    </form>
                </div>
                 
            </div>
        </div>
        <script type="text/javascript">

            $.ajaxSetup({

                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                }

            });

        

            $(".btn-success").click(function(e){


                var name = $("input[name=inputLastName]").val();

                $.ajax({

                type:'POST',

                url:'http://localhost:8888/kontakte-github/kontakte/public/ajaxRequest',

                data:{name:name},

                success:function(data){

                    alert(data.success);

                }

                });

            });

        </script>
@endsection


@extends ('layouts.app')

@section('form')
<div class="message">
    @include('messages.message')
</div>
@if($errors->any())
<div class="alert alert-danger">
    Es muss ein Vor- oder Nachname eingetragen werden!
</div> 
@endif
<div class="card mb-2">
    <div class="card-header">Neuer Kontakt</div>
    <div class="card-body">
        @include('layouts.kontaktformular')
    </div>
</div>
@endsection
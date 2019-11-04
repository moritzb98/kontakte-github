@extends ('layouts.app')

@section('form')
<div class="card mb-2">
    <div class="card-header">Neuer Kontakt</div>
    <div class="card-body">
        @include('layouts.kontaktformular')
    </div>
</div>
@endsection
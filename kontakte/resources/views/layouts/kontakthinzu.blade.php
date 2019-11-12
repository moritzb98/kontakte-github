
@extends ('layouts.app')

@push('scripts')
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.js"
    integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
    crossorigin="anonymous"></script>‚
    <script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>
    <script src="{{ asset('js/autocomplete.js')}}"></script>
@endpush

@push('head')
<script src="{{ asset('js/autocomplete.js')}}"></script>
@endpush

@section('form')

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
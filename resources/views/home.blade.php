@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center">{{ __('Bienvenido! ') }} {{ auth()->user()->name }}</div>
            </div>
        </div>
    </div>
</div>

<!-- Aca va el content de la pagina home -->

@endsection

@extends('layouts.default')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/inicio.css')}}">
@endsection

@section('content')

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Escolar</button>
    <button class="dropdown-item" type="button">Dibujo Tecnico</button>
    <button class="dropdown-item" type="button">Herramientas</button>
    <button class="dropdown-item" type="button">Maquinaria</button>
    <button class="dropdown-item" type="button">Oficina</button>
    <button class="dropdown-item" type="button">Jueguetes</button>
    <button class="dropdown-item" type="button">Artistica Profesional</button>
  </div>
</div>





@endsection

@extends('layouts.app')
@section('meta_description', 'Servicios integrales de salud para todo tipo de cliente')
@section('meta_keywords', 'prueba de antigeno, prueba pcr, analisis clinicos, rayos x, maquila pcr, maquila de pcr')
@section('content')

<div class="st-content" style="margin-bottom: 1045px;">  
  @include('partials.hero2-section')  
  @include('partials.sites-links')
  @include('partials.about-section')
  @include('partials.ubications-section')
  <!-- pólia de gastos -->
  {{-- @include('partials.poliza-section') --}}
  <!-- solicta cotización (form) -->
  @include('partials.contact-section')
</div>
    
@endsection
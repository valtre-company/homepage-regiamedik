
@extends('layouts.app')
@section('meta_description', 'Servicios integrales de salud para todo tipo de clientes, Belisario Domínguez 2470A, Centro, 64000 Monterrey, N.L. local 10, (Semillero Obispado). Correo; {{ env('EMAIL') }}; Teléfono: {{ env('PHONE_NUMBER') }}. Copyright {{ Carbon\Carbon::now()->year }} Regia MediK')
@section('meta_keywords', 'prueba de antigeno, prueba pcr, analisis clinicos, rayos x')
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
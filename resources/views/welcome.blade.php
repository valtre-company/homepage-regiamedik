
@extends('layout')

@section('content')

<div class="st-content" style="margin-bottom: 1045px;">
  
  @include('partials.hero2-section')

  @include('partials.hero-section')

  @include('partials.about-section')

  <!-- pólia de gastos -->
  {{-- @include('partials.poliza-section') --}}

  <!-- solicta cotización (form) -->
  @include('partials.contact-section')

</div>
    
@endsection
@push('head')
    <meta name="robots" content="noindex" />
    <link rel="icon" 
      type="image/png" 
      href="{{ asset('img/regia-medik-heart-icon.png') }}">
@endpush

<div class="text-center">
    
    <p class="h2 n-m fw-light d-flex align-items-center justify-content-center">
    <img src="{{ asset('img/regia-medik-heart-icon.png') }}" alt="Regia MediK Logo" height="30">

        <span class="ms-3 d-none d-sm-block">
            Regia MediK
        </span>
    </p>

    @if (\Request::route()->getName() === 'platform.login')
    <div class="mt-3">
        <h6 class="text-center">
            Acceso sólo para usuarios Regia MediK
        </h6>
    </div>
    @endif

</div>

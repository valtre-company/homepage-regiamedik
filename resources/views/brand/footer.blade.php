@guest
    
    {{-- @if (\Request::route()->getName() === 'platform.login')
    <div>
        <h6>
            ¿Búscas consultar tus resultados?
        </h6>
        <button onclick="window.location.href = '{{ route('login') }}'" class="btn btn-primary mx-auto mt-2 mb-3">
            Ir a resultados
        </button>
    </div>
    @endif --}}

    <p>Valtre | {{date('Y')}}</p>
@else

    <div class="text-center user-select-none">
        <div class="mb-3">
            <a href="{{ route('welcome') }}">
                <svg xmlns="http://www.w3.org/2000/svg" style="height: 18px; width: 18px; color: rgb(213, 221, 224); padding-bottom: 2px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Regresar a Inicio
            </a>
        </div>
        <p class="small m-0">
            Regia Medi-K | {{date('Y')}}<br>
        </p>
    </div>
@endguest

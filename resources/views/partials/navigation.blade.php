
<div class="st-perloader" style="display: none;">
  <div class="st-perloader-in">
    <div class="st-wave-first">
      <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><g><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z"/></g></svg>
    </div>
    <div class="st-wave-second">
      <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><g><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z"/></g></svg>
    </div>
  </div>
</div>
<!-- Start Header Section -->
<header class="st-site-header st-style1 st-sticky-header st-sticky-active">
  <div class="st-top-header">
    <div class="container">
      <div class="st-top-header-in">
        <ul class="st-top-header-list">
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            <a href="mailto:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
            <a href="tel://{{ str_replace(' ', '',env('PHONE_NUMBER')) }}">{{ env('PHONE_NUMBER') }}</a>
          </li>
          <li>
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style="fill: #fff;">    
              <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"></path>
            </svg>
            {{-- <img src="{{ asset('assets/images/whatsapp-icon.png') }}" width="18px" height="auto" style="margin-right: 8px;" alt="Whtasapp Logo"> --}}
            <a href="https://wa.me/{{ env('WHATSAPP_WITH_CODE') }}?text={{ env('WHATSAPP_MESSAGE') }}" rel="noreferrer" target="_blank">{{ env('WHATSAPP_WITHOUT_CODE') }}</a>
          </li>
        </ul>
        
        <ul class="st-top-header-list">
          <li>
            <a href="https://dist.regiamedik.com/#contacto" rel="noreferrer" target="_blank"class="st-top-header-btn st-smooth-move">Empresas</a>
            {{-- <ul>
              <li>
                <a href="#">Medicos</a>
              </li>
            </ul> --}}
          </li>
          <li>
            <a target="_blank" rel="noreferrer" href="{{ env('URL_LAB') }}pacientes/login" class="st-top-header-btn st-smooth-move">Resultados</a>
          </li>
          <li>
            <a target="_blank" href="#contacto" rel="noreferrer" class="st-top-header-btn st-smooth-move">Cotizar Pedido</a>
          </li>
        </ul>        
      </div>
    </div>
  </div>
  <div class="st-main-header">
    <div class="container">
      <div class="st-main-header-in">
        <div class="st-main-header-left">
          <a class="st-site-branding" href="{{ route('welcome') }}"><img src="{{ asset('logo.png') }}" width="100px" height="auto" class="brand-logo" alt="Regia Medi-K Logo"></a>
        </div>
        <div class="st-main-header-right">
          <div class="st-nav">
            <ul class="st-nav-list st-onepage-nav">
              <li>
                <a href="#inicio" class="st-smooth-move">Inicio</a>
              </li>
              {{-- <li>
                <a href="#servicios" class="st-smooth-move">Servicios</a>
              </li> --}}
              <li>
                <a href="#acerca-de" class="st-smooth-move">Nosotros</a>
              </li>
              <li>
                <a href="#contacto" class="st-smooth-move">Contacto</a>
              </li>
              <li class="d-block d-md-none">
                <a href="https://um.regiamedik.com/#contacto" rel="noreferrer" target="_blank" class="st-smooth-move">Empresas</a>
              </li>
              <li class="d-block d-md-none">
                <a target="_blank" rel="noreferrer" href="{{ env('URL_LAB') }}pacientes/login" class="st-smooth-move">Resultados</a>
              </li>
              <li class="d-block d-md-none">
                <a target="_blank" href="#contacto" rel="noreferrer" class="st-smooth-move">Cotizar Pedido</a>
              </li>
            </ul>
            <span class="st-munu-toggle"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header Section -->
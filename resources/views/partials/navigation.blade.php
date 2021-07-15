
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
            <a>{{ env('PHONE_NUMBER') }}</a>
          </li>
          <li>
            <img src="{{ asset('assets/images/whatsapp-icon.png') }}" width="18px" height="auto" style="margin-right: 8px;" alt="Whtasapp Logo">
            <a href="https://wa.me/{{ env('WHATSAPP_WITH_CODE') }}?text={{ env('WHATSAPP_MESSAGE') }}" target="_blank">{{ env('WHATSAPP_WITHOUT_CODE') }}</a>
          </li>
        </ul>
        <a target="_blank" href="#contacto" class="st-top-header-btn st-smooth-move">Cotizar Pedido</a>
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
            <ul class="st-nav-list st-onepage-nav" style>
              <li>
                <a href="#inicio" class="st-smooth-move">Inicio</a>
              </li>
              {{-- <li>
                <a href="#servicios" class="st-smooth-move">Servicios</a>
              </li> --}}
              <li>
                <a href="#acerca-de" class="st-smooth-move">Acerca</a>
              </li>
              <li>
                <a href="#contacto" class="st-smooth-move">Contacto</a>
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
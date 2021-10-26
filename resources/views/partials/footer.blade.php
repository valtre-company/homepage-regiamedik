
<!-- Start Footer -->
<footer class="st-site-footer st-sticky-footer st-dynamic-bg" data-src="{{ asset('assets/images/footer-bg.png') }}">
  <div class="st-main-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="st-footer-widget">
            <div class="st-text-field text-center">
              <img src="{{ asset('assets/images/regia-medik-logo.png') }}" alt="Regia Medi-K" class="st-footer-logo img-fluid">
              <div class="st-height-b25 st-height-lg-b25"></div>
              <div class="st-footer-text text-center">Somos una empresa regiomontana que nace por la necesidad de contar con una alternativa diferente en soluciones integrales de salud.</div>
              <div class="st-height-b25 st-height-lg-b25"></div>
              <ul class="redes-sociales st-social-btn st-style1 st-mp0">
                <li>
                  <a target="_blank" rel="noreferrer" href="{{ env("FACEBOOK_URL") }}">
                    <span class="sr-only"><i class="fab fa-facebook-square"></i>Facebook </span>
                  </a>
                  {{-- <a target="_blank" rel="noreferrer" href="{{ env('FACEBOOK_URL') }}">
                    <i class="fab fa-facebook-square"></i>
                  </a> --}}
                </li>
                <li>
                  <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('WHATSAPP_WITH_CODE') }}?text={{ env('WHATSAPP_MESSAGE') }}">
                    <span class="sr-only"><i class="fab fa-whatsapp-square"></i>WhatsApp </span>
                  </a>
                  {{-- <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('WHATSAPP_WITH_CODE') }}?text={{ env('WHATSAPP_MESSAGE') }}">
                    <i class="fab fa-whatsapp-square"></i>
                  </a> --}}
                </li>
                <li>
                  <a target="_blank" rel="noreferrer" href="{{ env("LINKEDIN_URL") }}">
                    <span class="sr-only"><i class="fab fa-linkedin"></i>LinkedIn</span>
                  </a>
                  {{-- <a target="_blank" rel="noreferrer" href="{{ env('LINKEDIN_URL') }}">
                    <i class="fab fa-linkedin"></i>
                  </a> --}}
                </li>
              </ul>
            </div>
          </div>
        </div><!-- .col -->
        <div class="col-lg-3">
          <div class="st-footer-widget">
            <h2 class="st-footer-widget-title">Menú</h2>
            <ul class="st-footer-widget-nav st-mp0">
              <li>
                <a href="#inicio"><i class="fas fa-chevron-right"></i>Inicio</a>
              </li>
              <li>
                <a href="#acerca-de"><i class="fas fa-chevron-right"></i>Acerca</a>
              </li>
              {{-- <li>
                <a href="#servicios"><i class="fas fa-chevron-right"></i>Servicios</a>
              </li> --}}
              <li>
                <a href="#contacto"><i class="fas fa-chevron-right"></i>Contacto</a>
              </li>
            </ul>
          </div>
        </div><!-- .col -->
        <div class="col-lg-3">
          <div class="st-footer-widget">
            <h2 class="st-footer-widget-title">Otros</h2>
            <ul class="st-footer-widget-nav st-mp0">
              <li>
                <a href="https://lab.regiamedik.com" target="_blank" rel="noreferrer">
                  <i class="fas fa-chevron-right"></i>Laboratorio
                </a>
              </li>
              <li>
                <a href="https://um.regiamedik.com" target="_blank" rel="noreferrer">
                  <i class="fas fa-chevron-right"></i>Unidad Médica
                </a>
              </li>
              <li>
                <a href="https://dist.regiamedik.com" target="_blank" rel="noreferrer">
                  <i class="fas fa-chevron-right"></i>Distribuidora
                </a>
              </li>
              <li>
                <a href="https://farma.regiamedik.com" target="_blank" rel="noreferrer">
                  <i class="fas fa-chevron-right"></i>Farmacia
                </a>
              </li>
            </ul>
          </div>
        </div><!-- .col -->
        <div class="col-lg-3">
          <div class="st-footer-widget">
            <h2 class="st-footer-widget-title">Contacto</h2>
            <ul class="st-footer-contact-list st-mp0">
              <li class="mb-0">
                <p class="d-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                  </svg>                  
                  <span class="font-weight-normal">
                    <a href="mailto:{{ env('EMAIL') }}">{{ env('EMAIL') }}</a>                    
                  </span> 
                </p>
              </li>
              <li class="flex-column">
                <p class="d-block">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                  <span class="font-weight-normal">
                    <a href="tel:{{ str_replace(' ', '',env('PHONE_NUMBER')) }}">{{ env('PHONE_NUMBER') }}</a>                                                        
                  </span>
                </p>
                <p class="d-block">                  
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24">    
                    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"></path>
                  </svg>                  
                  <span class="font-weight-normal">
                    <a href="https://wa.me/{{ env('LADA') }}{{ str_replace(' ', '',env('WHATSAPP_WITHOUT_CODE')) }}?text={{ env('WHATSAPP_MESSAGE') }}" target="_blank" rel="noreferrer">{{ env('WHATSAPP_WITHOUT_CODE') }}</a>                     
                  </span>
                </p>                  
              </li>
            </ul>
          </div>
        </div><!-- .col -->
      </div>
    </div>
  </div>
  <div class="st-copyright-wrap">
    <div class="container">
      <div class="st-copyright-in">
        <div class="st-left-copyright">
          <div class="st-copyright-text">&copy; {{ Carbon\Carbon::now()->year }} Regia MediK. Todos los derechos reservados.</div>
          <div class="st-copyright-text" style="font-size: 0.8rem; margin-top: 1px;">Designed by Valtre</div>
        </div>
        <div class="st-right-copyright">
          <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer -->

<!-- Start Video Popup -->
<div class="st-video-popup">
  <div class="st-video-popup-overlay"></div>
  <div class="st-video-popup-content">
    <div class="st-video-popup-layer"></div>
    <div class="st-video-popup-container">
      <div class="st-video-popup-align">
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="about:blank"></iframe>
        </div>
      </div>
      <div class="st-video-popup-close"></div>
    </div>
  </div>
</div>
<!-- End Video Popup -->
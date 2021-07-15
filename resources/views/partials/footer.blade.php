
<!-- Start Footer -->
<footer class="st-site-footer st-sticky-footer st-dynamic-bg" data-src="{{ asset('assets/images/footer-bg.png') }}">
  <div class="st-main-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="st-footer-widget">
            <div class="st-text-field">
              <img src="{{ asset('assets/images/regia-medik-logo.png') }}" width="120px" alt="Regia Medi-K" class="st-footer-logo">
              <div class="st-height-b25 st-height-lg-b25"></div>
              <div class="st-footer-text">Somos una empresa regiomontana que nace por la necesidad de contar con una alternativa diferente en soluciones integrales de salud.</div>
              <div class="st-height-b25 st-height-lg-b25"></div>
              <ul class="st-social-btn st-style1 st-mp0">
                <li><a target="_blank" href="{{ env('FACEBOOK_URL') }}"><i class="fab fa-facebook-square"></i></a></li>
                <li><a target="_blank" href="https://wa.me/{{ env('WHATSAPP_WITH_CODE') }}?text={{ env('WHATSAPP_MESSAGE') }}"><i class="fab fa-whatsapp-square"></i></a></li>
                <li><a target="_blank" href="{{ env('LINKEDIN_URL') }}"><i class="fab fa-linkedin"></i></a></li>
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
                <a href="https://lab.regiamedik.com" target="_blank">
                  <i class="fas fa-chevron-right"></i>Laboratorio
                </a>
              </li>
              <li>
                <a href="https://um.regiamedik.com" target="_blank">
                  <i class="fas fa-chevron-right"></i>Unidad Médica
                </a>
              </li>
              <li>
                <a href="https://dist.regiamedik.com" target="_blank">
                  <i class="fas fa-chevron-right"></i>Distribuidora
                </a>
              </li>
              <li>
                <a href="https://farma.regiamedik.com" target="_blank">
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
              <li>{{ env('EMAIL') }}</li>
              <li>
                Tel. {{ env('PHONE_NUMBER') }}<br>
                WhatsApp: {{ env('WHATSAPP_WITHOUT_CODE') }}
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
<!-- Start Contact Section -->
<section id="contacto" class="st-shape-wrap st-gray-bg" style="padding-bottom: 5rem;">
  {{-- <div class="st-shape4">
    <img src="{{ asset('assets/images/section_shape.png') }}" alt="shape1">
  </div> --}}
  <div class="st-shape6">
    <img src="{{ asset('assets/fonts/contact-shape3.svg') }}" alt="shape3">
  </div>
  <div class="st-height-b120 st-height-lg-b80"></div>
  <div class="container">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">Esperamos tu mensaje</h2>
      <div class="st-seperator">
        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
        <div class="st-seperator-center"><img src="{{ asset('assets/images/regia-medik-heart-icon.png') }}" width="16px" alt="icon"></div>
        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
      </div>
      <div class="st-section-heading-subtitle">Envíanos un mensaje con tus datos y pronto uno de nuestros agentes de ventas se pondrán en conacto.</div>
    </div>
    <div class="st-height-b40 st-height-lg-b40"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <form method="POST" action="{{ env('CONTACT_FORM_ACTION') }}" class="st-appointment-form" id="appointment-form">
          <div id="st-alert1" style="display: none;"></div>

          <input type="hidden" id="sitio" name="sitio" value="Home Page Regia Medi-K">
          
          <div class="row">
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>Nombre completo</label>
                <input type="text" id="uname" name="name" minlength="10" placeholder="Nombre Apellidos" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>Correo</label>
                <input type="text" id="uemail" name="email" minlength="5" placeholder="ejemplo@email.com" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>Número de teléfono</label>
                <input type="text" id="unumber" name="phone" minlength="10" maxlength="13" placeholder="811 123 45 67" required>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="st-form-field st-style1">
                <label>Mensaje</label>
                <textarea cols="30" rows="10" id="umsg" name="message" minlength="20" placeholder="¿En que estás interesado?"></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" name="submit">Enviar Mensaje</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

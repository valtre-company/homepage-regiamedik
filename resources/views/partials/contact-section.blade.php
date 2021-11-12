<!-- Start Contact Section -->
<section id="contacto" class="st-shape-wrap" style="padding-bottom: 5rem;">
  {{-- <div class="st-shape4">
    <img src="{{ asset('assets/images/section_shape.png') }}" alt="shape1">
  </div> --}}
  <div class="st-shape6">
    {{-- <img src="{{ asset('assets/fonts/contact-shape3.svg') }}" alt="shape3"> --}}
  </div>
  {{-- <div class="st-height-b120 st-height-lg-b80"></div> --}}
  <div class="container mt-5">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">Esperamos tu mensaje</h2>
      <div class="st-seperator">
        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
        <div class="st-seperator-center">
          <svg class="svg-icon-rm" version="1.0" xmlns="http://www.w3.org/2000/svg" width="2509.000000pt" height="1819.000000pt" viewBox="0 0 2509.000000 1819.000000" preserveAspectRatio="xMidYMid meet"> 
            <g transform="translate(0.000000,1819.000000) scale(0.100000,-0.100000)" stroke="none"> <path d="M8300 17663 c-711 -48 -1361 -218 -1934 -505 -958 -479 -1798 -1327 -2305 -2328 -406 -799 -598 -1630 -578 -2495 15 -612 125 -1161 349 -1727 114 -290 362 -779 686 -1353 204 -364 169 -318 616 -810 170 -187 414 -457 542 -601 128 -143 250 -272 271 -285 21 -14 61 -34 88 -45 49 -18 99 -19 1752 -19 l1702 0 28 21 c15 11 36 36 45 55 14 28 306 1151 1134 4364 47 181 103 397 126 480 67 250 144 381 275 468 99 66 177 89 293 90 178 0 311 -52 426 -167 115 -116 164 -223 209 -461 14 -71 245 -1347 515 -2835 496 -2734 649 -3572 654 -3578 7 -6 149 253 332 604 380 732 391 751 496 831 60 46 96 66 177 97 l56 21 2365 5 c1755 4 2373 8 2397 17 17 6 64 28 103 49 113 59 179 126 609 613 797 904 1427 1996 1694 2936 240 844 257 1650 51 2505 -270 1122 -838 2040 -1735 2801 -694 590 -1494 964 -2376 1113 -301 51 -431 60 -813 60 -370 0 -504 -9 -790 -55 -1105 -177 -2113 -706 -2844 -1494 -92 -100 -331 -372 -364 -415 -4 -6 -20 12 -190 218 -416 503 -860 870 -1456 1202 -757 422 -1564 635 -2371 628 -104 -1 -210 -3 -235 -5z"/> <path d="M11303 9518 c-21 -26 -59 -169 -368 -1373 -174 -676 -325 -1261 -336 -1300 -72 -243 -168 -378 -322 -450 -155 -73 -59 -69 -1652 -72 -786 -1 -1442 -3 -1456 -3 -14 0 -33 -6 -43 -13 -17 -13 -17 -15 4 -58 13 -24 57 -80 100 -124 42 -44 281 -307 531 -585 250 -278 1134 -1259 1965 -2180 830 -921 1646 -1828 1814 -2015 369 -411 560 -619 608 -663 255 -232 585 -221 840 28 78 76 4924 5454 4964 5508 41 57 43 76 11 91 -42 19 -3064 16 -3128 -4 -65 -19 -118 -57 -153 -107 -16 -24 -122 -225 -237 -448 -114 -223 -316 -612 -448 -865 -609 -1166 -584 -1123 -690 -1221 -111 -104 -214 -144 -367 -144 -302 1 -511 169 -590 478 -11 42 -81 417 -155 832 -386 2146 -850 4673 -861 4692 -7 12 -20 10 -31 -4z"/> </g>
          </svg>
          {{-- <img src="{{ asset('assets/images/regia-medik-heart-icon.png') }}" alt="icon"> --}}
        </div>
        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
      </div>
      <div class="st-section-heading-subtitle mx-auto">Envíanos un mensaje con tus datos y pronto uno de nuestros agentes de ventas se pondrán en contacto.</div>
    </div>
    <div class="st-height-b40 st-height-lg-b40"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <form method="POST" action="{{ route('contact.send') }}" class="st-appointment-form" id="appointment-form" novalidate>
          @csrf
          @if (session('success'))
          <p class="alert alert-success font-size-18 text-center mt-2" role="alert">
              {{ session('success') }}
          </p>
          @endif
          @if (session('error'))
          <p class="alert alert-danger font-size-18 text-center mt-2" role="alert">
              {{ session('error') }}
          </p>
          @endif
          <div id="st-alert1" style="display: none;"></div>

          <input type="hidden" id="sitio" name="sitio" value="Home Page Regia Medi-K">
          
          <div class="row">
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>Nombre completo</label>
                <input type="text" id="uname" name="name" minlength="10"
                  placeholder="Nombre Apellidos" value="{{ old('name') }}">
                  @error('name')
                  <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                  </span> 
                  @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>Correo</label>
                <input type="text" id="uemail" name="email" minlength="5"
                  placeholder="ejemplo@email.com" required value="{{ old('email') }}" >
                  @error('phone')
                  <span class="invalid-feedback d-block" role="alert">
                      <strong>{{ $message }}</strong>
                    </span> 
                  @enderror
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-form-field st-style1">
                <label>Número de teléfono</label>
                <input type="text" id="unumber" name="phone" minlength="10" maxlength="13" placeholder="811 123 45 67" required value="{{ old('phone') }}" >
                @error('phone')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                  </span> 
                @enderror
              </div>
            </div>
            <div class="col-lg-12">
              <div class="st-form-field st-style1">
                <label>Mensaje</label>
                <textarea cols="30" rows="10" id="umsg" name="message" minlength="20"
                  placeholder="¿En que estás interesado?">{{ old('message') }}</textarea>
                @error('message')
                  <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                  </span> 
                @enderror
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

<!-- Start About Section -->
<section class="st-about-wrap" id="acerca-de">
  <div class="st-shape-bg">
    <img src="{{ asset('assets/fonts/about-bg-shape.svg') }}" alt="shape">
  </div>
  {{-- <div class="st-height-b120 st-height-lg-b50"></div> --}}
  <div class="container">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">¿Quiénes somos?</h2>
      <div class="st-seperator">
        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
        <div class="st-seperator-center"><img src="{{ asset('assets/images/regia-medik-heart-icon.png') }}" alt="icon"></div>
        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
      </div>
      <div class="st-section-heading-subtitle">¡En Regia Medi-K cuidamos de tu salud y la de tu empresa!</div>
      <div class="row mt-5 valores justify-content-center">
        <div class="col-12 col-md-3 mr-3">                  
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>Misión</h2>
              </div>
              <div class="flip-card-back">
                <p>Ser una solución integral sólida y confiable a las necesidades médicas de nuestros clientes y socios comerciales, brindando un servicio de excelencia.</p>                  
              </div>
            </div>
          </div>          
        </div>
        <div class="col-12 col-md-3 mr-3">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>Visión</h2>
              </div>
              <div class="flip-card-back">
                <p>Consolidarnos como líderes en soluciones médicas integrales con un sistema de salud empresarial y privada, con asistencia de calidez, profesional y de la más alta calidad.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-3 mr-3">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <h2>Valores</h2>
              </div>
              <div class="flip-card-back">
                <div class="text-left">
                  <p class="d-block p-0">■ Excelencia</p>
                  <p class="d-block p-0">■ Ética</p>
                  <p class="d-block p-0">■ Vocación de servicio</p>
                </div>  
              </div>
            </div>
          </div>  
        </div>
      </div>
    </div>
    {{-- <div class="st-height-b40 st-height-lg-b40"></div> --}}
  </div>
  <div class="container pt-5 pb-3">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="st-vertical-middle">
          <div class="st-vertical-middle-in">
            <div class="st-text-block st-style1">
              <h2 class="st-text-block-title text-center">Atenderte es nuestra prioridad</h2>
              <div class="st-height-b20 st-height-lg-b20"></div>
              <div class="st-text-block-text text-center">
                <p>Somos una empresa regio-montana que nace por la necesidad de contar con una alternativa diferente en soluciones integrales de salud. Cada uno de los integrantes de nuestro equipo están comprometidos en ofrecer servicios que cumplan y superen las expectativas de cada uno de nuestros clientes y socios comerciales.</p>
                <p>Ofrecemos una amplia gama de servicios y medicamentos de alta calidad con la finalidad de mejorar la salud y el bienestar de nuestra comunidad.</p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- .col -->
    </div>
  </div>
  <div class="container-fluid pt-5 pb-3 ubications">
    <div class="st-section-heading st-style1">
      <h2 class="st-section-heading-title">Ubicaciones</h2>
      <div class="st-seperator">
        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;"></div>
        <div class="st-seperator-center"><img src="{{ asset('assets/images/regia-medik-heart-icon.png') }}" alt="icon"></div>
        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInRight;"></div>
      </div>      
    </div>
    <h2 class="st-shedule-title text-center mt-3 mb-0">Laboratorios</h2>
    {{-- Laboratorios --}}
    <div class="row justify-content-center justify-content-lg-start container-services">
      {{-- Laboratorio Regia Medi-K 1  --}}
      <div class="col-12 col-md-6 col-lg-4 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInRight;">
        <div class="st-shedule-wrap">
          <div class="st-shedule">
            <div class="d-flex flex-column text-center mb-1">
              <div>
                <i class="fas fa-map-marker-alt icon-location mr-2" style="font-size: 22px;"></i>
                <p class="m-0 font-weight-bold">
                  <span class="city">Monterrey </span>
                  <span class="suburb">Semillero Obispado</span> 
                  <span class="number_interior">Local #10 </span>
                </p>
                <button href="#" class="btn btn-link btn-map" data-lat="25.6733463" data-lng="-100.346845">Ver mapa</button>                                
              </div>
            </div>
            @if (!empty(env('LAB_RM1_PHONE_NUMBER')) || !empty(env('LAB_RM1_WHATSAPP_NUMBER')))
            <div class="d-flex flex-column text-center">
              <ul class="st-shedule-list">
                <li class="jus">
                  <div class="st-shedule-left">Lun - Vie</div>
                  <div class="st-shedule-right">07:00hrs - 20:00hrs</div>
                </li>
                <li>
                  <div class="st-shedule-left">Sab - Dom</div>                  
                  <div class="st-shedule-right">07:00hrs - 15:00hrs</div>
                </li>
              </ul>
            </div>
            <div class="st-call st-style1 mt-3">
              <div class="st-call-icon">
                <a href="tel://{{ str_replace(' ', '',env('LAB_RM1_PHONE_NUMBER')) }}">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><path d="M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088 c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008 c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002 l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088 c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994 l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487 c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367 C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213 c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325 l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623 c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806 C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856 l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562 c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133 l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278 C470.84,422.278,444.761,448.377,444.752,448.368z"/></g><g><path d="M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624 c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z"/></g><g><path d="M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706 c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z"/></g><g><path d="M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0 c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0 c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002 c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z"/></g></svg>
                </a>
              </div>
              <div class="st-call-text">
                <div class="st-call-title">Llámanos</div>
                <div class="st-call-number">
                  <a href="tel:{{ str_replace(' ', '',env('LAB_RM1_PHONE_NUMBER')) }}">{{ env('LAB_RM1_PHONE_NUMBER') }}</a>
                </div>
              </div>
            </div>
            <div class="st-call st-style1 mt-3">
              <div class="st-call-icon">
                <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('LADA') . str_replace(' ', '',env('LAB_RM1_WHATSAPP_NUMBER')) }}?text={{ env('WHATSAPP_MESSAGE') }}">
                  <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="32px" height="32px">    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/></svg>
                </a>
              </div>
              <div class="st-call-text">
                <div class="st-call-title">WhatsApp</div>
                <div class="st-call-number">
                  <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('LADA') . str_replace(' ', '',env('LAB_RM1_WHATSAPP_NUMBER')) }}?text={{ env('WHATSAPP_MESSAGE') }}">
                  {{ env('LAB_RM1_WHATSAPP_NUMBER') }}
                  </a>
                </div>
              </div>
            </div>
            @else
              <div class="text-center">
                <p>Próximamente...</p>
              </div>
            @endif           
          </div>
        </div>
      </div><!-- .col -->

      {{-- Laboratorio Regia Medi-K 2 --}}
      <div class="col-12 col-md-6 col-lg-4 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInRight;">
        <div class="st-shedule-wrap">
          <div class="st-shedule">            
            <div class="d-flex flex-column text-center mb-1">              
              <div>
                <i class="fas fa-map-marker-alt icon-location mr-2" style="font-size: 22px;"></i>
                <p class="m-0 font-weight-bold">
                  <span class="city">Juárez</span>
                  <span class="suburb">El Sabinal </span>
                  <span class="number_interior">Local A</span>                  
                </p>                
                <button href="#" class="btn btn-link btn-map" data-lat="25.6526782" data-lng="-100.110516">Ver mapa</button>
              </div>                
            </div>
            @if (!empty(env('LAB_RM2_PHONE_NUMBER')) || !empty(env('LAB_RM2_WHATSAPP_NUMBER')))
              <div class="d-flex flex-column text-center">
                <ul class="st-shedule-list">
                  <li class="jus">
                    <div class="st-shedule-left">Lun - Vie</div>
                    <div class="st-shedule-right">08:00hrs - 21:00hrs</div>
                  </li>
                  <li>
                    <div class="st-shedule-left">Sab</div>                  
                    <div class="st-shedule-right">08:00hrs - 14:00hrs</div>
                  </li>
                </ul>
              </div>
              @if (!empty(env('LAB_RM2_PHONE_NUMBER')))
              <div class="st-call st-style1 mt-3">
                <div class="st-call-icon">
                  <a href="tel://{{ str_replace(' ', '',env('LAB_RM2_PHONE_NUMBER')) }}">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><path d="M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088 c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008 c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002 l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088 c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994 l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487 c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367 C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213 c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325 l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623 c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806 C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856 l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562 c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133 l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278 C470.84,422.278,444.761,448.377,444.752,448.368z"/></g><g><path d="M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624 c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z"/></g><g><path d="M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706 c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z"/></g><g><path d="M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0 c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0 c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002 c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z"/></g></svg>
                  </a>
                </div>
                <div class="st-call-text">
                  <div class="st-call-title">Llámanos</div>
                  <div class="st-call-number">
                    <a href="tel:{{ str_replace(' ', '',env('LAB_RM2_PHONE_NUMBER')) }}">{{ env('LAB_RM2_PHONE_NUMBER') }}</a>
                  </div>
                </div>
              </div>
              @endif
              @if (!empty(env('LAB_RM2_WHATSAPP_NUMBER')))
              <div class="st-call st-style1 mt-3">
                <div class="st-call-icon">
                  <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('LADA') . str_replace(' ', '',env('LAB_RM2_WHATSAPP_NUMBER')) }}?text={{ env('WHATSAPP_MESSAGE') }}">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="32px" height="32px">    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/></svg>
                  </a>
                </div>
                <div class="st-call-text">
                  <div class="st-call-title">WhatsApp</div>
                  <div class="st-call-number">
                    <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('LADA') . str_replace(' ', '',env('LAB_RM2_WHATSAPP_NUMBER')) }}?text={{ env('WHATSAPP_MESSAGE') }}">
                    {{ env('LAB_RM2_WHATSAPP_NUMBER') }}
                    </a>
                  </div>
                </div>
              </div>
              @endif            
            @else
              <div class="text-center">
                <p>Próximamente...</p>
              </div>
            @endif
          </div>
        </div>
      </div><!-- .col -->

      {{-- Laboratorio Regia Medi-K 3 --}}
      <div class="col-12 col-md-6 col-lg-4 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInRight;">
        <div class="st-shedule-wrap">
          <div class="st-shedule">
            <div class="d-flex flex-column text-center mb-1"> 
                <div>
                  <i class="fas fa-map-marker-alt icon-location mr-2" style="font-size: 22px;"></i>
                  <p class="m-0 font-weight-bold">
                    <span class="city">Apodaca</span>
                    <span class="suburb">Plaza los Molinos</span>
                    <span class="number_interior">Local B131 - 132</span>                                        
                  </p>
                  <button href="#" class="btn btn-link btn-map" data-lat="25.772116" data-lng="-100.1931361">Ver mapa</button>  
                </div>                 
            </div>
            @if (!empty(env('LAB_RM3_PHONE_NUMBER')) || !empty(env('LAB_RM3_WHATSAPP_NUMBER')))
              <div class="d-flex flex-column text-center">
                <ul class="st-shedule-list">
                  <li class="jus">
                    <div class="st-shedule-left">Lun - Vie</div>
                    <div class="st-shedule-right">08:00hrs - 21:00hrs</div>
                  </li>
                  <li>
                    <div class="st-shedule-left">Sab</div>                  
                    <div class="st-shedule-right">08:00hrs - 14:00hrs</div>
                  </li>
                </ul>
              </div>
              @if (!empty(env('LAB_RM3_PHONE_NUMBER')))
              <div class="st-call st-style1 mt-3">
                <div class="st-call-icon">
                  <a href="tel://{{ str_replace(' ', '',env('LAB_RM3_PHONE_NUMBER')) }}">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><path d="M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088 c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008 c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002 l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088 c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994 l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487 c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367 C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213 c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325 l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623 c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806 C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856 l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562 c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133 l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278 C470.84,422.278,444.761,448.377,444.752,448.368z"/></g><g><path d="M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624 c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z"/></g><g><path d="M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706 c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z"/></g><g><path d="M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0 c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0 c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002 c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z"/></g></svg>
                  </a>
                </div>
                <div class="st-call-text">
                  <div class="st-call-title">Llámanos</div>
                  <div class="st-call-number">
                    <a href="tel:{{ str_replace(' ', '',env('LAB_RM3_PHONE_NUMBER')) }}">{{ env('LAB_RM3_PHONE_NUMBER') }}</a>
                  </div>
                </div>
              </div>
              @endif
              @if (!empty(env('LAB_RM3_WHATSAPP_NUMBER')))
              <div class="st-call st-style1 mt-3">
                <div class="st-call-icon">
                  <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('LADA') . str_replace(' ', '',env('LAB_RM3_WHATSAPP_NUMBER')) }}?text={{ env('WHATSAPP_MESSAGE') }}">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="32px" height="32px">    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/></svg>
                  </a>
                </div>
                <div class="st-call-text">
                  <div class="st-call-title">WhatsApp</div>
                  <div class="st-call-number">
                    <a href="tel:{{ str_replace(' ', '',env('LAB_RM3_WHATSAPP_NUMBER')) }}">
                    {{ env('LAB_RM3_WHATSAPP_NUMBER') }}
                    </a>
                  </div>
                </div>
              </div>
              @endif
            @else
              <div class="text-center">
                <p>Próximamente...</p>
              </div>
            @endif
          </div>
        </div>
      </div><!-- .col -->
    </div>

    <h2 class="st-shedule-title text-center mt-3 mb-0">Unidad Médica</h2>
    <div class="row justify-content-center container-services">
      {{-- Unidad Médica 1 --}}
      <div class="col-12 col-md-6 col-lg-4 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInRight;">
        <div class="st-shedule-wrap">
          <div class="st-shedule ">            
            <div class="d-flex flex-column text-center mb-1"> 
              <div>
                <i class="fas fa-map-marker-alt icon-location mr-2" style="font-size: 22px;"></i>
                <p class="m-0 font-weight-bold">                  
                  <span class="city">Juárez</span>
                  <span class="suburb">Paseo Juárez</span>
                  <span class="number_interior">Local #A19</span>                     
                </p>
                <button href="#" class="btn btn-link btn-map" data-lat="25.6482889" data-lng="-100.11142,17">Ver mapa</button>                    
              </div>                                        
            </div>
            @if (!empty(env('UM_RM1_PHONE_NUMBER')) || !empty(env('UM_RM1_WHATSAPP_NUMBER')))
              <div class="d-flex flex-column text-center">
                <ul class="st-shedule-list">
                  <li class="jus">
                    <div class="st-shedule-left">Lun - Vie</div>
                    <div class="st-shedule-right">08:00hrs - 21:00hrs</div>
                  </li>
                  <li>
                    <div class="st-shedule-left">Sab - Dom</div>                  
                    <div class="st-shedule-right">08:00hrs - 14:00hrs</div>
                  </li>
                </ul>
              </div>
              @if (!empty(env('UM_RM1_PHONE_NUMBER')))
              <div class="st-call st-style1 mt-3">
                <div class="st-call-icon">
                  <a href="tel://{{ str_replace(' ', '',env('UM_RM1_PHONE_NUMBER')) }}">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><path d="M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088 c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008 c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002 l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088 c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994 l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487 c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367 C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213 c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325 l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623 c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806 C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856 l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562 c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133 l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278 C470.84,422.278,444.761,448.377,444.752,448.368z"/></g><g><path d="M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624 c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z"/></g><g><path d="M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706 c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z"/></g><g><path d="M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0 c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0 c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002 c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z"/></g></svg>
                  </a>
                </div>
                <div class="st-call-text">
                  <div class="st-call-title">Llámanos</div>
                  <div class="st-call-number">
                    <a href="tel:{{ str_replace(' ', '',env('UM_RM1_PHONE_NUMBER')) }}">{{ env('UM_RM1_PHONE_NUMBER') }}</a>
                  </div>
                </div>
              </div>              
              @endif
              @if (!empty(env('UM_RM1_WHATSAPP_NUMBER')))
              <div class="st-call st-style1 mt-3">
                <div class="st-call-icon">
                  <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('LADA') . str_replace(' ', '',env('UM_RM1_WHATSAPP_NUMBER')) }}?text={{ env('WHATSAPP_MESSAGE') }}">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="32px" height="32px">    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/></svg>
                  </a>
                </div>
                <div class="st-call-text">
                  <div class="st-call-title">WhatsApp</div>
                  <div class="st-call-number">
                    <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('LADA') . str_replace(' ', '',env('UM_RM1_WHATSAPP_NUMBER')) }}?text={{ env('WHATSAPP_MESSAGE') }}">
                    {{ env('UM_RM1_WHATSAPP_NUMBER') }}
                    </a>
                  </div>
                </div>
              </div>
              @endif
            @else
              <div class="text-center">
                <p>Próximamente...</p>
              </div>
            @endif            
          </div>
        </div>
      </div><!-- .col -->

      {{-- Unidad Médica 2 --}}
      <div class="col-12 col-md-6 col-lg-4 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInRight;">
        <div class="st-shedule-wrap">
          <div class="st-shedule">            
            <div class="d-flex flex-column text-center mb-1">                              
              <div>
                <i class="fas fa-map-marker-alt icon-location mr-2" style="font-size: 22px;"></i>
                <p class="m-0 font-weight-bold">
                  <span class="city">Apodaca</span>
                  <span class="suburb">Plaza Los Molinos</span>
                  <span class="number_interior">Local B131 - 132</span>                     
                </p>
                <button href="#" class="btn btn-link btn-map" data-lat="25.772116" data-lng="-100.1931361">Ver mapa</button>
              </div>
            </div>
            @if (!empty(env('UM_RM2_PHONE_NUMBER')) || !empty(env('UM_RM2_WHATSAPP_NUMBER')))
              <div class="d-flex flex-column text-center">
                <ul class="st-shedule-list">
                  <li class="jus">
                    <div class="st-shedule-left">Lu - Vie</div>
                    <div class="st-shedule-right">08:00hrs - 21:00pm</div>
                  </li>
                  <li>
                    <div class="st-shedule-left">Sab - Dom</div>                  
                    <div class="st-shedule-right">08:00hrs - 14:00hrs</div>
                  </li>
                </ul>
              </div>
              @if (!empty(env('UM_RM2_PHONE_NUMBER')))
              <div class="st-call st-style1 mt-3">
                <div class="st-call-icon">
                  <a href="tel://{{ str_replace(' ', '',env('UM_RM2_PHONE_NUMBER')) }}">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"><g><path d="M492.557,400.56L392.234,300.238c-11.976-11.975-31.458-11.975-43.435,0l-26.088,26.088 c-8.174,8.174-10.758,19.845-7.773,30.241l-9.843,9.843c-0.003,0.003-0.005,0.005-0.008,0.008 c-6.99,6.998-50.523-3.741-103.145-56.363c-52.614-52.613-63.356-96.139-56.366-103.142c0-0.002,0.002-0.002,0.002-0.002 l9.852-9.851c2.781,0.799,5.651,1.207,8.523,1.207c7.865,0,15.729-2.993,21.718-8.98l26.088-26.088 c11.975-11.975,11.975-31.458,0-43.434L111.436,19.441c-5.8-5.8-13.513-8.994-21.716-8.994c-8.205,0-15.915,3.196-21.716,8.994 l-26.09,26.09c-8.174,8.174-10.758,19.846-7.773,30.241c0,0-8.344,8.424-8.759,8.956c-27.753,30.849-32.96,79.418-14.561,137.487 c18.017,56.857,56.857,117.088,109.367,169.595c52.508,52.508,112.739,91.348,169.596,109.367 C312.624,508.414,333.991,512,353.394,512c31.813,0,58.337-9.648,77.35-28.66l5.474-5.474c2.74,0.788,5.602,1.213,8.532,1.213 c8.205,0,15.917-3.196,21.716-8.994l26.09-26.09C504.531,432.02,504.531,412.536,492.557,400.56z M89.72,41.157l100.324,100.325 l-26.074,26.102c0,0-0.005-0.005-0.014-0.014l-0.375-0.375l-49.787-49.787L63.631,67.247L89.72,41.157z M409.029,461.623 c-0.002,0.002-0.003,0.003-0.005,0.005c-22.094,22.091-61.146,25.74-109.961,10.27c-52.252-16.558-108.065-52.714-157.156-101.806 C92.814,321,56.658,265.189,40.101,212.936c-15.47-48.817-11.821-87.87,10.275-109.967l0.002-0.002l2.77-2.77l77.857,77.856 l-7.141,7.141c-0.005,0.005-0.009,0.011-0.015,0.017c-29.585,29.622,5.963,96.147,56.378,146.562 c37.734,37.734,84.493,67.14,118.051,67.14c11.284,0,21.076-3.325,28.528-10.778c0.003-0.003,0.005-0.005,0.008-0.008l7.133-7.133 l77.857,77.856L409.029,461.623z M444.752,448.368L344.428,348.044l26.088-26.088L470.84,422.278 C470.84,422.278,444.761,448.377,444.752,448.368z"/></g><g><path d="M388.818,123.184c-29.209-29.209-68.042-45.294-109.344-45.293c-8.481,0-15.356,6.875-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c33.1-0.002,64.219,12.89,87.628,36.297c23.406,23.406,36.295,54.525,36.294,87.624 c0,8.481,6.875,15.358,15.356,15.358c8.48,0,15.356-6.875,15.356-15.354C434.109,191.224,418.023,152.393,388.818,123.184z"/></g><g><path d="M443.895,68.107C399.972,24.186,341.578-0.002,279.468,0c-8.481,0-15.356,6.876-15.356,15.356 c0,8.481,6.876,15.356,15.356,15.356c53.907-0.002,104.588,20.992,142.709,59.111c38.118,38.118,59.111,88.799,59.11,142.706 c0,8.481,6.875,15.356,15.356,15.356c8.48,0,15.356-6.875,15.356-15.354C512.001,170.419,487.813,112.027,443.895,68.107z"/></g><g><path d="M333.737,178.26c-14.706-14.706-33.465-22.477-54.256-22.477c0,0-0.005,0-0.006,0 c-8.481,0.002-15.356,6.876-15.354,15.358c0.002,8.481,6.878,15.356,15.358,15.354c0.002,0,0.003,0,0.005,0 c12.644,0,23.593,4.536,32.539,13.481c8.819,8.82,13.481,20.075,13.479,32.544c-0.002,8.481,6.875,15.356,15.354,15.358h0.002 c8.481,0,15.354-6.875,15.356-15.354C356.215,211.732,348.444,192.968,333.737,178.26z"/></g></svg>
                  </a>
                </div>
                <div class="st-call-text">
                  <div class="st-call-title">Llámanos</div>
                  <div class="st-call-number">
                    <a href="tel:{{ str_replace(' ', '',env('UM_RM2_PHONE_NUMBER')) }}">{{ env('UM_RM2_PHONE_NUMBER') }}</a>
                  </div>
                </div>
              </div>              
              @endif
              @if (!empty(env('UM_RM2_WHATSAPP_NUMBER')))
              <div class="st-call st-style1 mt-3">
                <div class="st-call-icon">
                  <a target="_blank" rel="noreferrer" href="https://wa.me/{{ env('LADA') . str_replace(' ', '',env('UM_RM2_WHATSAPP_NUMBER')) }}?text={{ env('WHATSAPP_MESSAGE') }}">
                    <svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="32px" height="32px">    <path d="M 12.011719 2 C 6.5057187 2 2.0234844 6.478375 2.0214844 11.984375 C 2.0204844 13.744375 2.4814687 15.462563 3.3554688 16.976562 L 2 22 L 7.2324219 20.763672 C 8.6914219 21.559672 10.333859 21.977516 12.005859 21.978516 L 12.009766 21.978516 C 17.514766 21.978516 21.995047 17.499141 21.998047 11.994141 C 22.000047 9.3251406 20.962172 6.8157344 19.076172 4.9277344 C 17.190172 3.0407344 14.683719 2.001 12.011719 2 z M 12.009766 4 C 14.145766 4.001 16.153109 4.8337969 17.662109 6.3417969 C 19.171109 7.8517969 20.000047 9.8581875 19.998047 11.992188 C 19.996047 16.396187 16.413812 19.978516 12.007812 19.978516 C 10.674812 19.977516 9.3544062 19.642812 8.1914062 19.007812 L 7.5175781 18.640625 L 6.7734375 18.816406 L 4.8046875 19.28125 L 5.2851562 17.496094 L 5.5019531 16.695312 L 5.0878906 15.976562 C 4.3898906 14.768562 4.0204844 13.387375 4.0214844 11.984375 C 4.0234844 7.582375 7.6067656 4 12.009766 4 z M 8.4765625 7.375 C 8.3095625 7.375 8.0395469 7.4375 7.8105469 7.6875 C 7.5815469 7.9365 6.9355469 8.5395781 6.9355469 9.7675781 C 6.9355469 10.995578 7.8300781 12.182609 7.9550781 12.349609 C 8.0790781 12.515609 9.68175 15.115234 12.21875 16.115234 C 14.32675 16.946234 14.754891 16.782234 15.212891 16.740234 C 15.670891 16.699234 16.690438 16.137687 16.898438 15.554688 C 17.106437 14.971687 17.106922 14.470187 17.044922 14.367188 C 16.982922 14.263188 16.816406 14.201172 16.566406 14.076172 C 16.317406 13.951172 15.090328 13.348625 14.861328 13.265625 C 14.632328 13.182625 14.464828 13.140625 14.298828 13.390625 C 14.132828 13.640625 13.655766 14.201187 13.509766 14.367188 C 13.363766 14.534188 13.21875 14.556641 12.96875 14.431641 C 12.71875 14.305641 11.914938 14.041406 10.960938 13.191406 C 10.218937 12.530406 9.7182656 11.714844 9.5722656 11.464844 C 9.4272656 11.215844 9.5585938 11.079078 9.6835938 10.955078 C 9.7955938 10.843078 9.9316406 10.663578 10.056641 10.517578 C 10.180641 10.371578 10.223641 10.267562 10.306641 10.101562 C 10.389641 9.9355625 10.347156 9.7890625 10.285156 9.6640625 C 10.223156 9.5390625 9.737625 8.3065 9.515625 7.8125 C 9.328625 7.3975 9.131125 7.3878594 8.953125 7.3808594 C 8.808125 7.3748594 8.6425625 7.375 8.4765625 7.375 z"/></svg>
                  </a>
                </div>
                <div class="st-call-text">
                  <div class="st-call-title">WhatsApp</div>
                  <div class="st-call-number">
                    <a href="tel:{{ str_replace(' ', '',env('UM_RM2_WHATSAPP_NUMBER')) }}">
                    {{ env('UM_RM2_WHATSAPP_NUMBER') }}
                    </a>
                  </div>
                </div>
              </div>
              @endif
            @else
              <div class="text-center">
                <p>Próximamente...</p>
              </div>
            @endif            
          </div>
        </div>
      </div><!-- .col -->

      {{-- Unidad Médica 2 --}}
      
    </div>
  </div>
</section>
<!-- End About Seciton -->
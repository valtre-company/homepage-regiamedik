<div class="st-height-b125 st-height-lg-b80" id="inicio"></div>
<div class="st-hero-wrap st-color1 overflow-hidden">	
	<div id="flechas" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">    					
				<picture>
					<source media="(max-width: 480px)" srcset="{{ asset('assets/images/banner_rm_mobile.webp') }}?t={{ time() }}" type="image/webp">
					<source media="(max-width: 480px)" srcset="{{ asset('assets/images/banner_rm_mobile.jpg') }}?t={{ time() }}" type="image/jpg">
					<source media="(min-width: 768px)" srcset="{{ asset("assets/images/banner_rm.png") }}?t={{ time() }}" type="image/png">
					<source media="(min-width: 768px)" srcset="{{ asset("assets/images/banner_rm.webp")}}?t={{ time() }}" type="image/webp">		
					<img src="{{ asset("assets/images/banner_rm.png"); }}?t={{ time() }}" alt="Banner RegiaMedik" class="img-fluid w-100">
				</picture>
			</div>
		</div>
		<a class="carousel-control-prev" href="#flechas" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#flechas" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
	</div>
	{{-- <picture>
		<source media="(max-width: 480px)" srcset="{{ asset('assets/images/banner_rm_mobile.webp') }}?t={{ time() }}" type="image/webp">
		<source media="(max-width: 480px)" srcset="{{ asset('assets/images/banner_rm_mobile.jpg') }}?t={{ time() }}" type="image/jpg">
		<source media="(min-width: 768px)" srcset="{{ asset("assets/images/banner_rm.png") }}?t={{ time() }}" type="image/png">
		<source media="(min-width: 768px)" srcset="{{ asset("assets/images/banner_rm.webp")}}?t={{ time() }}" type="image/webp">		
		<img src="{{ asset("assets/images/banner_rm.png"); }}?t={{ time() }}" alt="Banner RegiaMedik" class="img-fluid w-100">
	</picture> --}}
	{{-- <div class="st-wave-animation"></div>
	<div class="st-hero st-style1 py-5">
		<div class="container">
			<div class="st-hero-text">
				<h1 class="st-hero-title cd-headline slide">
					Ofrecemos<br>
					<span class="cd-words-wrapper" style="width: 330px;">
					<span class="cd-words-wrapper">
						<b class="is-hidden">distribución médica.</b>
						<b class="is-visible">exámenes clínicos.</b>
						<b class="is-hidden">laboratorios médicos.</b>
						<b class="is-hidden">resultados confiables.</b>
						<b class="is-hidden">unidades médicas.</b>
					</span>
				</h1>
				<div class="st-hero-subtitle">Conoce nuestra amplia gama de servicios integrales de salud.</div>
				<div class="st-hero-btn">
					<a href="#contacto" class="st-btn st-style1 st-color1 st-smooth-move">Estoy interesado</a>
				</div>
			</div>
		</div>
	</div> --}}
	<div class="st-slider st-style1 st-hero-slider1" id="home">
		<div class="slick-container" data-autoplay="1" data-loop="1" data-speed="800" data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1" data-fade-slide="1">
			<div class="slick-wrapper slick-initialized slick-slider slick-dotted">
					<div class="slick-list draggable">
						<div class="slick-track" style="opacity: 1; width: 1740px;">
							<div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 580px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 800ms ease 0s;" role="tabpanel" id="slick-slide00" tabindex="-1" aria-describedby="slick-slide-control00">
								<div>
									<div class="slick-slide-in" style="width: 100%; display: inline-block;">
										<div class="st-hero-img">
												{{-- <img src="{{ asset('assets/images/hero-img2.png') }}" alt="Hero img"> --}}
										</div>
									</div>
								</div>
							</div>
							<div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 580px; position: relative; left: -580px; top: 0px; z-index: 998; opacity: 0; transition: opacity 800ms ease 0s;" role="tabpanel" id="slick-slide01" tabindex="-1" aria-describedby="slick-slide-control01">
								<div>
									<div class="slick-slide-in" style="width: 100%; display: inline-block;">
										<div class="st-hero-img">
												{{-- <img src="{{ asset('assets/images/hero-img2.png') }}" alt="Hero img"> --}}
										</div>
									</div>
								</div>
							</div>
							<div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 580px; position: relative; left: -1160px; top: 0px; z-index: 998; opacity: 0; transition: opacity 800ms ease 0s;" role="tabpanel" id="slick-slide02" tabindex="-1" aria-describedby="slick-slide-control02">
								<div>
									<div class="slick-slide-in" style="width: 100%; display: inline-block;">
										<div class="st-hero-img">
												{{-- <img src="{{ asset('assets/images/hero-img2.png') }}" alt="Hero img"> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			</div>
		</div><!-- .slick-container -->
		<div class="pagination st-style1 container d-none">
			<ul class="slick-dots" role="tablist" style="display: flex;">
					<li class="slick-active" role="presentation">
						<button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 3" tabindex="-1">1</button>
					</li>
					<li role="presentation" class="">
						<button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 3" tabindex="-1">2</button>
					</li>
					<li role="presentation" class="">
						<button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 3" tabindex="0" aria-selected="true">3</button>
					</li>
			</ul>
		</div> <!-- If dont need Pagination then add class .st-hidden -->
		<div class="swipe-arrow st-style1 st-hidden">
			<!-- If dont need navigation then add class .st-hidden -->
			<div class="slick-arrow-left slick-arrow" style="display: block;"><i class="fa fa-angle-left"></i></div>
			<div class="slick-arrow-right slick-arrow" style="display: block;"><i class="fa fa-angle-right"></i></div>
		</div>
	</div><!-- .st-slider -->
</div>

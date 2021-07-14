@extends('layouts.app')

@section('title')
	- Amplia gama de servicios médicos
@endsection

@section('content')
	<!-- Banner area start -->
	<section class="position-relative banner banner-15" id="inicio">
		<div
			class="banner-inner d-flex align-items-center z-index-3 bg-center bg-norepeat main-bg"
			data-bg-image="{{ asset('img/bg/bg-1.jpg') }}"
			style="background-image: url('{{ asset('img/bg/bg-1.jpg') }}')"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-8 col-lg-8 order-2 order-md-1">
						<div class="banner-text text-left mt-5 mt-md-0  pr_sm-0 pr-2">
							<h1 class="wow fadeInUp"><span class="text-color">
								Soluciones</span> <br /> Integrales De Salud
							</h1>
							<p>Ofrecemos una amplia gama de servicios y medicamentos de alta calidad con la finalidad de mejorar la salud y el bienestar de nuestra comunidad.</p>
							<a href="#contacto" class="btn p-0 mt-3 wow fadeInUp">
								<span class="animated-gradient-button btn-small border border-color text-color hover-text-white hover-border-none rounded-0">Contáctanos <span class="animated grad-bg-19 top-bottom-slide"></span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- <div class="ptb-60"></div> --}}
	<!-- Banner area end -->
	<section class="healthcare-services-area position-relative space_dec-100 z-index-6" id="servicios">
			<div class="container">
					<div class="row no-gutters">
						<div class="col-md-3">
							<div class="heathcare-service box-1">
								<div class="services-info">
									<h5 class="text-white">Unidad Médica</h5>
									<p class="text-white mb-0 font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis semper felis.</p>
								</div>
								<a href="#" class="btn p-0 mt-3">
									<span class="animated-gradient-button btn-ex-small border border-white  hover-text-black hover-border-none rounded-0">Conocer más <span class="animated bg-white top-bottom-slide"></span></span>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="heathcare-service box-1 border-left">
								<div class="services-info">
									<h5 class="text-white">Laboratorio</h5>
									<p class="text-white mb-0 font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis semper felis.</p>
								</div>
								<a href="#" class="btn p-0 mt-3">
									<span class="animated-gradient-button btn-ex-small border border-white  hover-text-black hover-border-none rounded-0">Conocer Más <span class="animated bg-white top-bottom-slide"></span></span>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="heathcare-service box-1 border-left">
								<div class="services-info">
									<h5 class="text-white">Farmacia</h5>
									<p class="text-white mb-0 font-size-14">Compra y ordena a domicilio tus medicamentos desde nuestra farmacia online.</p>
								</div>
								<a href="#" class="btn p-0 mt-3">
									<span class="animated-gradient-button btn-ex-small border border-white  hover-text-black hover-border-none rounded-0">Conocer Más <span class="animated bg-white top-bottom-slide"></span></span>
								</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="heathcare-service box-1 border-left">
								<div class="services-info">
									<h5 class="text-white">Distribuidora</h5>
									<p class="text-white mb-0 font-size-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis semper felis.</p>
								</div>
								<a href="#" class="btn p-0 mt-3">
									<span class="animated-gradient-button btn-ex-small border border-white  hover-text-black hover-border-none rounded-0">Conocer Más <span class="animated bg-white top-bottom-slide"></span></span>
								</a>
							</div>
						</div>
					</div>
			</div>
	</section>
	{{-- <!-- Services -->
	<section class="position-relative ptb-80 ptb-sm-40 ptb-md-60 z-index-2" id="port">
			<div class="container">
					<div class="row">
							<div class="col-md-4">
									<div class="port mb-30 mb-lg-0">
											<div class="bpgPhoto btTextCenter wIconOver in-top">
												<a href="#" target="_self"></a>
												<div class="boldPhotoBox">
													<div class="bpbItem">
														<div class="btImage">
																<img src="img/section-img/healthcare-1.jpg" alt="healthcare-1">
														</div>
													</div>
												</div>
												<div class="captionPane">
													<div class="captionTable">
														<div class="captionCell">
															<i class="fa fa-search captionTxt"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="btIconImageRow btIconsHalfHoverPosition btCells-0">
												<span class="btIco btIcoFilledType btIcoBigSize btIcoAccentColor btIcoFromBottom btIcoOutline ">
													<a href="#" target="no_target" data-ico-cs="" class="btIcoHolder"><em></em></a>
												</span>
											</div>
											<div class="btClear btSeparator topExtraSmallSpaced noBorder">
													<hr>
											</div>
											<header class="header btClear medium  text-center">
												<div class="btSuperTitle">For your child whitest teeths</div>
												<div class="dash">
														<h3><span class="headline text-uppercase">DENTIST</span></h3>
												</div>
											</header>
											<div class="btClear btSeparator topExtraSmallSpaced noBorder">
													<hr>
											</div>
											<div class="btText text-center">
												<p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
											</div>
											<div class="btClear btSeparator topSmallSpaced noBorder">
												<hr>
											</div>
									</div>
							</div>
							<div class="col-md-4">
									<div class="port">
											<div class="bpgPhoto btTextCenter wIconOver in-top">
													<a href="#" target="_self"></a>
													<div class="boldPhotoBox">
															<div class="bpbItem">
																	<div class="btImage">
																			<img src="img/section-img/healthcare-2.jpg" alt="healthcare-2">
																	</div>
															</div>
													</div>
													<div class="captionPane">
															<div class="captionTable">
																	<div class="captionCell">
																			<i class="fa fa-search captionTxt"></i>
																	</div>
															</div>
													</div>
											</div>
											<div class="btIconImageRow btIconsHalfHoverPosition btCells-0">
													<span class="btIco btIcoFilledType btIcoBigSize btIcoAccentColor btIcoFromBottom btIcoOutline ">
															<a href="#" target="no_target" data-ico-cs="" class="btIcoHolder"><em></em></a>
													</span>
											</div>
											<div class="btClear btSeparator topExtraSmallSpaced noBorder">
													<hr>
											</div>
											<header class="header btClear medium  text-center">
													<div class="btSuperTitle">For your child whitest teeths</div>
													<div class="dash">
															<h3><span class="headline text-uppercase">Skin Specialist</span></h3>
													</div>
											</header>
											<div class="btClear btSeparator topExtraSmallSpaced noBorder">
													<hr>
											</div>
											<div class="btText text-center">
													<p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
											</div>
											<div class="btClear btSeparator topSmallSpaced noBorder">
													<hr>
											</div>
									</div>
							</div>
							<div class="col-md-4">
									<div class="sidebar-wrapper boxed-sidebar mt-5 mt-md-0">
											<div class="widget-area widget-search clearfix">
													<h2 class="widget-title p-0"> WORKING HOURS </h2>
													<p class="mt-0">Duis scelerisque faucibus nisi sed lacinia. Curabitur ipsum elit.</p>
													<ul class="hospital-time list-unstyled">
															<li>Monday<span class="time">8:00 AM – 2:30 PM</span></li>
															<li>Tuesday<span class="time">8:00 AM – 7:00 PM</span></li>
															<li>Wednesday<span class="time">8:00 AM – 7:00 PM</span></li>
															<li>Thursday<span class="time">8:00 AM – 7:00 PM</span></li>
															<li>Friday<span class="time">8:00 AM – 7:00 PM</span></li>
															<li>Saturday<span class="time">Closed</span></li>
															<li>Saturday<span class="time">Closed</span></li>
													</ul>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- About -->
	<section class="position-relative ptb-80 ptb-sm-40 ptb-md-60 z-index-2 gray-bg" id="about-sec">
			<div class="container">
					<div class="row">
							<div class="col-lg-5 position-relative">
									<img src="img/section-img/about-img.png" class="wow fadeInLeft" alt="digital_about">
							</div>
							<div class="col-lg-7 mt-30 mt-lg-0">
									<div class="section-title text-left mb-3 pl-0 pl-lg-5">
											<h2 class="wow fadeInRight" data-wow-duration=".3s">We Are Your Trusted Friend</h2>
											<p class="wow fadeInRight" data-wow-duration=".4s">Snail is a trusted name of Medical Services who is always at your side and your health is our first priority.</p>
									</div>
									<div class="text-center text-md-left pl-0 pl-lg-5">
											<div class="wow fadeInRight" data-wow-duration=".6s">
													<h3>24/7 Hour Support</h3>
													<p>Our medical team of different department for long term illness writers and editors makes all the.</p>
											</div>
											<div class="wow fadeInRight" data-wow-duration="1s">
													<h3>Emergency Support</h3>
													<p>Our medical team of different department for long term illness writers and editors makes all the.</p>
											</div>
											<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-start wow fadeInRight" data-wow-duration="1.4s">
													<a href="#" class="btn p-0 mt-25 wow fadeInUp">
															<span class="animated-gradient-button btn-small border border-color text-color hover-text-white hover-border-none rounded-0">Learn More <span class="animated grad-bg-19 top-bottom-slide"></span></span>
													</a>
													<a href="#" class="btn p-0 mt-25">
															<span class="icon-button-naked bg-transparent py-0">
																	<i class="fa fa-play grad-bg-19 ex-large shadow-none" aria-hidden="true"></i>
																	<span class="font-weight-500">Watch Now</span>
															</span>
													</a>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- About end -->
	<!-- What we do -->
	<section class="ptb-80 ptb-sm-40 ptb-md-60" id="What-we-do-sec">
			<div class="container">
					<div class="row justify-content-center">
							<div class="col-md-8">
									<div class="section-title text-center mb-5">
											<h2 class="wow fadeInUp">What we do best</h2>
											<p class="wow fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									</div>
							</div>
					</div>
					<div class="row no-gutters">
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp">
											<div class="text-center">
													<img src="img/healthcare/icon1.png" class="service-icon" alt="Dental">
											</div>
											<div class="last">
													<h3 class="text-center">Child</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp">
											<div class="text-center">
													<img src="img/healthcare/icon2.png" class="service-icon" alt="X-ray">
											</div>
											<div class="last">
													<h3 class="text-center">X-ray</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp">
											<div class="text-center">
													<img src="img/healthcare/icon3.png" class="service-icon" alt="Pregnancy">
											</div>
											<div class="last">
													<h3 class="text-center">Heart</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp">
											<div class="text-center">
													<img src="img/healthcare/icon4.png" class="service-icon" alt="disabled">
											</div>
											<div class="last">
													<h3 class="text-center">Kidney</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp">
											<div class="text-center">
													<img src="img/healthcare/icon5.png" class="service-icon" alt="Prostheses">
											</div>
											<div class="last">
													<h3 class="text-center">bones</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp">
											<div class="text-center">
													<img src="img/healthcare/icon6.png" class="service-icon" alt="magnetic">
											</div>
											<div class="last">
													<h3 class="text-center">brain</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp mb-lg-0">
											<div class="text-center">
													<img src="img/healthcare/icon7.png" class="service-icon" alt="Dental 2">
											</div>
											<div class="last">
													<h3 class="text-center">Dental</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp mb-lg-0">
											<div class="text-center">
													<img src="img/healthcare/icon9.png" class="service-icon" alt="X-ray 2">
											</div>
											<div class="last">
													<h3 class="text-center">X-ray</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp mb-lg-0">
											<div class="text-center">
													<img src="img/healthcare/icon8.png" class="service-icon" alt="Pregnancy 2">
											</div>
											<div class="last">
													<h3 class="text-center">Pregnancy</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp mb-lg-0">
											<div class="text-center">
													<img src="img/healthcare/icon10.png" class="service-icon" alt="for 2">
											</div>
											<div class="last">
													<h3 class="text-center">disabled</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp mb-lg-0">
											<div class="text-center">
													<img src="img/healthcare/icon11.png" class="service-icon" alt="Prostheses 2">
											</div>
											<div class="last">
													<h3 class="text-center">Prostheses</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
							<div class="col-md-4 col-lg-3 col-xl-2">
									<div class="medi-service wow fadeInUp mb-lg-0">
											<div class="text-center">
													<img src="img/healthcare/icon12.png" class="service-icon" alt="magnetic 2">
											</div>
											<div class="last">
													<h3 class="text-center">magnetic</h3>
													<p class="text-center mb-0">Quis autem vel eum iriure...<br /></p>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- What we do End-->
	<!-- Prescription Form -->
	<section class="position-relative ptb-80 ptb-md-60 ptb-sm-40 z-index-3 gray-bg">
			<div class="container">
					<div class="position-relative to-right rounded-10 px-3 py-4 p-lg-5 shadow-medium bg-cover bg-center bg-norepeat z-index-3 overflow-hidden prescription-bg" data-bg-image="img/bg/heallthcare-bg-2.jpg">
							<img src="img/shape/prescription-shape.png" class="position-absolute left-0 top-0 bottom-0" alt="prescription shape">
							<div class="row justify-content-center justify-content-lg-start">
									<div class="col-md-8 col-lg-6">
											<div class="section-title dark-version text-center text-lg-left section-heading">
													<h2 class="wow fadeInUp">Give Prescription Get Medicine</h2>
													<p class="text-white wow fadeInUp">Give your prescription online and get the medicine at your door at this corona pandemic. Stay home Stay Safe.</p>
													<a href="#" class="btn p-0 mt-3 wow fadeInUp">
															<span class="animated-gradient-button btn-small border border-white  hover-text-white hover-border-none rounded-0">Learn More <span class="animated grad-bg-19 to-right top-bottom-slide"></span></span>
													</a>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- Prescription form End -->
	<!-- Team area Start -->
	<section class="Team-area ptb-80 ptb-sm-40 ptb-md-60 " id="team-sec">
			<div class="container">
					<div class="row justify-content-center">
							<div class="col-md-8">
									<div class="section-title text-center mb-5">
											<h2 class="wow fadeInUp">Our Team</h2>
											<p class="wow fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									</div>
							</div>
					</div>
					<div class="row justify-content-center">
							<div class="col-lg-3 col-md-6">
									<div class="box-team with-bottom-line shadow-medium mb-30 mb-lg-0 p-0 wow fadeInUp">
											<div class="team-inner-img">
													<img src="img/team/t-d-1.jpg" alt="team" class="img-responsive" data-no-retina="">
													<div class="first-color healthcare-style center-block">
															<ul class="team-social-menu p-0">
																	<li><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
																	<li><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
																	<li><a href="javascript:void(0)" class="google-bg-hvr"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
															</ul>
													</div>
											</div>
											<div class="text-left p-4">
													<p class="color-light-grey font-weight-light designation text-capitalize mb-0">
															Creative Head
													</p>
													<h4 class="text-color font-weight-normal mt-2 text-capitalize">ben cook</h4>
													<p class="mb-0">Proin consequat, at commodo. Lorem ipsum dolor sit amet</p>
											</div>
									</div>
							</div>
							<div class="col-lg-3 col-md-6">
									<div class="box-team with-bottom-line shadow-medium mb-30 mb-lg-0 p-0 wow fadeInUp">
											<div class="team-inner-img">
													<img src="img/team/t-d-2.jpg" alt="team" class="img-responsive" data-no-retina="">
													<div class="first-color healthcare-style center-block">
															<ul class="team-social-menu p-0">
																	<li><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
																	<li><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
																	<li><a href="javascript:void(0)" class="google-bg-hvr"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
															</ul>
													</div>
											</div>
											<div class="text-left p-4">
													<p class="color-light-grey font-weight-light designation text-capitalize mb-0">
															Lead Designer
													</p>
													<h4 class="text-color font-weight-normal mt-2 text-capitalize">Jack Caprio</h4>
													<p class="mb-0">Proin consequat, at commodo. Lorem ipsum dolor sit amet</p>
											</div>
									</div>
							</div>
							<div class="col-lg-3 col-md-6">
									<div class="box-team with-bottom-line shadow-medium mb-30 mb-lg-0 p-0 wow fadeInUp">
											<div class="team-inner-img">
													<img src="img/team/t-d-3.jpg" alt="team" class="img-responsive" data-no-retina="">
													<div class="first-color healthcare-style center-block">
															<ul class="team-social-menu p-0">
																	<li><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
																	<li><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
																	<li><a href="javascript:void(0)" class="google-bg-hvr"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
															</ul>
													</div>
											</div>
											<div class="text-left p-4">
													<p class="col-form-label-light-grey font-weight-light designation text-capitalize mb-0">
															Marketing Head
													</p>
													<h4 class="text-color font-weight-normal mt-2 text-capitalize">Selena Johnson</h4>
													<p class="mb-0">Proin consequat, at commodo. Lorem ipsum dolor sit amet</p>
											</div>
									</div>
							</div>
							<div class="col-lg-3 col-md-6">
									<div class="box-team with-bottom-line shadow-medium mb-30 mb-lg-0 p-0 wow fadeInUp">
											<div class="team-inner-img">
													<img src="img/team/t-d-4.jpg" alt="team" class="img-responsive" data-no-retina="">
													<div class="first-color healthcare-style center-block">
															<ul class="team-social-menu p-0">
																	<li><a href="javascript:void(0)" class="facebook-bg-hvr"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
																	<li><a href="javascript:void(0)" class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
																	<li><a href="javascript:void(0)" class="google-bg-hvr"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
															</ul>
													</div>
											</div>
											<div class="text-left p-4">
													<p class="col-form-label-light-grey font-weight-light designation text-capitalize mb-0">
															Marketing Head
													</p>
													<h4 class="text-color font-weight-normal mt-2 text-capitalize">Selena Johnson</h4>
													<p class="mb-0">Proin consequat, at commodo. Lorem ipsum dolor sit amet</p>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!-- Team area End -->
	<!-- Team area Start -->
	<section class="position-relative ptb-80 ptb-sm-40 ptb-md-60 gray-bg" id="newsupdate">
			<div class="container">
					<div class="row justify-content-center">
							<div class="col-md-8">
									<div class="section-title text-center mb-5">
											<h2 class="wow fadeInUp">News & Updates</h2>
											<p class="wow fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									</div>
							</div>
					</div>
					<div class="row justify-content-center">
							<div class="col-md-6 col-lg-4 mb-30">
									<div class="blog-post blog-classic">
											<a class="blog-img" href="blog-details.html">
													<img src="img/blog/healthcare-1.jpg" alt="Blog 1">
											</a>
											<div class="blog-inner py-4 px-4">
													<div class="blog-meta">
															<a href="#">John Doe </a>
															<a href="#"> May 05, 2020 </a>
													</div>
													<h3 class="blog-title"><a href="blog-details.html" class="font-size-22">Ratcliffe To Be Director Of Nation Talent Ignored</a></h3>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-4 mb-30">
									<div class="blog-post blog-classic">
											<a class="blog-img" href="blog-details.html">
													<img src="img/blog/healthcare-2.jpg" alt="Blog 2">
											</a>
											<div class="blog-inner py-4 px-4">
													<div class="blog-meta">
															<a href="#">John Doe </a>
															<a href="#"> May 05, 2020 </a>
													</div>
													<h3 class="blog-title"><a href="blog-details.html" class="font-size-22">Ratcliffe To Be Director Of Nation Talent Ignored</a></h3>
											</div>
									</div>
							</div>
							<div class="col-md-6 col-lg-4 mb-30">
									<div class="blog-post blog-classic">
											<a class="blog-img" href="blog-details.html">
													<img src="img/blog/healthcare-3.jpg" alt="Blog 2">
											</a>
											<div class="blog-inner py-4 px-4">
													<div class="blog-meta">
															<a href="#">John Doe </a>
															<a href="#"> May 05, 2020 </a>
													</div>
													<h3 class="blog-title"><a href="blog-details.html" class="font-size-22">Ratcliffe To Be Director Of Nation Talent Ignored</a></h3>
											</div>
									</div>
							</div>
					</div>
			</div>
	</section> --}}
	<!-- Get started End -->
	<div class="ptb-60" id="contacto"></div>
	<section class="position-relative ptb-80 ptb-md-60 ptb-sm-40 z-index-3 overflow-hidden">
			<div class="container">
					<div class="row justify-content-center">
							<div class="col-md-8">
									<div class="section-title text-center mb-5">
											<h2 class="wow fadeInUp">Contacto</h2>
											<p class="wow fadeInUp">En Regia Medi-K nos complace estar en contacto contigo. Déjanos un mensaje y te estarémos respondiendo en breve.</p>
									</div>
							</div>
					</div>
					<div class="row justify-content-center">
							<div class="col-md-8">
									<form
										action="{{ env('CONTACT_FORM_ACTION') }}"
										target="_blank"
										class="border-style"
									>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group mb-30">
													<label for="name" class="sr-only">Nombre:</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Ingresa tu nombre*" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group mb-30">
													<label for="lastname" class="sr-only">Apellidos</label>
													<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Ingresa tu apellido*" required="">
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group mb-30">
													<label for="email" class="sr-only">Correo electrónico:</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico*" required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group mb-30">
													<label for="name" class="sr-only">Teléfono:</label>
													<input type="text" class="form-control" name="phone" id="phone" placeholder="Télefono*" required="">
												</div>
											</div>
										</div>
										<div class="form-group mb-30">
											<label for="message" class="sr-only">Mensaje:</label>
											<textarea cols="50" rows="5" name="message" id="message" placeholder="Mensaje*" required=""></textarea>
										</div>
										<button type="submit" class="btn text-center w-100">
											<span class="icon-button-rl btn-link text-color">
												<span>Enviar Mensaje</span>
												<i class="fa fa-arrow-right text-color border-color" aria-hidden="true"></i>
											</span>
										</button>
									</form>
							</div>
					</div>
			</div>
	</section>
@endsection

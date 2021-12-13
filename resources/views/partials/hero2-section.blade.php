<div class="st-height-b125 st-height-lg-b80" id="inicio"></div>
<div class="st-hero-wrap st-color1 overflow-hidden">	
	<div id="flechas" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			@include('ui.carousel')							
		</div>
		@if (count($attachments) > 1)
		<a class="carousel-control-prev" href="#flechas" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="carousel-control-next" href="#flechas" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Siguiente</span>
		</a>
		@endif
	</div>	
</div>

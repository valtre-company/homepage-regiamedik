
@foreach ($attachments as $key => $attachment) 
   <div class="carousel-item {{ !$key ? "active" : "" }} ">      
      <picture>		         
         <source media="(max-width: 480px)" srcset="{{ $attachment->attachmentMobile->url }}?t={{ time() }}" type="{{ $attachment->attachmentMobile->mime }}">			
         <source media="(max-width: 768px)" srcset="{{ $attachment->attachmentWeb->url }}?t={{ time() }}" type="{{ $attachment->attachmentWeb->mime }}">         	
         <img src="{{ $attachment->attachmentWeb->url }}?t={{ time() }}" alt="Banner RegiaMedik" class="img-fluid w-100">
      </picture>
      {{-- <img src="{{ $attachment->attachment->url }}?t={{ time() }}" alt="{{ $attachment->title ? $attachment->title : 'Imagen Carousel' }}"> --}}
   </div>
@endforeach
@php $count = 0; @endphp
@foreach ($attachments as $key => $attachment)      
   @if($attachment->attachmentWeb)
   <div class="carousel-item {{ !$count ? 'active' : '' }}">
      <picture>		         
         <source media="(max-width: 480px)" srcset="{{ $attachment->attachmentMobile->url }}?t={{ time() }}" type="{{ $attachment->attachmentMobile->mime }}">			
         <source media="(max-width: 768px)" srcset="{{ $attachment->attachmentWeb->url }}?t={{ time() }}" type="{{ $attachment->attachmentWeb->mime }}">         	
         <img data-src="{{ $attachment->attachmentWeb->url }}?t={{ time() }}" src="/storage/2021/12/06/{{$attachment->attachmentWeb->url }}" alt="Banner RegiaMedik" class="img-fluid w-100 lazyload" loading="lazy">
      </picture>      
   </div>
   @php $count++; @endphp
   @endif
@endforeach

@foreach ($attachments as $key => $attachment) 
   <div class="carousel-item {{ !$key ? "active" : "" }} {{ ("carousel-item-" . $attachment->attachment_type) }}">
      <img src="{{ $attachment->attachment->url }}?t={{ time() }}" alt="{{ $attachment->title ? $attachment->title : 'Imagen Carousel' }}">
   </div>
@endforeach
<?php

namespace App\Service;

use Intervention\Image\Facades\Image;

class ImageService {
   public static function resizeMainCarousel($fullPath, $width, $height) {   
      Image::make($fullPath)      
         ->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
         })
      ->save($fullPath);
   }
}

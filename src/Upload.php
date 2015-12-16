<?php

namespace Tuta\Upload;

use Intervention\Image\Facades\Image;
//use Illuminate\Http\Request;
//use App\Http\Requests;
use Illuminate\Support\Facades\Request;

class Upload {

  public function image($image, $image_name, $path, $width, $height)
  {
    $name_of_image = $image_name . '.' . Request::file($image)->getClientOriginalExtension();
    Request::file($image)->move(
    base_path() . $path, $name_of_image
    );
    $img = Image::make(base_path() . $path . $name_of_image);
    $img->resize($width, $height, function ($constraint) {
      $constraint->aspectRatio();
    });
    return $name_of_image;
  }
}

 ?>

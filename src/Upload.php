<?php

namespace Tuta\Upload;

use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Request;
use Storage, File;

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
  public function file($file, $path)
  {
    $file_name = uniqid('TUTA_', true) . '_' . str_random(5) . '.' . $file->getClientOriginalExtension();
    Storage::put($path.'/'.$file_name,  $file);
    return [
        'name' => $file_name,
        'size' => $file->getClientSize(),
        'mime' => $file->getClientMimeType()
    ];
  }
}

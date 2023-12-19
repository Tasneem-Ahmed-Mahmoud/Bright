<?php
use Illuminate\Support\Facades\File;

if (!function_exists('uploadImage ')) {
    function uploadImage($image, $path,$old_image=null)
    {
        
      if($old_image){
        deleteImage($old_image,$path);
      }
     if (!File::exists($path)) {
        File::makeDirectory($path, 0755, true);
    }
   
    $imageName =$image->getClientOriginalName();
 
    File::put($path . $imageName, file_get_contents($image));
   return $imageName;
    }
}
if (!function_exists('deleteImage ')) {
    function deleteImage($image, $path)
    {
        $path=public_path($path.$image);
        if(File::exists($path) && !File::isDirectory($path)){
            File::delete($path);
        }
    }
}
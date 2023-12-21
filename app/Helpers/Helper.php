<?php
use Illuminate\Support\Str;
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


if (!function_exists('url_handel')) {
    function url_handel($url){
        if(Str::contains($url,'services/')){
            return str::replace('services/','',$url);
       
        }
}


if (!function_exists('splitParagraph')) {
function splitParagraph($text)
{
    $sentences = explode('.', $text);
    $sentences = array_filter($sentences, function ($sentence) {
        return !empty(trim($sentence));
    });
    return $sentences;
}
}
}
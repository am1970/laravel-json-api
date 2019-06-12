<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
   public function save(Request $request)
   {
       $path = '/uploads/image/image_'.time().'.png';

       Image::make(file_get_contents($request->all()['image']))->save(public_path().$path);

       return response()->json(['image_path' => url($path)]);
   }
}
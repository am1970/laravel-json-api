<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JsonController extends Controller
{
   public function get()
   {
       if(Storage::disk('local')->exists('data.json')) {
           return response()->json(json_decode(Storage::disk('local')->get('data.json')));
       }

       return response();
   }

   public function save(Request $request)
   {
       try {
           Storage::disk('local')->put('data.json', json_encode($request->all()));

           return response()->json(['success' => true]);

       } catch(\Exception $e) {

           return response()->json(['success' => false, 'error' => true, 'message' => $e->getMessage()]);
       }
   }
}
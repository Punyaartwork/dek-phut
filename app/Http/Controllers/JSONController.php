<?php
 
namespace App\Http\Controllers;
use Redirect,Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JsonController extends Controller
{
   public function index()
   {
      return view('subjects');
   }  
 
  public function download(Request $request)
  {
      $data = $request->only('name','email','mobile_number' ,'datajson');
    //   $test['token'] = time();
      $tojson = json_decode($data['datajson']);
      $test['data'] = json_encode($tojson); 
      $fileName = 'pali.json';
      File::put(public_path('/upload/json/'.$fileName),$test);
      return Response::download(public_path('/upload/json/'.$fileName));
  }
 
}
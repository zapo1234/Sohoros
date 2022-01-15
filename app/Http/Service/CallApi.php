<?php
namespace App\Http\Service;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

Class CallApi
{

  public function callApiget(string $url) :array
  {
    $response = Http::get($url);
    return $response->json();
  }

}












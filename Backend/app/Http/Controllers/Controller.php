<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function respondWithToken($token, $responseMessage, $data){
        return \response()->json([
          "success" => true,
          "message" => $responseMessage,
          "data" => $data,
          "token" => $token,
          "token_type" => "bearer",
        ],200);
    }
}

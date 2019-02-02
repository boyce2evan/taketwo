<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Auth extends Controller
{
    public function login(Request $request)
    {
        $email= $request->email;
        $password= $request->password;
        return response()->json([
            'error'=> false,
            "user"=> [
                'nama'=> $email
            ]
        ]);
    }
}

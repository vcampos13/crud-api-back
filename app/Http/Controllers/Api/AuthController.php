<?php

namespace App\Http\Controllers\Api;

use App\User;
//use User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{

    CONST HTTP_OK = Response::HTTP_OK;
    CONST HTTP_CREATED = Response::HTTP_CREATED;
    CONST HTTP_UNAUTHORIZED = Response::HTTP_UNAUTHORIZED;

    public function login(Request $request){

        $credentials = [

            'email' => $request->email,
            'password' => $request->password

        ];

        if( auth()->attempt($credentials) ){

            $user = Auth::user();

            $token['token'] = $this->getUserToken($user,"TestToken");

            $response = self::HTTP_OK;

            return $this->getHttpResponse( "success", $token, $response );

        } else {

            $error = "Unauthorized Access";

            $response = self::HTTP_UNAUTHORIZED;

            return $this->getHttpResponse( "Error", $error, $response );
        }

    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',

        ]);

        if ($validator->fails()) {
            return response()->json([ 'error'=> $validator->errors() ]);
        }

        $data = $request->all();

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        $success['token'] = $this->getUserToken($user,"TestToken");

        $success['name'] =  $user->name;

        $response =  self::HTTP_CREATED;

        return $this->getHttpResponse( "success", $success, $response );

    }

    public function getUserDetailsInfo()
    {

        $user = Auth::user();

        $response =  self::HTTP_OK;

        return $user ? $this->getHttpResponse( "success", $user, $response )
            : $this->getHttpResponse( "Unauthenticated user", $user, $response );

    }

    public function getHttpResponse(string $status = null, $data = null, $response ){

        return response()->json([
            'status' => $status,
            'data' => $data,
        ], $response);
    }

    public function getUserToken( $user, string $token_name = null ) {

        return $user->createToken($token_name)->accessToken;

    }
}
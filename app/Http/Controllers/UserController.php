<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Validation\LoginValidation;
use Illuminate\Support\Facades\Validator;
use App\Http\Validation\RegisterValidation;

class UserController extends Controller
{
    public function register(Request $request, RegisterValidation $validation) {
        $validator = Validator::make($request->all(), $validation->rules(), $validation->messages());

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        }

        $user = User::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'password' => bcrypt($request->input('password')),
            'api_token' => Str::random(60)
        ]);

        return response()->json($user);
    }

    public function login(request $request, LoginValidation $validation) {

        $validator = Validator::make($request->all(), $validation->rules(), $validation->messages());

        if($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 401);
        }

        if(Auth::attempt([ 'email' => $request->input('email'), 'password' => $request->input('password')])) {
            $user = User::where('email', $request->input('email'))->firstOrFail();

        if (Auth::user()->usertype == 'admin') {
            return redirect('admin') ;
            } else {
            return redirect('cart')  ;

            }    
    } else {
            return response()->json(['errors' => 'bad_credentials'], 401);
        }
    }
}
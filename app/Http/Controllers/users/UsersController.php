<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{

    function register(Request $request){

        return view('users.register');
    }

    function register_submit(Request $request){

        $validation = Validator::make($request->all(), [
            'full_name' => 'required',
            'email' =>  'required',
        ]);

        if($validation->fails()) {
            return $this->errorResponse($validation->messages(), static::CODE_ERROR_VALIDATION);
        }

        $user = User::create(
            ([
                "nama_lengkap"=>$request->full_name,
                "jenis_kelamin"=> $request->gender,
                "email"=> $request->email,
                "nomor_telepon"=> $request->phone_code.$request->phone,
                "password"=> Hash::make($request->password),
                "created_at"=>date('Y-m-d H:i:s'),
                "created_by"=>date('Y-m-d H:i:s'),
            ])
        );
        Session(['user' => $user]);
        return json_encode(['status'=> true, 'message'=> 'success']);
    }

    function login(){
        return view('users.login');
    }

    function login_submit(Request $request){

        $email = $request->email;
        $password = $request->password;
        $validation = Validator::make($request->all(), [
            'email' =>  'required',
            'password' =>  'required',
        ]);

        if($validation->fails()) {
            return $this->errorResponse($validation->messages(), static::CODE_ERROR_VALIDATION);
        }

        $get_password = User::select('password')->where('email','=',$email)->first();

        if($get_password){
            if (Hash::check($password, $get_password->password)) {

//                Session(['user' => $user]);
                $response = [
                    'success' => "Login Berhasil"
                ];
                return $this->successResponse($response);


            }else{
                return $this->errorResponse( "User Tidak ditemukan, Silahkan cek ulang email dan password Anda", static::CODE_USER_NOT_FOUND);
            }

        }
    }



    function account_profile(Request $request){
        $user = $this->user;
        return view('users.account');
    }
}

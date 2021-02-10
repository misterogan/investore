<?php

namespace App\Http\Controllers\admin;

use App\Assets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AssetsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $assets = Assets::paginate(10);
        return view('admin.assets.index',['assets' => $assets]);
    }

    public function submit(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'asset_name' => 'required',

        ]);

        if($validation->fails()) {

            return json_encode(['status'=> false, 'message'=> "Error Validation"]);
        }

        Assets::create(
            ([
                "asset_name"=>$request->asset_name,
                "status"=> 1,
                "created_by"=> Auth::user()->name,
                "created_at"=>date('Y-m-d H:i:s'),
                "updated_at"=>date('Y-m-d H:i:s'),
            ])
        );

        return json_encode(['status'=> true, 'message'=> "Success"]);
    }

    public function update(Request $request)
    {
        $id = $request->id;

        if($request->status == 'inactive'){
            $status = 0;
        }else{
            $status = 1;
        }

        Assets::where('id','=',$id)->update(
            array(
                'status'=> $status,
            )
        );
        return json_encode(['status'=> true, 'message'=> "Update Success"]);

    }



}

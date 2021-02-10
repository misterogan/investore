<?php

namespace App\Http\Controllers\admin;

use App\ExpectationOnInvesments;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpectationOnInvesmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $expectations = ExpectationOnInvesments::paginate(10);
        return view('admin.eoi.index',['expectations' => $expectations]);
    }

    public function submit(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'asset_name' => 'required',

        ]);

        if($validation->fails()) {

            return json_encode(['status'=> false, 'message'=> "Error Validation"]);
        }

        ExpectationOnInvesments::create(
            ([
                "expectation"=>$request->expecation_name,
                "status"=> 1,
                "created_by"=> Auth::user()->name,
                "created_at"=>date('Y-m-d H:i:s'),
                "updated_at"=>date('Y-m-d H:i:s'),
            ])
        );

        return json_encode(['status'=> true, 'message'=> "Success"]);
    }

}

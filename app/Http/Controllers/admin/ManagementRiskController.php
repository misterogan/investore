<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\ManagementRisk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ManagementRiskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $management_risk = ManagementRisk::paginate(10);
        return view('admin.managementrisk.index',['management_risk' => $management_risk]);
    }

    public function submit(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'management_risk' => 'required',

        ]);

        if($validation->fails()) {

            return json_encode(['status'=> false, 'message'=> "Error Validation"]);
        }

        ManagementRisk::create(
            ([
                "management_risk"=>$request->management_risk,
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

        ManagementRisk::where('id','=',$id)->update(
            array(
                'status'=> $status,
            )
        );
        return json_encode(['status'=> true, 'message'=> "Update Success"]);

    }

}

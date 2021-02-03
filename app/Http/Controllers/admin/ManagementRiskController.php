<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\ManagementRisk;
use Illuminate\Http\Request;

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

}

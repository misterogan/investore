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

}

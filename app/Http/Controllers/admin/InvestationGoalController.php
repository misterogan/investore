<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\InvestationGoal;
use Illuminate\Http\Request;

class InvestationGoalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){

        $investation_goal = InvestationGoal::paginate(10);
        return view('admin.investgoal.index',['investation_goal' => $investation_goal]);
    }
}

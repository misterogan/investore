<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Traits\JsonResponser;

class Controller extends BaseController
{
    use JsonResponser;
    protected const CODE_ERROR_VALIDATION = 'E201';
    protected const CODE_USER_NOT_FOUND = 'E202';


    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $user;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Session::get('user');
            return $next($request);
        });
    }

}

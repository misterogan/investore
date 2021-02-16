<?php

namespace App\Traits;

trait JsonResponser{

    protected function successResponse($data, $message = "success", $code = "000")
    {
        return response()->json([
            'status'=> 'success',
            'code' => $code,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    protected function errorResponse($message = null, $code)
    {
        return response()->json([
            'status'=>'error',
            'code' => $code,
            'message' => $message,
            'data' => null
        ], 200);
    }

}

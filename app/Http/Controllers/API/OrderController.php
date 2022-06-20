<?php

namespace App\Http\Controllers\API;
use App\Models\order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        $result = order::with('customer', 'product')->get();

        return response()->json($result, 200);
    }
}

<?php

namespace App\Http\Controllers\API;
use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductControlle extends Controller
{
    public function index()
    {
        $result = product::with('categori')->get();

        return response()->json($result, 200);
    }
}

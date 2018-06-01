<?php

namespace App\Http\Controllers;

use App\Sku;

use Illuminate\Http\Request;

class SkuController extends Controller
{
    public function index()
    {
        $skuList = Sku::all();
        return view('index', compact('skuList'));
    }
    public function getSkuName(Request $request)
    {
        $skuId = $request->route('id');
        return json_encode(Sku::find($skuId));
    }
}

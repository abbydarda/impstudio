<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Merchants;
use Carbon\Carbon;
use DataTables;

class ProductsController extends Controller
{
    public function all()
    {
        return Datatables::of(Products::join('merchants', 'products.merchant_id', '=', 'merchants.id')
        ->get(['products.*', 'merchants.merchant_name']))->make(true); 
    }

    public function get($id)
    {
        return Products::join('merchants', 'products.merchant_id', '=', 'merchants.id')
        ->where('products.id',$id)
        ->get(['products.*', 'merchants.merchant_name'])->first();     
    }

    public function create(Request $request)
    {
        $request->request->add(["created_at" => Carbon::now()->toDateTimeString()]);
        Products::create($request->all());
        return response()->json([
            "status" => 1
        ]);
    }

    public function update(Request $request,$id)
    {
        Products::where('id', $id)->update($request->all());        
        return response()->json([
            "status" => 1
        ]);
    }

    public function delete($id)
    {
        Products::destroy($id);       
        return response()->json([
            "status" => 1
        ]);
    }
}

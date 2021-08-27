<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Merchants;
use DataTables;

class MerchantsController extends Controller
{
    public function all()
    {
        return Datatables::of(Merchants::all())->make(true);
    }

    public function get($id)
    {
        return Merchants::find($id);        
    }

    public function create(Request $request)
    {
        $request->request->add(["created_at" => Carbon::now()->toDateTimeString()]);
        Merchants::create($request->all());
        return response()->json([
            "status" => 1
        ]);
    }

    public function update(Request $request,$id)
    {
        Merchants::where('id', $id)->update($request->all());        
        return response()->json([
            "status" => 1
        ]);
    }

    public function delete($id)
    {
        Merchants::destroy($id);        
        return response()->json([
            "status" => 1
        ]);
    }
}

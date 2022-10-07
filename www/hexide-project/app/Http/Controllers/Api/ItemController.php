<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return response()->json([
            'status' => 'success',
            'items' => Item::paginate(10),
        ]);
    }

    public function show($id)
    {
        $item = Item::find($id);
        return response()->json([
            'status' => 'success',
            'item' => $item,
        ]);
    }

}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ItemOrder;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|array',
            'items.*.item_id' => 'required|integer|exists:items,id',
            'items.*.quantity' => 'required|integer',
        ]);

        $order = Order::create([
            'number' => time(),
            'user_id' => auth()->user()->id,
        ]);

        foreach ($request->items as $item) {
            ItemOrder::create([
                'item_id' => $item['item_id'],
                'order_id' => $order->id,
                'quantity' => $item['quantity'],
            ]);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Order created successfully',
            'order' => $order,
        ]);
    }

}

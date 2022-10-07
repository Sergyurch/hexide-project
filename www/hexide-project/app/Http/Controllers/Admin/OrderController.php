<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        return view('admin.order.index', ['orders' => Order::paginate(10)]);
    }

    public function show($id) {
        return view('admin.order.show', ['order' => Order::find($id)]);
    }

    public function destroy($id) {
        Order::destroy($id);
        return redirect()->route('admin.orders.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function index() {
        return view('admin.item.index', ['items' => Item::paginate(10)]);
    }

    public function show($id) {
        return view('admin.item.show', ['item' => Item::find($id)]);
    }

    public function destroy($id) {
        Item::destroy($id);
        return redirect()->route('admin.items.index');
    }
}
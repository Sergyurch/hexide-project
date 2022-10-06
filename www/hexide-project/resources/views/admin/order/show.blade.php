@extends('adminlte::page')

@section('content')
    <div class="py-3">Order number: {{ $order->number }}</div>
    <div class="">Client: <a href="{{ route('admin.users.show', ['user' => $order->user->id]) }}">{{ $order->user->name }}</a></div>
    <h2 class="text-center">Order items</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Item</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('admin.items.show', ['item' => $item->id]) }}">{{ $item->title }}</a></td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->pivot->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
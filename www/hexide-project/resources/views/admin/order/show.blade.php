@extends('adminlte::page')

@section('content')
    <div class="py-3">{{ __('content.order_number') }}: {{ $order->number }}</div>
    <div class="">{{ __('content.client') }}: <a href="{{ route('admin.users.show', ['user' => $order->user->id]) }}">{{ $order->user->name }}</a></div>
    <h2 class="text-center">{{ __('content.order_items') }}</h2>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">{{ __('content.item') }}</th>
                <th scope="col">{{ __('content.price') }}</th>
                <th scope="col">{{ __('content.quantity') }}</th>
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
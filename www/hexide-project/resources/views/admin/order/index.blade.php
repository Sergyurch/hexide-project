@extends('adminlte::page')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">{{ __('content.order_number') }}</th>
                <th scope="col">{{ __('content.client') }}</th>
                <th scope="col">{{ __('content.date') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td><a href="{{ route('admin.orders.show', ['order' => $order->id]) }}">{{ $order->number }}</a></td>
                    <td><a href="{{ route('admin.users.show', ['user' => $order->user->id]) }}">{{ $order->user->name }}</a></td>
                    <td>{{ $order->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="mt-5">{{ $orders->links() }}</div>
@stop
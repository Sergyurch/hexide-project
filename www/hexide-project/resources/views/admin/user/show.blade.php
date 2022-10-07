@extends('adminlte::page')

@section('content')
    <div>{{ __('content.name') }}: {{ $user->name }}</div>
    <div>{{ __('content.email') }}: {{ $user->email }}</div>
    <div class="mt-3 mb-3">
        <a href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" class="btn btn-danger">{{ __('content.delete') }}</a>
        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">{{ __('content.cancel') }}</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">{{ __('content.order_number') }}</th>
                <th scope="col">{{ __('content.date') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->orders as $order)
                <tr>
                    <td><a href="{{ route('admin.orders.show', ['order' => $order->id]) }}">{{ $order->number }}</a></td>
                    <td>{{ $order->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>   
@stop
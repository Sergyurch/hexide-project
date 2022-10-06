@extends('adminlte::page')

@section('content')
    <div>Name: {{ $user->name }}</div>
    <div>Email: {{ $user->email }}</div>
    <div class="mt-3 mb-3">
        <a href="{{ route('admin.users.destroy', ['user' => $user->id]) }}" class="btn btn-danger">Delete</a>
        <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Cancel</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Order number</th>
                <th scope="col">Date</th>
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
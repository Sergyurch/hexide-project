@extends('adminlte::page')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td><a href="{{ route('admin.items.show', ['item' => $item->id]) }}">{{ $item->title }}</a></td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="mt-5">{{ $items->links() }}</div>
@stop
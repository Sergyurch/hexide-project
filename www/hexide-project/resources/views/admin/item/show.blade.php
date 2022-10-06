@extends('adminlte::page')

@section('content')
    <div class="py-3 text-center">
        <img src="{{ $item->image_path }}">
    </div>
    <div class="mb-3"><span class="font-weight-bold">Title:</span> {{ $item->title }}</div>
    <div class="mb-3"><span class="font-weight-bold">Description:</span> {{ $item->description }}</div>
    <div class="mb-3"><span class="font-weight-bold">Price:</span> {{ $item->price }}</div>
    <div class="mb-3"><span class="font-weight-bold">Created at:</span> {{ $item->created_at }}</div>
    <div class="py-3">
        <a href="{{ route('admin.items.destroy', ['item' => $item->id]) }}" class="btn btn-danger">Delete</a>
        <a href="{{ route('admin.items.index') }}" class="btn btn-primary">Cancel</a>
    </div>
@stop
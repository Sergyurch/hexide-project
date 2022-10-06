@extends('adminlte::page')

@section('content')
    <div class="py-3 text-center">
        <img src="{{ $item->image_path }}">
    </div>
    <div class="mb-3"><span class="font-weight-bold">{{ __('content.title') }}:</span> {{ $item->title }}</div>
    <div class="mb-3"><span class="font-weight-bold">{{ __('content.description') }}:</span> {{ $item->description }}</div>
    <div class="mb-3"><span class="font-weight-bold">{{ __('content.price') }}:</span> {{ $item->price }}</div>
    <div class="mb-3"><span class="font-weight-bold">{{ __('content.created_at') }}:</span> {{ $item->created_at }}</div>
    <div class="py-3">
        <a href="{{ route('admin.items.destroy', ['item' => $item->id]) }}" class="btn btn-danger">{{ __('content.delete') }}</a>
        <a href="{{ route('admin.items.index') }}" class="btn btn-primary">{{ __('content.cancel') }}</a>
    </div>
@stop
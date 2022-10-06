@extends('adminlte::page')

@section('content')
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><a href="{{ route('admin.users.show', ['user' => $user->id]) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="mt-5">{{ $users->links() }}</div>
@stop
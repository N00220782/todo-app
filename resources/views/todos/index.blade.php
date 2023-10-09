@extends('layouts.app')

@section('content')
<h2>Todos</h2>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Snippet</th>
            <th>Created</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($todos as $todo)
            <tr>
                <td>{{ $todo->title }}</td>
                <td>{{ $todo->body }}</td>
                <td>{{ $todo->created_at }}</td>
                <td><a href="#" >Read More</a></td>
            </tr>

            @empty
            <h4>no todos found</h4>
        @endforelse
    </tbody>
</table>
@endsection
@extends('layouts.app')
@section('content')
<h1>Categories</h1>
<a href="{{ route('categories.create') }}">Create New</a>
<table>
    <tr>
        <th>Name</th><th>Type</th><th>Active</th><th>Actions</th>
    </tr>
    @foreach ($data as $category)
    <tr>
        <td>{{ $category->name }}</td>
        <td>{{ $category->type }}</td>
        <td>{{ $category->is_active ? 'Yes' : 'No' }}</td>
        <td>
            <a href="{{ route('categories.edit', $category) }}">Edit</a>
            <form method="POST" action="{{ route('categories.destroy', $category) }}" style="display:inline">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
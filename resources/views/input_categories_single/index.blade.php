@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="flex-1 p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-black-800">single column</h1>
            <a href="{{ route('column.create') }}"
                class="bg-black hover:bg-gray-800 text-black font-semibold py-2 px-4 rounded shadow">
                Create New
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Type</th>
                        <th class="px-6 py-3">Image</th>
                        <th class="px-6 py-3">Active</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($data); --}}
                    @foreach ($data as $column)
                        @php
                            $columns = ($column->value);
                            // @dd($column->type)
                           // decode as associative array
                        @endphp
                        
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                                <td class="px-6 py-4 text-gray-900 dark:text-white">
                                    {{ $columns->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $columns->type }}
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-medium rounded 
                                    {{ $columns->is_active ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                        {{ $columns->is_active ? 'Yes' : 'No' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('categories/' . $columns->image ?? '') }}" alt="Your Image"
                                        width="80px" height="80px" class="rounded">

                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-4">
                                         <a href="{{ route('column.edit', $column) }}"
                                            class="text-blue-600 hover:underline text-sm">Edit</a>
                                        <a href="{{ route('column.show', $column) }}"
                                            class="text-blue-600 hover:underline text-sm">Show</a> 

                                        <form method="POST" action="{{ route('column.destroy', $column) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:underline text-sm">Delete</button>
                                        </form> 
                                    </div>
                                </td>
                            </tr>
                     
                    @endforeach

                    @if ($data->isEmpty())
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500">No categories found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

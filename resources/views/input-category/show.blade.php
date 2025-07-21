@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-800">Category Details</h1>
        <div class="flex space-x-2">
            <a href="{{ route('categories.edit', $category) }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Edit</a>
            <a href="{{ route('categories.index') }}" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">Back to List</a>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-6">
        {{-- Name & Quantity --}}
        <div class="md:flex md:gap-6 mb-6">
            <div class="md:w-1/2 mb-4 md:mb-0">
                <label class="block text-sm font-medium text-gray-500 mb-1">Name</label>
                <p class="text-lg font-medium text-gray-800">{{ $category->name }}</p>
            </div>
            <div class="md:w-1/2">
                <label class="block text-sm font-medium text-gray-500 mb-1">Quantity</label>
                <p class="text-lg text-gray-800">{{ $category->quantity ?? 'N/A' }}</p>
            </div>
        </div>

        {{-- Type & Is Active --}}
        <div class="md:flex md:gap-6 mb-6">
            <div class="md:w-1/2 mb-4 md:mb-0">
                <label class="block text-sm font-medium text-gray-500 mb-1">Type</label>
                <p class="text-lg text-gray-800">{{ $category->type }}</p>
            </div>
            <div class="md:w-1/2">
                <label class="block text-sm font-medium text-gray-500 mb-1">Status</label>
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $category->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                </span>
            </div>
        </div>

        {{-- Description --}}
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-500 mb-1">Description</label>
            <p class="text-gray-800 whitespace-pre-line">{{ $category->description ?? 'No description provided' }}</p>
        </div>

        {{-- Image --}}
        @if($category->image_path)
        <div class="mb-6">
            <label class="block text-sm font-medium text-gray-500 mb-1">Image</label>
            <div class="mt-2">
                <img src="{{ asset('categories/'.$category->image_path) }}" alt="Category Image" class="max-w-xs rounded-md shadow-sm" width="80" height="80">
            </div>
        </div>
        @endif

        {{-- Availability Information --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
            @if($category->available_on)
            <div>
                <label class="block text-sm font-medium text-gray-500 mb-1">Available On</label>
                <p class="text-gray-800">{{ \Carbon\Carbon::parse($category->available_on)->format('M d, Y') }}</p>
            </div>
            @endif
            
            @if($category->available_at)
            <div>
                <label class="block text-sm font-medium text-gray-500 mb-1">Available At</label>
                <p class="text-gray-800">{{ \Carbon\Carbon::parse($category->available_at)->format('h:i A') }}</p>
            </div>
            @endif
            
            @if($category->available_datetime)
            <div>
                <label class="block text-sm font-medium text-gray-500 mb-1">Available Datetime</label>
                <p class="text-gray-800">{{ \Carbon\Carbon::parse($category->available_datetime)->format('M d, Y h:i A') }}</p>
            </div>
            @endif
        </div>

        {{-- Contact Information --}}
        <div class="md:flex md:gap-6 mb-6">
            @if($category->email)
            <div class="md:w-1/2 mb-4 md:mb-0">
                <label class="block text-sm font-medium text-gray-500 mb-1">Email</label>
                <p class="text-gray-800">{{ $category->email }}</p>
            </div>
            @endif
            
            @if($category->url)
            <div class="md:w-1/2">
                <label class="block text-sm font-medium text-gray-500 mb-1">URL</label>
                <a href="{{ $category->url }}" target="_blank" class="text-blue-600 hover:underline">{{ $category->url }}</a>
            </div>
            @endif
        </div>

        {{-- Additional Information --}}
        <div class="md:flex md:gap-6">
            @if($category->color)
            <div class="md:w-1/2 mb-4 md:mb-0">
                <label class="block text-sm font-medium text-gray-500 mb-1">Color</label>
                <div class="flex items-center">
                    <div class="w-8 h-8 rounded-full mr-2 border border-gray-300" style="background-color: {{ $category->color }}"></div>
                    <span class="text-gray-800">{{ $category->color }}</span>
                </div>
            </div>
            @endif
            
            @if($category->password)
            <div class="md:w-1/2">
                <label class="block text-sm font-medium text-gray-500 mb-1">Password</label>
                <p class="text-gray-800">••••••••</p>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
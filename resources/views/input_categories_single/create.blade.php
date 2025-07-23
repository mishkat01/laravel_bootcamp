@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white shadow-md rounded-lg p-8">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Create single column category</h1>

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('column.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf

        @include('input-category.form')
        
        <div class="text-right">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-black font-semibold px-6 py-2 rounded shadow transition duration-150">
                Save
            </button>
        </div>
    </form>
</div>
@endsection

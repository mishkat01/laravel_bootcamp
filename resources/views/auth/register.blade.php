{{-- resources/views/auth/register.blade.php --}}
@extends('auth.layout.auth-master')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
    <div class="w-full max-w-md">
        <div class="bg-white shadow-md rounded-2xl p-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">{{ __('Register') }}</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ __('Name') }}
                    </label>
                    <input id="name" type="text"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none @error('name') border-red-500 @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ __('Email Address') }}
                    </label>
                    <input id="email" type="email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none @error('email') border-red-500 @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ __('Password') }}
                    </label>
                    <input id="password" type="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none @error('password') border-red-500 @enderror"
                        name="password" required autocomplete="new-password">
                    @error('password')
                        <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="mb-6">
                    <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ __('Confirm Password') }}
                    </label>
                    <input id="password-confirm" type="password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none"
                        name="password_confirmation" required autocomplete="new-password">
                </div>

                {{-- Submit Button --}}
                <div>
                    <button type="submit"
                        class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<!-- resources/views/child.blade.php -->
<div
    class="w-64 bg-gradient-to-b from-indigo-800 to-purple-900 text-white shadow-lg transform transition-all duration-300 ease-in-out hover:shadow-xl">
    <!-- Logo/Brand -->
    <div class="p-4 flex items-center space-x-3 border-b border-purple-700">
        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center">
            <i class="fas fa-cog text-indigo-600 text-xl animate-spin"></i>
        </div>
        <h1 class="text-xl font-bold">Admin<span class="text-purple-300">Pro</span></h1>
    </div>

    <!-- User Profile -->
    <div class="p-4 flex items-center space-x-3 border-b border-purple-700">
        <div class="relative">
            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="User"
                class="w-10 h-10 rounded-full border-2 border-purple-300">
            <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-white"></span>
        </div>
        <div>
            <p class="font-medium">Sarah Johnson</p>
            <p class="text-xs text-purple-300">Admin</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="p-4">
        <div class="space-y-2">
            <a href="{{ route('dashboard') }}"
                class="flex items-center space-x-3 p-3 rounded-lg bg-purple-700 text-white hover:bg-purple-600 transition-all duration-200 group">
                <i class="fas fa-tachometer-alt text-purple-300 group-hover:text-white"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{ route('user.index') }}"
                class="flex items-center space-x-3 p-3 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group">
                <i class="fas fa-users text-purple-300 group-hover:text-white"></i>
                <span>Users</span>
                <span class="ml-auto bg-purple-600 text-xs px-2 py-1 rounded-full">12</span>
            </a>
              <a href="{{ route('categories.index') }}"
                class="flex items-center space-x-3 p-3 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group">
                <i class="fas fa-users text-purple-300 group-hover:text-white"></i>
                <span>Input Category</span>
                <span class="ml-auto bg-purple-600 text-xs px-2 py-1 rounded-full">12</span>
            </a>
        </div>
    </nav>



</div>







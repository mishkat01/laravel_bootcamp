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
                <a href="#"
                    class="flex items-center space-x-3 p-3 rounded-lg bg-purple-700 text-white hover:bg-purple-600 transition-all duration-200 group">
                    <i class="fas fa-tachometer-alt text-purple-300 group-hover:text-white"></i>
                    <span>Dashboard</span>
                </a>

                <a href="#"
                    class="flex items-center space-x-3 p-3 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-users text-purple-300 group-hover:text-white"></i>
                    <span>Users</span>
                    <span class="ml-auto bg-purple-600 text-xs px-2 py-1 rounded-full">12</span>
                </a>

                <a href="#"
                    class="flex items-center space-x-3 p-3 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-box text-purple-300 group-hover:text-white"></i>
                    <span>Products</span>
                </a>

                <a href="#"
                    class="flex items-center space-x-3 p-3 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-shopping-cart text-purple-300 group-hover:text-white"></i>
                    <span>Orders</span>
                    <span class="ml-auto bg-red-500 text-xs px-2 py-1 rounded-full">5</span>
                </a>

                <a href="#"
                    class="flex items-center space-x-3 p-3 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-chart-line text-purple-300 group-hover:text-white"></i>
                    <span>Analytics</span>
                </a>

                <a href="#"
                    class="flex items-center space-x-3 p-3 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group">
                    <i class="fas fa-cog text-purple-300 group-hover:text-white"></i>
                    <span>Settings</span>
                </a>
            </div>

            <!-- Dropdown Section -->
            <div class="mt-6">
                <div class="text-xs uppercase text-purple-400 font-semibold mb-2 px-3">Reports</div>
                <div class="space-y-1">
                    <a href="#"
                        class="flex items-center space-x-3 p-2 pl-8 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group text-sm">
                        <i class="fas fa-file-invoice text-purple-300 group-hover:text-white"></i>
                        <span>Sales</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 p-2 pl-8 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group text-sm">
                        <i class="fas fa-file-alt text-purple-300 group-hover:text-white"></i>
                        <span>Inventory</span>
                    </a>
                    <a href="#"
                        class="flex items-center space-x-3 p-2 pl-8 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group text-sm">
                        <i class="fas fa-file-excel text-purple-300 group-hover:text-white"></i>
                        <span>Export</span>
                    </a>
                </div>
            </div>
        </nav>

        <!-- Bottom Section -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-purple-700">
            <a href="#"
                class="flex items-center space-x-3 p-2 rounded-lg text-purple-200 hover:bg-purple-800 hover:text-white transition-all duration-200 group">
                <i class="fas fa-sign-out-alt text-purple-300 group-hover:text-white"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>


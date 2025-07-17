
 @extends('layouts.app')

 @section('title', 'Page Title')



 @section('content')
     <div class="flex-1 overflow-auto p-6">
         <!-- Header -->
         <div class="flex justify-between items-center mb-8">
             <div>
                 <h1 class="text-3xl font-bold text-gray-800">Analytics Dashboard</h1>
                 <p class="text-gray-600">Welcome to your data visualization center</p>
             </div>
             <div class="flex items-center space-x-4">
                 <div class="relative">
                     <input type="text" placeholder="Search..."
                         class="pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500">
                     <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                 </div>
                 <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition duration-200">
                     <i class="fas fa-download mr-2"></i>Export
                 </button>
             </div>
         </div>

         <!-- Stats Cards -->
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
             <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-blue-500">
                 <div class="flex justify-between">
                     <div>
                         <p class="text-gray-500">Total Revenue</p>
                         <h3 class="text-2xl font-bold">$24,780</h3>
                     </div>
                     <div class="bg-blue-100 p-3 rounded-full">
                         <i class="fas fa-dollar-sign text-blue-500 text-xl"></i>
                     </div>
                 </div>
                 <p class="text-green-500 mt-2"><i class="fas fa-arrow-up mr-1"></i>12.5% from last month</p>
             </div>

             <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-green-500">
                 <div class="flex justify-between">
                     <div>
                         <p class="text-gray-500">New Users</p>
                         <h3 class="text-2xl font-bold">1,245</h3>
                     </div>
                     <div class="bg-green-100 p-3 rounded-full">
                         <i class="fas fa-users text-green-500 text-xl"></i>
                     </div>
                 </div>
                 <p class="text-green-500 mt-2"><i class="fas fa-arrow-up mr-1"></i>8.2% from last month</p>
             </div>

             <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-yellow-500">
                 <div class="flex justify-between">
                     <div>
                         <p class="text-gray-500">Pending Orders</p>
                         <h3 class="text-2xl font-bold">56</h3>
                     </div>
                     <div class="bg-yellow-100 p-3 rounded-full">
                         <i class="fas fa-shopping-cart text-yellow-500 text-xl"></i>
                     </div>
                 </div>
                 <p class="text-red-500 mt-2"><i class="fas fa-arrow-down mr-1"></i>3.4% from last month</p>
             </div>

             <div class="bg-white p-6 rounded-xl shadow-md border-l-4 border-red-500">
                 <div class="flex justify-between">
                     <div>
                         <p class="text-gray-500">Bounce Rate</p>
                         <h3 class="text-2xl font-bold">23.8%</h3>
                     </div>
                     <div class="bg-red-100 p-3 rounded-full">
                         <i class="fas fa-chart-bar text-red-500 text-xl"></i>
                     </div>
                 </div>
                 <p class="text-green-500 mt-2"><i class="fas fa-arrow-down mr-1"></i>1.2% from last month</p>
             </div>
         </div>

         <!-- Main Charts Row -->
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
             <!-- Line Chart -->
             <div class="bg-white p-6 rounded-xl shadow-md lg:col-span-2">
                 <div class="flex justify-between items-center mb-4">
                     <h2 class="text-xl font-semibold">Revenue Overview</h2>
                     <div class="flex space-x-2">
                         <button class="px-3 py-1 text-sm bg-purple-100 text-purple-700 rounded-full">Monthly</button>
                         <button class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-full">Weekly</button>
                         <button class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded-full">Daily</button>
                     </div>
                 </div>
                 <canvas id="lineChart" height="250"></canvas>
             </div>

             <!-- Pie Chart -->
             <div class="bg-white p-6 rounded-xl shadow-md">
                 <h2 class="text-xl font-semibold mb-4">Traffic Sources</h2>
                 <canvas id="pieChart" height="250"></canvas>
             </div>
         </div>

         <!-- Second Charts Row -->
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
             <!-- Bar Chart -->
             <div class="bg-white p-6 rounded-xl shadow-md lg:col-span-2">
                 <h2 class="text-xl font-semibold mb-4">Sales by Category</h2>
                 <canvas id="barChart" height="250"></canvas>
             </div>

             <!-- Doughnut Chart -->
             <div class="bg-white p-6 rounded-xl shadow-md">
                 <h2 class="text-xl font-semibold mb-4">User Distribution</h2>
                 <canvas id="doughnutChart" height="250"></canvas>
             </div>
         </div>

         <!-- Data Table -->
         <div class="bg-white rounded-xl shadow-md overflow-hidden">
             <div class="p-6">
                 <div class="flex justify-between items-center mb-4">
                     <h2 class="text-xl font-semibold">Recent Transactions</h2>
                     <button class="text-purple-600 hover:text-purple-800">View All</button>
                 </div>
                 <div class="overflow-x-auto">
                     <table class="min-w-full divide-y divide-gray-200">
                         <thead class="bg-gray-50">
                             <tr>
                                 <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     ID</th>
                                 <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     Customer</th>
                                 <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     Date</th>
                                 <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     Amount</th>
                                 <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                     Status</th>
                             </tr>
                         </thead>
                         <tbody class="bg-white divide-y divide-gray-200">
                             <tr class="hover:bg-gray-50">
                                 <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#45782
                                 </td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">John Smith</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-06-15</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$245.00</td>
                                 <td class="px-6 py-4 whitespace-nowrap">
                                     <span
                                         class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                                 </td>
                             </tr>
                             <tr class="hover:bg-gray-50">
                                 <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#45781
                                 </td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Sarah Johnson</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-06-14</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$189.99</td>
                                 <td class="px-6 py-4 whitespace-nowrap">
                                     <span
                                         class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                 </td>
                             </tr>
                             <tr class="hover:bg-gray-50">
                                 <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#45780
                                 </td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Michael Brown</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-06-14</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$420.50</td>
                                 <td class="px-6 py-4 whitespace-nowrap">
                                     <span
                                         class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Completed</span>
                                 </td>
                             </tr>
                             <tr class="hover:bg-gray-50">
                                 <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#45779
                                 </td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Emily Davis</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2023-06-13</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">$315.25</td>
                                 <td class="px-6 py-4 whitespace-nowrap">
                                     <span class="px-2 py-1 text-xs rounded-full bg-red-100 text-red-800">Failed</span>
                                 </td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 @endsection

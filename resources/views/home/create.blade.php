<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#131B31] text-white min-h-screen">
            <div class="px-6 py-4">
                <h2 class="text-lg font-bold">Dashboard</h2>
                <nav class="mt-6 space-y-2">
                    <a href="/dashboard" class="{{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Home</a>
                    <a href="{{ route('home.create') }}" class="{{ request()->routeIs('users') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Users</a>
                    <a href="/analytic" class="{{ request()->routeIs('analytics') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Analytics</a>
                    <a href="{{ route('users.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">View</a>
                </nav>
            </div>
        </aside>
    
        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 p-6">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                    <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">User List</h3>
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Picture</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Registered</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Profile picture goes here</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Name goes here</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Email goes here</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Role goes here</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Date registered goes here</td>
                                        </tr>

                                </tbody>
                            </table>
                       
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</x-app-layout>
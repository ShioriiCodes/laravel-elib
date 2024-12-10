<x-app-layout>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#131B31] text-white min-h-screen" style="padding-top: 5%">
            <div class="px-6 py-4">
                <h2 class="text-lg font-bold">Dashboard</h2>
                <nav class="mt-6 space-y-2">
                    <a href="/dashboard" class="{{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Upload</a>
                    <a href="{{ route('home.create') }}" class="{{ request()->routeIs('users') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Users</a>
                    <a href="/analytic" class="{{ request()->routeIs('analytics') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Analytics</a>
                </nav>
            </div>
        </aside>
    
        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 p-6" style="padding-top: 6%">
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
                                    @foreach ($Posts as $post)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <img src="{{ $post->profile_photo_path ? asset('storage/' . $post->profile_photo_path) : asset('path/to/default/image.png') }}" alt="Profile Picture" class="w-10 h-10 rounded-full">
                                            </td>
                                            
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $post->name ?? 'Name goes here' }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $post->email ?? 'Email goes here' }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $post->user_type ?? 'Role goes here' }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $post->created_at ?? 'Date goes here' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                       
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</x-app-layout>
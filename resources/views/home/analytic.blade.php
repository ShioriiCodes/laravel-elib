<x-app-layout>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-[#131B31] text-white min-h-screen" style="padding-top: 5%">
            <div class="px-6 py-4">
                <h2 class="text-lg font-bold">Dashboard</h2>
                <nav class="mt-6 space-y-2">
                    <a href="/dashboard" class="{{ request()->routeIs('dashboard') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Upload</a>
                    <a href="{{ route('home.create') }} " class="{{ request()->routeIs('users') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Users </a>
                    <a href="/analytic" class="{{ request()->routeIs('analytics') ? 'bg-gray-700' : '' }} block px-4 py-2 rounded hover:bg-gray-700">Analytics</a>
                </nav>
            </div>
        </aside>
        <div class="flex-1 bg-gray-100 p-6" style="padding-top: 6%">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Website Analytics</h3>

                        <livewire:dashboard.stats-widget /> <br>
                    <!-- Overview Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div class="p-6 bg-blue-100 shadow rounded-lg text-center">
                            <h2 class="text-2xl font-bold text-blue-600">1,200</h2>
                            <p class="text-gray-600">Ebooks Views</p>
                        </div>
                        <div class="p-6 bg-green-100 shadow rounded-lg text-center">
                            <h2 class="text-2xl font-bold text-green-600">350</h2>
                            <p class="text-gray-600">Unique Visitors</p>
                        </div>
                        <div class="p-6 bg-yellow-100 shadow rounded-lg text-center">
                            <h2 class="text-2xl font-bold text-yellow-600">10%</h2>
                            <p class="text-gray-600">Bounce Rate</p>
                        </div>
                    </div>

                    <!-- Line Chart -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h4 class="text-lg font-semibold text-gray-700 mb-4">Soon Other Analytics </h4>
                        <canvas id="trafficChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>

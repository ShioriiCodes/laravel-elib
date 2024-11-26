<div>
    <div class="grid grid-cols-3 gap-4">
        @foreach ($stats as $key => $value)
            <div class="p-6 bg-white shadow rounded-lg">
                <h2 class="text-xl font-bold">{{ $value }}</h2>
                <p class="text-gray-500">{{ ucfirst($key) }}</p>
            </div>
        @endforeach
    </div>
    
</div>

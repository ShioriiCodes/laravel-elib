
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-3 sm:pt-0 bg-black relative"
     style="min-height: 100vh; background: url('{{ asset('/image/librarysb.png') }}') no-repeat center center; background-size: cover;">

    <div class="w-full sm:max-w-md mt-6 px-6 py-10 text-black shadow-md overflow-hidden sm:rounded-lg mx-auto"
        style="color: black; background-color: #ffffff; margin-bottom: 2rem;">

            <div class="flex justify-center"
            style="margin-bottom: 2rem; margin-top: -1rem">
                {{ $logo }}
            </div>
            
        {{ $slot }}
    </div>
</div>

    
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-3 sm:pt-0 bg-gray-70 relative"
     style="min-height: 100vh; background: url('{{ asset('/image/librarysb.png') }}') no-repeat center center; background-size: cover;">

     <div style="position: absolute; inset: 0; background-color: #131B31; opacity: 0.3;"></div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-10 bg-[#ffffff] text-white shadow-md overflow-hidden sm:rounded-lg mx-auto"
        style="color: white; background-color: #131b3197; backdrop-filter: blur(6px); margin-bottom: 2rem;">

            <div class="flex justify-center "
            style="margin-bottom: 2rem; margin-top: -1rem">
                {{ $logo }}
            </div>
            
        {{ $slot }}
    </div>

</div>

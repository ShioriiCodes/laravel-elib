    
    
<div class="flex justify-center items-center w-full">
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center py-2 bg-[#FC5400] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#d44300] focus:bg-[#d44300] active:bg-[#a93200] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 shadow-lg transition ease-in-out duration-150']) }}>
        {{ $slot }}
    </button>
    
</div>

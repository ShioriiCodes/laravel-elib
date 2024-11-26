@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-black-600 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-lg shadow-black-300']) !!}>

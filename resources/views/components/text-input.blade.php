@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>

@if (isset($attributes['type']) && $attributes['type'] == 'file' && isset($attributes['value']))
<img class="mt-2 w-20 h-20 border p-0.5 border-gray-400 rounded object-cover" src="{{ asset($attributes['value']) }}" alt="">
@endif

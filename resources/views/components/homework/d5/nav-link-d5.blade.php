@props(['active' => false, 'type' => 'a'])

@if ($type == 'a')    
<a class="{{ $active ? 'bg-blue-900 text-white' : 'text-black hover:bg-blue-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{ $active ? 'page' : 'false' }}"
{{ $attributes }}>{{ $slot }}</a>
@else
<button class="{{ $active ? 'bg-blue-900 text-white' : 'text-black hover:bg-blue-700 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
aria-current="{{ $active ? 'page' : 'false' }}"
{{ $attributes }} script>{{ $slot }}</button>
@endif
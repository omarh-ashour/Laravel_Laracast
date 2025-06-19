@props(['active' => false, 'type' => 'a'])

@if($type === 'button')
    <button onclick="window.location.href= '{{ $attributes->get('href') }}'" type="button"
        class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}"
        {{ $attributes }}>
        {{ $slot }}
    </button>
@else
    <a
        class="{{ $active ? 'rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white' : 'rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white' }}"
        {{ $attributes }}>
        {{ $slot }}
    </a>
@endif

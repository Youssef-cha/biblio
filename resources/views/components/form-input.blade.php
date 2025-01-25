@props([
    'label' => '',
    'type' => 'text',
])
<div class="mb-5">
    <label for="{{ $label }}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $label }}"
        {{ $attributes->merge(['class' => 'bg-forest border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 border-none focus:ring-wave caret-wave block w-full p-2.5 dark:bg-gray-800 dark:border-forest focus:outline-none dark:placeholder-gray-400 dark:text-cloud ']) }} />

    <p class=" h-2 text-red-500 font-semibold text-md mt-1">
        @error($attributes->get('name'))
            {{ $message }}
        @enderror
    </p>

</div>

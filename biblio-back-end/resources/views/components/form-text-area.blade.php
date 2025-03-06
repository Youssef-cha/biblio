@props(['label' => ''])
<div class="sm:col-span-2">
    <label for="{{ $label }}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ $label }}</label>
    <textarea id="{{ $label }}" rows="5"
        {{ $attributes->merge(['class' => 'dark:bg-primary-300 border border-gray-300 dark:text-white text-sm rounded-lg focus:ring-2 border-none focus:ring-accent-300 caret-secondary-400 block w-full p-2.5 dark:bg-gray-200 dark:border-highlight focus:outline-none dark:placeholder-gray-400 dark:text-secondary']) }}>{{ $label }}</textarea>
    <p class=" h-2 text-red-500 font-semibold text-md mt-1">
        @error($attributes->get('name'))
            {{ $message }}
        @enderror
    </p>
</div>

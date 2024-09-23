<label class="block mt-4 text-sm">
    <span class="text-gray-700 dark:text-gray-400">{{ $label }}</span>
    <input type="{{ $type }}" name="{{ $name }}" @if ($required === true) required @endif
        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
        placeholder="{{ $placeholder }}" />
    @error($name)
        <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
    @enderror
</label>

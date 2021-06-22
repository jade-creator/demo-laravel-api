@props(['event'])

<button wire:click="{{ $event }}" wire:loading.attr="disabled" class="flex-grow px-4 py-2 font-medium text-white transition duration-500 ease-in-out transform bg-red-500 hover:bg-red-600 border border-red-600 text-base focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
    {{ $slot }}
</button>
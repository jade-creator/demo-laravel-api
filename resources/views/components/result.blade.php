@props(['result'])

<div class="mt-5">
    <label class="text-green-400 font-bold" for="json">RESULT:</label>
    <div name="json" class="mt-3 bg-gray-100 rounded-lg">
        @if (!empty($result))
            <pre wire:loading.remove class="p-5">{{ json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) }}
            </pre>
        @endif
        <div wire:loading class="w-full flex justify-center">
            <button class="flex items-center p-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="animate-spin h-5 w-5 mr-3" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                    <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                </svg>
                <span class="animate-pulse font-bold">Processing...</span>
            </button>
        </div>
    </div>
</div>
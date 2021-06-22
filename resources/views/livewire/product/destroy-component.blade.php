<div class="max-w-4xl mx-auto px-5">
    <x-title display="Remove the specified resource from storage." />

    <div class="w-full py-5 flex flex-wrap items-end justify-center xl:flex-nowrap md:flex-nowrap lg:flex-wrap md:justify-start">
        <x-dropdown name="verb" value="DESTROY" />

        <div class="relative w-full sm:w-4/6">
            <input wire:model.defer="url" type="text" id="url" name="url" class="w-full px-3 py-1 leading-8 text-black border border-blueGray-100 bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none">
        </div>

        <x-button event="delete">SEND</x-button>
    </div>

    <div>
        <table class="w-full">
            <thead>
                <th class="text-left">Query Parameters</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <tr class="hover:bg-gray-100">
                    <td class="pr-2">
                        <input readonly type="text" value="ID" class="bg-transparent border-b border-gray-400 w-full px-3 py-2">
                    </td>
                    <td class="pl-2">
                        <input wire:model.debounce.1000ms="productId" type="string" id="name" name="name" class="bg-transparent border-b border-gray-400 w-full px-3 py-2">
                    </td>
                </tr>
                @error('productId')
                    <tr>
                        <td><p class="text-sm text-red-500 font-bold">{{ $message }}</p></td>
                    </tr>
                @enderror
            </tbody>
        </table>
    </div>

    <x-result :result=$result />
</div>

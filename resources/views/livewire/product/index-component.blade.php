<div class="max-w-4xl mx-auto px-5">
    <x-title display="Display a listing of the resource." />

    <div class="w-full py-5 flex flex-wrap items-end justify-center xl:flex-nowrap md:flex-nowrap lg:flex-wrap md:justify-start">
        <x-dropdown name="verb" value="GET" />

        <div class="relative w-full sm:w-4/6">
            <input wire:model.defer="url" type="text" id="email" name="email" class="w-full px-3 py-1 leading-8 text-black transition duration-500 ease-in-out transform border border-blueGray-100 bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
        </div>

        <x-button event="index">SEND</x-button>
    </div>

    <x-result :result=$result />
</div>

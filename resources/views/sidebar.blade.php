<div class="flex flex-col flex-shrink-0 w-full bg-white shadow-xl text-blueGray-700 md:w-64 h-0 md:h-auto invisible md:visible">
    <div class="flex flex-row items-center justify-between flex-shrink-0 py-4">
        <a href="/" class="px-8 focus:outline-none">
            <div class="inline-flex items-center">
                <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-red-300 to-red-500">
                </div>
                <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8">
                    {{ config('app.name', 'Laravel') }} 
                </h2>
            </div>
        </a>
    </div>
    <nav class="flex-grow pb-4 pr-4 md:block md:pb-0 md:overflow-y-auto">
        <ul>
            <li>
                <a class="{{ request()->is('products/store') ? 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-green-500 hover:border-green-400 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black' 
                    : 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-white hover:border-green-300 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black'}}"
                    href="{{ route('product.store') }}">STORE</a>
            </li>
            <li>
                <a class="{{ request()->is('products/index') ? 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-blue-500 hover:border-blue-400 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black' 
                    : 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-300 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black'}}"
                    href="{{ route('product.index') }}">INDEX</a>
            </li>
            <li>
                <a class="{{ request()->is('products/show') ? 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-blue-500 hover:border-blue-400 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black' 
                    : 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-white hover:border-blue-300 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black'}}"
                    href="{{ route('product.show') }}">SHOW</a>
            </li>
            <li>
                <a class="{{ request()->is('products/update') ? 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-indigo-500 hover:border-indigo-400 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black' 
                    : 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-white hover:border-indigo-300 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black'}}"
                    href="{{ route('product.update') }}">UPDATE</a>
            </li>
            <li>
                <a class="{{ request()->is('products/destroy') ? 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-red-500 hover:border-red-400 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black' 
                    : 'block px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform border-l-4 border-white hover:border-red-300 text-blueGray-500 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black'}}"
                    href="{{ route('product.destroy') }}">DESTROY</a>
            </li>
        </ul>
    </nav>
</div>
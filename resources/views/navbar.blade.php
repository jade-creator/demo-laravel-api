<div class="sticky top-0 z-50 flex flex-col flex-shrink-0 w-full bg-white border-b border-blueGray-700 text-blueGray-700 md:w-0 h-auto visible md:invisible">
    <div class="flex flex-row items-center justify-between flex-shrink-0 py-4 relative">
        <a href="/" class="px-8 focus:outline-none">
            <div class="inline-flex items-center">
                <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-red-300 to-red-500">
                </div>
                <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8">
                    {{ config('app.name', 'Laravel') }} 
                </h2>
            </div>
        </a>

        <nav x-data="{ open: false }" class="text-sm sm:text-base">
            <!-- Hamburger -->
            <div class="block lg:hidden mr-5 flex items-center" title="Toggle menu">
                <button @click="open = ! open" @click.away="open = false" class="h-full inline-flex items-center justify-center hover:text-opacity-50 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>  
                </button>
            </div>

            <div x-cloak :class="{'block opacity-100 shadow-lg': open, 'hidden': ! open}" class="opacity-0 block lg:hidden">
                <ul class="bg-white text-gray-600 rounded-md z-50 absolute top-15 left-0 w-full h-screen">
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
            </div>
        </nav>
    </div>
</div>
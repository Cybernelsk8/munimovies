<div>

    {{-- filtros --}}
    <div class="bg-gray-600 py-4 mb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button wire:click="resetFilters" class="bg-white shadow h-12 px-4 rounded-lg text-gray-700">
                Todas
            </button>

            <div class="relative" x-data="{open:false}">
                <button x-on:click="open=true" class="flex items-center bg-white px-4 text-gray-700 h-12 rounded-lg shadow ml-2 overflow-hidden focus:outline-none">
                    Categoria
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" x-on:click.away="open=false" class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl">
                    @foreach ($categories as $category)
                    <a x-on:click="open=false" wire:click="category({{$category->id}})" class=" cursor-pointer transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-blue-500 hover:text-white">
                        {{$category->name}}
                    </a>
                    @endforeach
                </div>
            </div>


        </div>
    </div>

    {{-- cards de peliculas --}}

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
        @foreach ($movies as $movie)
          <x-movie-card :movie="$movie"/>
        @endforeach
    </div>

    {{-- links de navegacion --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3 text-white font-bold">
        {{$movies->links()}}
    </div>
</div>

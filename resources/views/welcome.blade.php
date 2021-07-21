<x-app-layout>
    <section class=" bg-cover" style="background-image: url({{asset('img/home/netflix-3733812_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2 bg-black bg-opacity-70 rounded-md shadow-md p-4">
                <h1 class="text-white font-bold text-4xl text-center">Mira tu pelicula favorita en MuniMovies</h1>
                <p class="text-white text-lg mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, odio! Reprehenderit dolores quo placeat, repudiandae id expedita praesentium quasi sunt molestiae facilis suscipit veniam.</p>
            
                @livewire('search')

            </div>

            
        </div>
    </section>

    <section>
        @livewire('home.movies');
    </section>
    
</x-app-layout>
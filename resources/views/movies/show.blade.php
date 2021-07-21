<x-app-layout>
  <section class="bg-gray-700 py-12 ">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16" >
      <div class="container grid grid-cols-1 lg:grid-cols-2 gap-6">

        <figure>
          {{-- <img class="h-60 w-full object-cover" src="{{Storage::url($movie->image->url)}}" alt=""> --}}
          {!! $movie->iframe !!}
        </figure>

        <div class="text-white">
          <h1 class="text-4xl text-center">{{$movie->title}}</h1>
          <h2 class="text-xl mt-3">{{Str::limit($movie->overview,40)}}</h2>
          <p class="mt-1"><i class="fas fa-film"></i> Categoria: {{$movie->category->name}}</p>
          <p class="mt-2"><i class="fas fa-exclamation-triangle"></i> Clasificacion: {{$movie->clasification->name}}</p>
          <p class="mt-2"><i class="fas fa-flag"></i> Idioma: {{$movie->original_lenguage}}</p>
          <p class="mt-2"><i class="fas fa-star"></i> Calificacion: {{$movie->rating}}</p>
        </div>

      </div>
    </div>

  </section>

  <div class="container grid grid-cols-1 lg:grid-cols-3 gap-6">

    <div class=" lg:col-span-2">
      <section class="card mt-3">
        <div class="card-body">
          <h1 class="font-bold text-2xl mb-2">Descripción</h1>
          <p class="text-xl mt-2">{{$movie->description}}</p>
        </div>
      </section>

      @livewire('home.movies-reviews', ['movie' => $movie])

    </div>

    <div>
      <section class=" card mb-4 mt-3">
        <div class="card-body">
            @can('enrolled', $movie)
                <button class="btn btn-danger btn-block">Ya esta en tu lista de favoritos</button>
            @else

                <form action="{{route('enrolled',$movie)}}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-block">Agregar a favoritos</button>
                </form>
            @endcan
        </div>
      </section>

      <aside class="mt-3 hidden md:block">
          <h2 class="text-white font-bold text-center py-4 text-xl">Peliculas que te pueden interesar</h2>
        @foreach ($similares as $similar)
            <article class="flex mb-6">

              <img class="h-32 w-40 object-cover" src="{{Storage::url($similar->image->url)}}" alt="">

              <div class="ml-3">
                <h1><a class="font-bold text-white mb-3" href="{{route('show',$similar)}}">{{Str::limit($similar->title,40)}}</a></h1>
                <p class="text-white"><i class="fas fa-users text-gray-400 mr-1"></i>{{$similar->users_count}}</p>
                <p class="text-white"><i class="fas fa-exclamation-triangle text-gray-400 mr-1"></i>{{$movie->clasification->name}}</p>
                <p class="text-white"><i class="fas fa-star text-yellow-400 mr-1"></i>{{$similar->rating}}</p>
              </div>

            </article>
        @endforeach
      </aside>

    </div>

  </div>
</x-app-layout>
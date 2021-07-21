<x-app-layout>

  <div class="container pt-20  pb-4">
        <div class="bg-gray-700 shadow-lg rounded-lg py-4 text-white">
            <h1 class="text-center text-4xl">Bienvenido a tu lista de peliculas favoritas {{auth()->user()->name}}</h1>
            <h2 class="text-center text-xl mt-2">Estas son las peliculas de tu preferencia</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 shadow-lg rounded-lg mt-4 py-6 px-4">
            @foreach ($favoritas->movies_enrolled as $favorita)

            <article class="bg-gray-500 shadow-md p-2 flex flex-col rounded-md">
                <img class="h-36 w-full object-cover" src="{{ Storage::url($favorita->image->url)}}" alt="">
                <div class="card-body flex-1 flex flex-col">
                    <h1 class="card-title text-center text-white">{{Str::limit($favorita->title,40)}}</h1>
                    <p class="text-white text-sm mb-2 mt-auto">{{$favorita->overview}}</p>

                    <div class="shadow-lg rounded-lg p-4">
                        <p class="text-blue-800 text-sm mb-2 mt-auto font-bold">Categoria: {{$favorita->category->name}}</p>
                        <p class="text-blue-800 text-sm mb-2 mt-auto font-bold">Leguaje: {{$favorita->original_lenguage}}</p>
                        <p class="text-blue-800 text-sm mb-2 mt-auto font-bold">Clasificacion: {{$favorita->clasification->name}}</p>
                    </div>

                    <div class="flex">
                    <ul class="flex text-sm">
                        <li class="mr-1"><i class="fas fa-star text-{{ $favorita->rating >=1 ? 'yellow' : 'gray'}}-400"></i></li>
                        <li class="mr-1"><i class="fas fa-star text-{{ $favorita->rating >=2 ? 'yellow' : 'gray'}}-400"></i></li>
                        <li class="mr-1"><i class="fas fa-star text-{{ $favorita->rating >=3 ? 'yellow' : 'gray'}}-400"></i></li>
                        <li class="mr-1"><i class="fas fa-star text-{{ $favorita->rating >=4 ? 'yellow' : 'gray'}}-400"></i></li>
                        <li class="mr-1"><i class="fas fa-star text-{{ $favorita->rating ==5 ? 'yellow' : 'gray'}}-400"></i></li>
                    </ul>
                    <p class="text-sm text-white ml-auto">
                        <i class="fas fa-eye text-blue-400"></i>
                        ({{$favorita->users_count}})
                    </p>
                    </div>

                    <form action="{{ route('delete',$favorita) }}" method="POST" class="mt-2">
                        @csrf
                        <button class="btn btn-danger btn-block">Quitar de favoritos</button>
                    </form>

                </div>
            </article>
            @endforeach
      </div>

  </div>
</x-app-layout>
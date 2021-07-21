@props(['movie'])

<article class="bg-gray-500 shadow-md p-2 flex flex-col rounded-md">
  <img class="h-36 w-full object-cover" src="{{ Storage::url($movie->image->url)}}" alt="">
  <div class="card-body flex-1 flex flex-col">
    <h1 class="card-title text-center text-white">{{Str::limit($movie->title,40)}}</h1>
    <p class="text-white text-sm mb-2 mt-auto">{{$movie->overview}}</p>

    <div class="bg-gray-600 shadow-lg rounded-lg p-4 mb-2">
        <p class="text-blue-800 text-sm mb-2 mt-auto font-bold">Categoria: {{$movie->category->name}}</p>
        <p class="text-blue-800 text-sm mb-2 mt-auto font-bold">Leguaje: {{$movie->original_lenguage}}</p>
        <p class="text-blue-800 text-sm mb-2 mt-auto font-bold">Clasificacion: {{$movie->clasification->name}}</p>
    </div>

    <div class="flex">
      <ul class="flex text-sm">
        <li class="mr-1"><i class="fas fa-star text-{{ $movie->rating >=1 ? 'yellow' : 'gray'}}-400"></i></li>
        <li class="mr-1"><i class="fas fa-star text-{{ $movie->rating >=2 ? 'yellow' : 'gray'}}-400"></i></li>
        <li class="mr-1"><i class="fas fa-star text-{{ $movie->rating >=3 ? 'yellow' : 'gray'}}-400"></i></li>
        <li class="mr-1"><i class="fas fa-star text-{{ $movie->rating >=4 ? 'yellow' : 'gray'}}-400"></i></li>
        <li class="mr-1"><i class="fas fa-star text-{{ $movie->rating ==5 ? 'yellow' : 'gray'}}-400"></i></li>
      </ul>
      <p class="text-sm text-white ml-auto">
        <i class="fas fa-eye text-blue-400"></i>
        ({{$movie->users_count}})
      </p>
    </div>

    <a href="{{ route('show',$movie)}}" class=" btn-block mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-md p-2 text-center focus:outline-none">
      Mas informacion
    </a>

  </div>
</article>
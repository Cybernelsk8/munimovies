<section class="mt-4">
    <h1 class="font-bold text-3xl text-gray-800 mb-2">Valoracion</h1>

    <article class="my-4">

        <textarea wire:model="comment" rows="3" class="form-input w-full rounded-lg" placeholder="Ingrese una reseña del curso" required></textarea>
        @error('comment')
            <small class="text-red-500">{{ $message }}</small>
        @enderror
        <div class="flex items-center">
            @auth
                <button class="btn btn-primary mr-2" wire:click="store"> Guardar</button>
                <ul class="flex">
                    <li class="mr-1 cursor-pointer"wire:click="$set('rating',1)"><i class="fas fa-star text-{{ $rating >=1 ? 'yellow' : 'gray'}}-300"></i></li>
                    <li class="mr-1 cursor-pointer"wire:click="$set('rating',2)"><i class="fas fa-star text-{{ $rating >=2 ? 'yellow' : 'gray'}}-300"></i></li>
                    <li class="mr-1 cursor-pointer"wire:click="$set('rating',3)"><i class="fas fa-star text-{{ $rating >=3 ? 'yellow' : 'gray'}}-300"></i></li>
                    <li class="mr-1 cursor-pointer"wire:click="$set('rating',4)"><i class="fas fa-star text-{{ $rating >=4 ? 'yellow' : 'gray'}}-300"></i></li>
                    <li class="mr-1 cursor-pointer"wire:click="$set('rating',5)"><i class="fas fa-star text-{{ $rating ==5 ? 'yellow' : 'gray'}}-300"></i></li>
                </ul>
            @else
                <div>
                    <small class="text-red-500">Necesitas estar registrado para escribir una reseña y valoracion...</small>
                </div>
            @endauth
        </div>

    </article>


     <div class="card">
       <div class="card-body">
         <p class="text-gray-800 text-xl">{{$movie->reviews->count()}} Valoraciones</p>
         @foreach ($movie->reviews as $review)
          <article class="flex mb-4 text-gray-800">
            <figure class="mr-4">
              <img class="h-12 w-12 object-cover rounded-full shadow-lg"  src="{{$review->user->profile_photo_url}}">
            </figure>
            <div class="card flex-1">
              <div class="card-body bg-gray-100">
                <p><b>{{$review->user->name}}</b> <i class="fas fa-star text-yellow-300"></i> {{$review->rating}} </p>
                {{$review->comment}}
              </div>
            </div>
          </article>
         @endforeach
       </div>
     </div>
  </section>
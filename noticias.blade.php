<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Noticias') }}
            </h2>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#facc15" class="w-7 h-7">
                <path fill-rule="evenodd" d="M4.125 3C3.089 3 2.25 3.84 2.25 4.875V18a3 3 0 0 0 3 3h15a3 3 0 0 1-3-3V4.875C17.25 3.839 16.41 3 15.375 3H4.125ZM12 9.75a.75.75 0 0 0 0 1.5h1.5a.75.75 0 0 0 0-1.5H12Zm-.75-2.25a.75.75 0 0 1 .75-.75h1.5a.75.75 0 0 1 0 1.5H12a.75.75 0 0 1-.75-.75ZM6 12.75a.75.75 0 0 0 0 1.5h7.5a.75.75 0 0 0 0-1.5H6Zm-.75 3.75a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5H6a.75.75 0 0 1-.75-.75ZM6 6.75a.75.75 0 0 0-.75.75v3c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-3A.75.75 0 0 0 9 6.75H6Z" clip-rule="evenodd" />
                <path d="M18.75 6.75h1.875c.621 0 1.125.504 1.125 1.125V18a1.5 1.5 0 0 1-3 0V6.75Z" />
              </svg>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(Auth::check() && (Auth::user()->roleid == "2"))
                <div class="col-xs-12 col-7 col-md-12 text-center">
                    <a href="{{route('noticia.create')}}" class="btn btn-primary">Nueva noticia</a>
                </div>
            @endif
            @foreach ($noticias as $noticia)
            <div class="bg-white mt-4 overflow-hidden shadow-sm sm:rounded-lg row">
                <div class="font-semibold text-xl text-gray-800 mt-1 leading-tight flex justify-center">
                    {{ $noticia->titulo }}
                </div>
                <div class="p-6 text-gray-900 flex justify-center">
                    <p>{{ Str::words($noticia->cuerpo, "100") }}</p>
                </div>
                <div class="text-gray-900">
                    <p>{{ $noticia->updated_at }}</p>
                </div>
                <a href="{{route('noticia.show', ['noticia' => $noticia])}}" class="btn btn-outline-info mt-2">Más información</a>
            </div>
            @endforeach
            {{ $noticias->links() }}
        </div>

    </div>
</x-app-layout>

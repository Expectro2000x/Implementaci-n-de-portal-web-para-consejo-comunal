<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Noticia') }}
            </h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#9ca3af" class="w-6 h-6 ml-2">
                <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
            </svg>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white mt-4 overflow-hidden shadow-sm sm:rounded-lg row">
                <div class="font-semibold text-xl text-gray-800 mt-1 leading-tight flex justify-center">
                    {{ $noticia->titulo }}
                </div>
                <div class="p-6 text-gray-900">
                    <p>{!! nl2br($noticia->cuerpo) !!}</p>
                </div>
                <div class="text-gray-900">
                    <p>{{ $noticia->updated_at }}</p>


                </div>
                <div class="col-xs-12 col-7 col-md-12 text-center mb-2">
                    @can('update', $noticia)
                    <a href="{{route('noticia.edit', ['noticia' => $noticia])}}" class="btn btn-outline-primary btn-lg">Editar</a>
                    @endcan
                    @can('delete', $noticia)
                        <form action="{{route('noticia.destroy', $noticia)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-lg">Eliminar</button>
                        </form>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

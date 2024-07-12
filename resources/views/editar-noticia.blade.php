<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Noticia') }}
            </h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#facc15" class="w-6 h-6 ml-2">
                <path d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32l8.4-8.4Z" />
                <path d="M5.25 5.25a3 3 0 0 0-3 3v10.5a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3V13.5a.75.75 0 0 0-1.5 0v5.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5V8.25a1.5 1.5 0 0 1 1.5-1.5h5.25a.75.75 0 0 0 0-1.5H5.25Z" />
            </svg>              
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <span>Aquí puedes suministrar la información de la noticia que deseas publicar</span>
                    <div class="container mt-1">
                        
                        {{--Se crea una alerta que informe al usuario de los campos requeridos
                            en caso de que intente enviar el formulario sin estos--}}
                        @if ($errors->any())
                        <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <p>Datos insuficientes</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    
                        {{--Formulario en cual el usuario rellena los campos para agregar una nueva noticia a
                            la base de datos--}}
                            <form action="{{ route('noticia.update', $noticia)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="titulo" class="form-label mt-2">Título</label>
                                        <input type="text" class="form-control" name="titulo" value="{{ $noticia->titulo }}">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="cuerpo" class="form-label">Cuerpo</label>
                                        <textarea class="form-control border border-dark" style="height:500px" name="cuerpo">{{ $noticia->cuerpo}}</textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                                    <button type="submit" class="btn btn-outline-primary btn-lg">Actualizar</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
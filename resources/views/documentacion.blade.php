<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Documentación') }}
            </h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#22c55e" class="w-6 h-6 ml-2">
                <path fill-rule="evenodd" d="M19.5 21a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-5.379a.75.75 0 0 1-.53-.22L11.47 3.66A2.25 2.25 0 0 0 9.879 3H4.5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h15Zm-6.75-10.5a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25v2.25a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V10.5Z" clip-rule="evenodd" />
            </svg>              
        </div>
    </x-slot>

    <div class="justify-center hidden sm:flex sm:items-center sm:ms-6 mt-4">
        <x-dropdown width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                    <div>Tipo de documentación</div>

                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
            <x-slot name="content">
                <a href="" class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-3 focus:outline-indigo-500">
                {{__('Documento A')}}
                </a>
                <a href="" class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-3 focus:outline-indigo-500">
                {{__('Documento B')}}
                </a>
                <a href="" class="p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-3 focus:outline-indigo-500">
                    {{__('Documento C')}}
                </a>
            </x-slot>
        </x-dropdown>
    </div>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <span>Aquí puedes suministrar la información del <strong>documento</strong> que desees solicitar</span>
                    <div class="container mt-1">
                        <div class="row">   
                        
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
                    
                        {{--Formulario en cual el usuario rellena los campos para solicitar un documento--}}
                            <form action="" method="POST">
                                @csrf
                                <div class="col-xs-12 col-7 col-md-12 text-center mt-2">
                                    <div class="form-group">
                                        <label for="Cédula" class="form-label" >Cédula</label>
                                        <input type="number" class="form-control" name="Cédula" placeholder="Cédula">
                                    </div>
                                    <div class="form-group">
                                        <label for="Nombre" class="form-label mt-2">Nombre</label>
                                        <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="Apellido" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="Apellido" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="Fecha_de_nacimiento" class="form-label">Fecha de nacimiento</label>
                                        <input type="datetime" name="Fecha_de_nacimiento" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="Sexo" class="form-label">Sexo</label>
                                        <select name="Sexo" class="form-select">
                                            <option value="">-- Indique su sexo --</option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input type="email" class="form-control" name="Email" placeholder="Correo electrónico">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <label for="Teléfono" class="form-label">Teléfono</label>
                                    <input type="number" class="form-control" name="Teléfono" placeholder="Número teléfonico">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <label for="Dirección" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" name="Dirección" placeholder="Dirección">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="Comentario" class="form-label">Comentario</label>
                                        <textarea class="form-control border border-dark" style="height:150px" name="Comentario" placeholder="..."></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="Fecha_Residencia" class="form-label">Fecha de Recidencia en la zona</label>
                                        <input type="datetime" name="Fecha_Residencia" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                                    <div class="form-group">
                                        <label for="Estado" class="form-label">Estado civil</label>
                                        <select name="Estado" class="form-select">
                                            <option value="">-- Elige tu estado civil --</option>
                                            <option value="Soltero">Soltero</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Divorciado">Divorciado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                                    <button type="submit" class="btn btn-outline-primary btn-lg">Solicitar</button>
                                </div>
                            </form>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Panel de Entrada') }}
            </h2>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ed0303" class="w-6 h-6">
                <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
            </svg>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(Auth::check() && (Auth::user()->roleid == "2"))
                @foreach ($users as $user)

                        <div class="col-12 mt-1">
                            <table class="table table-bordered text-gray-900 justify-center">
                                <tr class="text-secondary">
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->roleid }}</td>
                                    <td><a href="" class="btn btn-outline-primary btn-lg">Cambiar rol</a></td>
                                </tr>
                            </table>
                        </div>
                @endforeach
                {{ $users->links() }}

            @else
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <span>¡Felicidades! ¡Has ingresado sesión exitosamente!
                            A partir de ahora la página te reconoce como parte del Consejo Comunal Manástara.
                            <br><br>
                            Para comenzar podrías ir a documentación, donde se te desplegará un formulario el cual deberás de rellenar
                            con la información del documento que quieres solicitar para que se almacene en la base de datos del sistema. Entre los varios
                            campos del formulario hay varios que son obligatorios de responder, al igual que hay otros que son opcionales, pero de todas
                            formas se recomienda encarecidamente que sean completados para que el documento se encuentre lo más completo posible.
                            <br><br>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil ex commodi minus eos illo eaque voluptatum consequatur! Necessitatibus aspernatur a consectetur, dolores at harum explicabo minus laborum hic dolorem? Voluptates?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem magni modi eveniet nihil et asperiores! Cum velit, eos non amet porro at explicabo rerum nihil aliquid laborum maiores. Optio, sit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, fugiat aliquam. A, hic est. Perspiciatis delectus reiciendis id a sunt, facilis deserunt beatae nobis quidem, possimus unde exercitationem nesciunt suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla debitis dolorem sed unde explicabo. Facilis voluptate sint eius, recusandae delectus eveniet! Quas aliquam est quis. Impedit soluta repudiandae consectetur illum.
                            <br><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde fugiat, error rerum quis a harum ratione voluptas repellendus pariatur quisquam explicabo repudiandae molestiae tempore modi iusto aspernatur nam! Eum, totam.
                        </span>
                    </div>
                </div>

            @endif
        </div>
    </div>
</x-app-layout>

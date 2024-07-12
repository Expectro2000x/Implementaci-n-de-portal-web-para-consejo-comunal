<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Auth;
use App\Models\User;

class NoticiaController extends Controller
{
    /**
     * Configuración para mostrar un listado de las noticias
     * en la base de datos, con un límite establecido de diez noticias
     * por página de listado.
     */
    public function index()
    {
        $noticias = Noticia::with('user')->latest()->paginate(10);
        return view('noticias', ['noticias' => $noticias]);

    }

    /**
     * En este punto se redirije al usuario a la pestaña donde puede
     * crearse una nueva noticia
     */

     public function create(Noticia $noticia)
     {
         $this->authorize('create', $noticia);
         return view('nueva-noticia');
     }

    /**
     * Aquí se crea la capacidad de almacenar nuevos valores
     * en la base de datos. Además se establecen aquellos
     * parámetros requeridos para poder almacenar la información
     * en la base de datos. Y se agrega un mensaje de exito para indicar al
     * usuario que la variable del nuevo paciente ha sido agregada a la base
     * de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'cuerpo' => 'required',
        ]);
       Noticia::create($request->all());
       return to_route('noticias.index')->with('status',
       'Nueva noticia añadida con exito');
    }

    /**
     * Por medio de está opción se muestra la información completa
     * de una noticia seleccionada.
     */
    public function show(Noticia $noticia)
    {
        return view('informacion-noticia', ['noticia' => $noticia]);
    }

    /**
     * Con esta parte se muestra la página en la cual
     * se puede editar una noticia especifica.
     */
    public function edit(Noticia $noticia)
    {
       return view('editar-noticia', ['noticia' => $noticia]);
    }

    /**
     * En este punto se actualiza la información
     * de una noticia.
     */
    public function update(Request $request, Noticia $noticia)
    {
        $this->authorize('update', $noticia);

        $validated = $request->validate([
            'titulo' => 'required',
            'cuerpo' => 'required',
        ]);
        $noticia->update($validated);
        return to_route('noticias.index')->with('status',
        'Noticia actualizada con exito');
    }

    /**
     * Utilizando está funcion se elimina una noticia
     * de la base de datos .
     */
    public function destroy(Noticia $noticia)
    {
        $this->authorize('delete', $noticia);

        $noticia->delete();
        return to_route('noticias.index')->with('exito',
        'Noticia eliminada con exito');
    }
}

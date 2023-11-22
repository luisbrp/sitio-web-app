<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use Illuminate\Support\Facades\Auth;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las tareas del usuario autenticado
        $tareas = Auth::user()->tareas;

        // Retornar la vista con las tareas
        return view('perfil', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar el formulario para crear una nueva tarea
        return view('anadirTarea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'nullable',
            'fecha_limite' => 'nullable|date',
            'estado' => 'required|in:Pendiente,En progreso,Completado',
        ]);

        // Crear una nueva tarea asociada al usuario autenticado
        $tarea = new Tarea($request->all());
        Auth::user()->tareas()->save($tarea);

        return redirect()->route('anadirTarea')->with('success', 'OK!, la tarea se insertó correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarea $tarea)
    {
        // Mostrar la vista con los detalles de la tarea
        return view('detalleTarea', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tarea $tarea)
    {
        // Mostrar el formulario de edición de la tarea
        return view('editarTarea', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'nullable',
            'fecha_limite' => 'nullable|date',
            'estado' => 'required|in:Pendiente,En progreso,Completado',
        ]);

        // Actualizar los datos de la tarea
        $tarea->update($request->all());

        return redirect()->route('editarTarea', $tarea)->with('success', 'OK!, la tarea se actualizó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        // Eliminar la tarea
        $tarea->delete();

        return redirect()->route('perfil')->with('success', 'OK!, la tarea se eliminó correctamente');
    }
}

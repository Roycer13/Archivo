<?php

namespace App\Http\Controllers;

use App\Models\Dato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DatoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $datos = Dato::paginate();

        return view('dato.index', compact('datos'))
            ->with('i', ($request->input('page', 1) - 1) * $datos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $dato = new Dato();

        return view('dato.create', compact('dato'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DatoRequest $request): RedirectResponse
    {
        Dato::create($request->validated());

        return Redirect::route('datos.index')
            ->with('success', 'Dato created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $dato = Dato::find($id);

        return view('dato.show', compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $dato = Dato::find($id);

        return view('dato.edit', compact('dato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DatoRequest $request, Dato $dato): RedirectResponse
    {
        $dato->update($request->validated());

        return Redirect::route('datos.index')
            ->with('success', 'Dato updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Dato::find($id)->delete();

        return Redirect::route('datos.index')
            ->with('success', 'Dato deleted successfully');
    }
}

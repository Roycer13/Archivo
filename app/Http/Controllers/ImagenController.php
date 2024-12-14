<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ImagenRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $imagens = Imagen::paginate();

        return view('imagen.index', compact('imagens'))
            ->with('i', ($request->input('page', 1) - 1) * $imagens->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $imagen = new Imagen();

        return view('imagen.create', compact('imagen'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ImagenRequest $request): RedirectResponse
    {
        Imagen::create($request->validated());

        return Redirect::route('imagens.index')
            ->with('success', 'Imagen created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $imagen = Imagen::find($id);

        return view('imagen.show', compact('imagen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $imagen = Imagen::find($id);

        return view('imagen.edit', compact('imagen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ImagenRequest $request, Imagen $imagen): RedirectResponse
    {
        $imagen->update($request->validated());

        return Redirect::route('imagens.index')
            ->with('success', 'Imagen updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Imagen::find($id)->delete();

        return Redirect::route('imagens.index')
            ->with('success', 'Imagen deleted successfully');
    }
}

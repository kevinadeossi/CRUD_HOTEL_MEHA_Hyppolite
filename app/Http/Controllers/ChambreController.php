<?php

namespace App\Http\Controllers;

use App\Models\Chambre;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ChambreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $chambre = Chambre::all();
        return view ('index')->with('chambres', $chambre);
    }

 
    public function create(): View
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Chambre::create($input);
        return redirect('chambre')->with('flash_message', 'Chambre ajouté');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $chambre = Chambre::find($id);
        return view('show')->with('chambres', $chambre);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chambre $chambre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chambre $chambre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chambre $chambre)
    {
        //
    }
}

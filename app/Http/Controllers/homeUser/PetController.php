<?php

namespace App\Http\Controllers\HomeUser;

use App\Http\Controllers\Controller;
use App\Models\Pet;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
   
    public function index()
    {
        $pets = Pet::where('user_id', Auth::id())->with('clientes')->get();
        return view('user.cadastrarPet', compact('pets'));
    }

 
    public function create()
    {
        $clients = Cliente::all();
        return view('user.cadastrarPet', compact('clients'));
    }

  
public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'species' => 'required',
    ]);

   Pet::create([
        'name' => $request->name,
        'species' => $request->species,
        'breed' => $request->breed,
        'color' => $request->color,
        'gender' => $request->gender,
        'birth_date' => $request->birth_date,
        'weight' => $request->weight,
        'client_id' => Auth::user()->cliente_id, // Corrigido aqui
        'user_id' => Auth::id(),
    ]);
    return redirect()->route('pets.create')->with('success', 'Pet cadastrado com sucesso!');
}



    public function edit(Pet $pet)
    {
        if ($pet->user_id != Auth::id()) {
            abort(403);
        }

        $clients = Cliente::all();
        return view('site.user.pets.edit', compact('pet', 'clients'));
    }

 
    public function update(Request $request, Pet $pet)
    {
        if ($pet->user_id != Auth::id()) {
            abort(403);
        }

        $request->validate([
            'name' => 'required',
            'species' => 'required',
            'client_id' => 'required|exists:clients,id',
        ]);

        $pet->update([
            'name' => $request->name,
            'species' => $request->species,
            'breed' => $request->breed,
            'color' => $request->color,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'weight' => $request->weight,
            'client_id' => $request->client_id,
        ]);

        return redirect()->route('pets.index')->with('success', 'Pet atualizado com sucesso!');
    }

    
    public function destroy(Pet $pet)
    {
        if ($pet->user_id != Auth::id()) {
            abort(403);
        }

        $pet->delete();

        return redirect()->route('pets.index')->with('success', 'Pet deletado com sucesso!');
    }
}


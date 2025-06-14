<?php

namespace App\Http\Controllers;

use App\Models\Adm;
use App\Models\cliente;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdiminController extends Controller
{
    public function cadastroAdm(){
        return view('user.cadastroAdm');
    }




 public function storeAdm(Request $request)
    {

        if (Adm::where('email', $request->email)->exists()) {
            return back()->with('error', 'Este e-mail já está cadastrado.')->withInput();
        }

        if ($request->password !== $request->password_confirmation) {
            return back()->with('error', 'As senhas não coincidem.')->withInput();
        }


        $adm = new Adm();
        $adm->name = $request->name;
        $adm->email = $request->email;
        $adm->password = bcrypt($request->password);
        $adm->save();

        return redirect()->route('login')->with('success', 'Administrador cadastrado com sucesso!');
    }


   public function dashboard()
   {
      $totalClientes = Cliente::count();
      return view('site.admin.index', compact('totalClientes'));
   }

     public function pets()
    {
        $pets = Pet::with('cliente', 'user')->get();
        return view('site.admin.pets', compact('pets'));
    }


    public function createPet()
    {
        $clientes = Cliente::all();
        return view('site.admin.pets-create', compact('clientes'));
    }

    // Salvar Pet no banco
    public function storePet(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'species' => 'required',
            'cliente_id' => 'required|exists:cliente_id',
        ]);

        Pet::create([
            'name' => $request->name,
            'species' => $request->species,
            'breed' => $request->breed,
            'color' => $request->color,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'weight' => $request->weight,
            'cliente_id' => $request->cliente_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('adm.pets')->with('success', 'Pet cadastrado com sucesso!');
    }


   public function clients()
   {
      $clientes = Cliente::all();
      return view('site.admin.clientes', compact('clientes'));
   }

   public function service()
   {
      return view('site/admin/servicos');
   }
   public function mensage()
   {
      return view('site/admin/mensage ');
   }
   public function doctors()
   {
      return view('site/admin/doctors');
   }
   public function finance()
   {
      return view('site/admin/finance');
   }
}

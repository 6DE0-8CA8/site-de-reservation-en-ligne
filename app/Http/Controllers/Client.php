<?php

namespace App\Http\Controllers;

use App\Models\client as ModelsClient;
use Illuminate\Http\Request;

class Client extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'prenom' => 'required/string/max:222',
            'email' => 'required/email/unique:clients,email',
            'telephone' => 'required/string/max:111',
            'adresse' => 'nullable/string/max222',
        ]);

        Client::create($request->all());
        return redirect()->route('clients.index')->with('success', 'client ajouter avec success');
    }
    public function show(string $id)
    {
        $clients = Client::findorfail($id);
        return view('client.show', compact('clients'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $clients = Client::findorfail($id);
       return view('client.edit', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'prenom' => 'required/string?max:222',
            'email' => 'required/email/unique:clients,email',
            'telephone' => 'required/string/max:111',
            'adresse' => 'nullable/string/max:222',
        ]);
        $clients = Client::findorfail($id);
        $clients->update($request->all());
        return redirect()->route('clients.index')->with('success', 'client modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::findorfail($id)->delete();
        return redirect()->route('clients.index')->with('success', 'client supprimer avec success');
    }
}

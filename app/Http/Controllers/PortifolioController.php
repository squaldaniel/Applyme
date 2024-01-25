<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PortifolioRequest;
use App\Models\PortifolioModel;

class PortifolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('portifolio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortifolioRequest $request)
    {
        $photo = $request->file('projectphoto');
        // Gerar um nome único para o arquivo
        $photoname = uniqid() . '_' . $photo->getClientOriginalName();
        $photo->move(public_path('uploads'), $photoname);
        PortifolioModel::create([
            'user_id' => auth()->user()->id,
            'port_name' => $request->projectname,
            'port_photo' => $photoname,
            'port_description' => $request->projectdescricion,
        ]);
        return redirect()->back()->with('messages', "projeto inserido com sucesso!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

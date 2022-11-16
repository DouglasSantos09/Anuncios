<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\anuncios;

class AnunciosController extends Controller
{
   
    public function index()
    {
        return anuncios::all();
    }

 
  
    public function store(Request $request)
    {
        anuncios::create($request->all());
    }

    public function show($id)
    {
        return anuncios::findOrFail($id);
    }
   
    public function update(Request $request, $id)
    {
        $anuncios= anuncios::findOrfail($id);
        $anuncios->update($request->all());
    }


    public function destroy($id)
    {
        $anuncios= anuncios::findOrfail($id);
        $anuncios->delete();
    }
}

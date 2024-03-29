<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function create(CategorieRequest $request)
    {
        $validatedData = $request->validate($request->rules());

        Categorie::create([
            'name' => $validatedData['categ']
        ]);

        return redirect()->back()->with('success', 'Vous avez ajouter la categorie ' . $validatedData['categ'] . ' avec succès');
    }


    public function update(Request $request, Categorie $id)
    {
        $validate = $request->validate([
            'newcateg' => 'required'
        ]);
        $id->update([
            'name' => $validate['newcateg']
        ]);

        return redirect()->back()->with('success', 'Vous avez ajouter la categorie avec succès');
    }


    public function destroy($id)
    {
        $categories = Categorie::findOrFail($id);
        $categories->delete();

        return redirect()->back()->with('success', 'Vous avez ajouter la categorie avec succès');;
    }
}
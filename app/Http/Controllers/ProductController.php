<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=product::paginate(5);
        return view("produits.index",compact('products'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("produits.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'bail|required|alpha',
            'detail'=>'bail|required|max:250'
        ]);
         //ici on a creer une instance appeler new product et on utiliser cette syntaxe pour incrementer les meme valeurs de product davant
        $product=new product;
        $product->name=$request->name;
        $product->detail=$request->detail;
        $product->save();
              return redirect()->route('products.index')
                  -> with('info', 'Le produit a bien ete cree');








    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        return view('produits.show', compact('product'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        return view("produits.edit", compact('product'));

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index')
                ->with('info','Le produit a bien ete modifie');



        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return back()->with('info','le produit a bien ete supprimer');


        //
    }
}


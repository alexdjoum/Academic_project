<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $productvalidate = $request -> validate([
            "name" => ["required","string","min:2","max:255"],
            "price" => ["required","numeric"],
            "description" => ["required","string"],
            "categorie_id" => ["required","numeric"],
            "image" => ["required","mimes:png,jpg,jpeg","max:4096"]
            
        ]);

        $path=$request->file("image")->store("public/image");

        $produit = Produit::create([
                "name" => $productvalidate["name"],
                "price" => $productvalidate["price"],
                "description" => $productvalidate["description"],
                "categorie_id" => $productvalidate["categorie_id"],
                "image" => $path                 
        ]);

        return response($produit, 201);
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $produit= DB::table(produits)
        -> join ("categories","produit.categorie_id","=","categories.id")
        -> select ("produits.*","categories.name")
        -> get ();

        return $produit;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $productvalidate = $request -> validate([
            "name" => ["string"],
            "price" => ["numeric"],
            "description" => ["string"],
            "categorie_id" => ["numeric"],
            "image" => ["mimes:png,jpg,jpeg","max:4096"]
            
        ]);

        $path=$request->file("image")->store("public/image");
        
        $produit=Produit::find($id);
        if(!$produit){
            return response(["message"=>"aucune voiture de trouve avec id $id"],404);
        }
        $produit -> update ($productvalidate);

        return response (["message" =>"Produit mis à Jour"],201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,  $id)
    {
        $produit = Produit::find($id);
        
        if(!$produit){
            return response (["message" => "aucune voiture de trouve avec cet id $id"],404);
        }
        
        $value= Produit::destroy($id);

        if(boolval($value)==false){
            return response (["message" => "Aucun produit de toruvee avec cet id $id"],404);
        }
        return response (["message" => "Produit Supprimé"],200);

    }
}

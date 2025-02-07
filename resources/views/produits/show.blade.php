@extends('produits.templates')
@section ('content')
<div class="row">
    <div class="col-6 h2">
        Affichage des détails dun produit
        <div>
            <div class="col">
                <a class=btn btn-primary href="{{route('products.index')}}">RETOUR</a>
                </div>
            </div>
            <div class="row">
                <div class="col-1 h5">Nom:</div>
                <div class="col">{{$product->name}}</div>
            </div>

                <div class="row">
                    <div class="col-1 h5">Detail:</div>
                    <div class="col">{{$product->detail}}</div>
                </div>
            @endsection













Retour

Nom:
Extendable Table
«div class="col-6 h2">
Détails: Table rectangulaire en métal 120 - 80


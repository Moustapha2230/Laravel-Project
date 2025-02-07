@extends('produits.templates')

@section('content')
<div class="row">
<div class="col-6">
    <h2>Exemple CRUD: Gestion de Produits</h2>
</div>
   <div class="col">
<a class="btn btn-success" href="{{route('products.create') }}">
          Créer un nouveau produit
</a>

</div>

@if(session()->has('info'))
     <div class="alert alert-success">
        {{ session('info') }}
 </div>
 @endif

 <div class="row">
    <table class ="table table-striped">
    <tr><th>Nom</th>
        <th>Details</th>
        <th colspan="3" class="col-3">Action</th>
        <tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->detail}}</td>
                <td><a class="btn btn-primary" href="{{ route('products.show' ,$product)}}">Voir<a/a></td>
                <td><a class="btn btn-warning" href="{{ route('products.edit' ,$product)}}">Modifier<a/a></td>
                <td>
                    <form action="{{route('products.destroy',$product)}}"  method="POST"
                    onsubmit="return confirm('Etes vous sure de vouloir supprimer ce Produit')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">supprimer</button>
                    </form>
                </td>
            </tr>
                    @endforeach
                    </table>
                    </div>
                    {{$products->links()}}
                    @endsection














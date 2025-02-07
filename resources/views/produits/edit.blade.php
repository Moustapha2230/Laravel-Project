@extends ('produits.templates')
@section ('content')
<div class="row">
    <div class="col-6 h2">Modifier un produit <div>
        <div class="col">
            <a class=btn btn-primary href="{{route('products.index')}}">RETOUR</a>
            </div>
        </div>
        <form action="{{route('products.update',$product)}}"  method="POST">
        @csrf
        @method('PUT')
         <div class="col-md-6">
            <label for="name">Nom:</label>
            <input id="name" type="text" name="name" class="form-control" value="{{ $product->name }}">
            @error('name')
            <div class="alert alert-danger{{ $message }}</div>
            @enderror
             </div>
                        <div class="col-md-6">
                            <label for="detail"> Detail: </label>
                            <textarea name="detail" id="detail" class="form-control"> {{ $product->detail }}</textarea>
                            @error('detail')
                            <div class="alert alert-danger">{{ $message }} </div>

                            @enderror
                            <div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary"> VALIDER </button>
                                    </div>
                                    </form>
                                    @endsection




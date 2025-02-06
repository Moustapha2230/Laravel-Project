@extends('produits.templates')

@section('content')
<di class="row">
    <di class="col-6 h2"> creer un nouveau produit </div>
        <di class="col">
            <a class="btn btn-primary" href="{{route('products.index') }}"> Retour </a> 
            </div>
            <form action="{{route('products.store') }}" method="POST">
                @csrf
                <di class="col-md-6">
                    <label for="name"> nom:</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                        <di class ="alert alert-danger"> {{ $message }}</div>
$
                        @enderror
                        </div>
                        <di class="col-md-6">
                            <label for="detail"> Detail: </label>
                            <textarea name="detail" id="detail" class="form-control"> {{ old('detail') }}</textarea>
                            @error('detail')
                            <di class="alert alert-danger">{{ $message }} </div>

                            @enderror
                            <div>
                                <di class="col-md-6">
                                    <button type="submit" class="btn btn-primary"> VALIDER </button>
                                    </div>
                                    </form>
                                    @endsection





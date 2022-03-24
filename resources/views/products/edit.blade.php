@extends('layouts.main')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product) }}" method="post">
            @method('PUT')
            @csrf
            <div class="my-3 ">
                <label for="name" class="form-label">Nome del Prodotto</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('title', $product->name) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ old('description', $product->description) }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01"
                    value="{{ old('price', $product->price) }}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image', $product->image)  }}">
            </div>
            <button type="submit" class="btn btn-success">Conferma</button>
        </form>
    </div>
@endsection

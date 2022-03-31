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

        <h2>Crea un nuovo prodotto</h2>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Inserisci nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Inserisci descrizione</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description">
            </div>
            <div class="mb-3 ">
                <label class="-label" for="exampleCheck1">Inserisci prezzo</label>
                <input type="number" class="form-control" id="exampleCheck1" name="price">
            </div>
            <div class="mb-3 ">
                <label class="-label" for="exampleCheck1">Inserisci link immagine</label>
                <input type="string" class="form-control" id="exampleCheck1" name="image">
            </div>
            <div class="mb-3 ">
                <select class="form-select @error('brand_id') is-invalid @enderror" name="brand_id">
                    <option value="">Nessuna Marca</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}" @if (old('brand_id', $brand->id) == $brand->id) selected @endif>
                            {{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>
@endsection

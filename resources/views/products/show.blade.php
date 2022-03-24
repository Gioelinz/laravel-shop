@extends('layouts.main')

@section('content')
    <div>
        <figure>
            <img src="{{ $product->image }}" alt="">
        </figure>
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <div>{{ $product->price }}</div>
        <a class="btn btn-info"href="{{ route('products.index') }}">Home</a>
        <a class="btn btn-primary" href="{{ route('products.edit', ['product' => $product->id]) }}">Modifica</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger"type="submit">Delete</button>
        </form>
    </div>
@endsection

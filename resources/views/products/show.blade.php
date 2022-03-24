@extends('layouts.main')

@section('content')
<div>
    <ul class="mt-4">
        <li class="text-center">
            <figure>
                <img class="img-fluid mt-3 rounded-pill" src="{{ $product->image }}" alt="">
            </figure>
            <h2 class="pt-2 text-uppercase">{{ $product->name }}</h2>
            <p class="w-25 mx-auto">{{ $product->description }}</p>
            <div class="pt-2">{{ $product->price }}</div>
            <a class="btn btn-info"href="{{ route('products.index') }}">Home</a>
        <a class="btn btn-primary" href="{{ route('products.edit', ['product' => $product->id]) }}">Modifica</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger"type="submit">Delete</button>
            </form>
        </li>
    </ul>
</div>
@endsection


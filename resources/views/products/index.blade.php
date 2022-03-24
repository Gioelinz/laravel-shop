@extends('layouts.main')

@section('content')
    <ul class="mt-4">
        @foreach ($products as $product)
            <li class="text-center">
                <figure>
                    <img class="img-fluid mt-3 rounded-pill" src="{{ $product->image }}" alt="">
                </figure>
                <h2 class="pt-2 text-uppercase">{{ $product->name }}</h2>
                <p class="w-25 mx-auto">{{ $product->description }}</p>
                <div class="pt-2">{{ $product->price }}</div>
                <a href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
            </li>
        @endforeach
    </ul>
@endsection

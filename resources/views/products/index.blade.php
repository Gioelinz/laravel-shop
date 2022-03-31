@extends('layouts.main')

@section('content')
    <div class="row">

        @foreach ($products as $product)
            <div class="col-4">
                <div class="text-center">
                    <figure>
                        <img class="img-fluid mt-3 rounded-pill" src="{{ $product->image }}" alt="">
                    </figure>
                    <h2 class="pt-2 text-uppercase">{{ $product->name }}</h2>
                    <p class="w-25 mx-auto">{{ substr($product->description, 0, 20) }}...</p>
                    <div class="pt-2 fw-bold">€{{ $product->price }}</div>
                    <h5>
                        <span
                            class="badge rounded-pill bg-{{ $product->brand->color ?? 'dark' }}">{{ $product->brand->name ?? '-' }}</span>
                    </h5>

                    @forelse ($product->colors as $color)
                        <p>{{ $color->color }}</p>
                    @empty
                        <p>Colore Sconosciuto</p>
                    @endforelse
                    <a class="btn btn-primary"
                        href="{{ route('products.show', ['product' => $product->id]) }}">Dettagli</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection

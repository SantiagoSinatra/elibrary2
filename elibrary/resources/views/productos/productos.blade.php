@extends('layouts.default')

@section('content')
<section class="container">
<ul class="mt-5">
    @foreach ($products as $product)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h2 class="card-title">{{$product->name}}</h2>
            <h3 class="card-text">${{$product->precio}}</h3>
            <h3 class="card-text">{{$product->categoria->name}}</h3>
            <a href="#" class="btn btn-primary">Comprar</a>
        @if (Auth::User()->id == 1)
        <a href="{{route('editar', ['id' => $product->id])}}" class="btn btn-primary">Editar</a>
        <a href="{{route('eliminar', ['id' => $product->id])}}" class="btn btn-primary">Eliminar</a>
        @endif
        </div>
      </div>
    <br>
    @endforeach
</ul>
</section>
@endsection

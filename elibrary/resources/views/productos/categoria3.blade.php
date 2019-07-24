@extends('layouts.default')

@section('content')
<section class="container">
<ul class="mt-5">

    @foreach ($products as $product)

        @if ($product["categoria_id"] == 3)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h2 class="card-title">{{$product["name"]}}</h2>
            <h3 class="card-text">${{$product["precio"]}}</h3>
            {{-- <h3 class="card-text">{{$product->["categoria"]}}</h3> --}}
        </div>
      </div>
    <br>
        @endif
    @endforeach
     
        
</ul>
</section>
@endsection
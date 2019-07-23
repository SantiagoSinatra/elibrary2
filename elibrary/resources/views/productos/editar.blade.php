@extends('layouts.default')

@section('content')
<div id='product-container' class="container-fluid p-0">
        <section class="container pt-3 pb-3">
            <form class='form-group' method="POST" action="{{route('editar',['id' => $product->id])}}" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <article class="row">
                    <section class="col-md-3 col-sm-6">
                        <article class="product-grid mb-4 mt-4">
                            <section class="product-image">
                                <img class="pic-1" src="{{asset($product->imageLoc)}}">
                                <img class="pic-2" src="{{asset($product->imageLoc2)}}">
                            </section>
                        </article>
                        <article class='container-fluid p-0 mb-4'>
                            <label for="imageLoc">Imagen 1</label>
                            <input type="file" value="imageLoc" class='form-control-file' name="imageLoc" id="imageLoc">
                            <hr>
                            <label for="imageLoc2">Imagen 2</label>
                            <input type="file" value="imageLoc2" class='form-control-file' name="imageLoc2" id="imageLoc2">
                        </article>
                    </section>
                    <section class="col-md-9 col-sm-6">
                        <article class="card-body p-2 pl-4">
                            <h3 class="title mb-3"><input type="text" style="width: 100%;" name="name" id="name" value="{{$product->name}}"></h3>
                            <hr>
                            <dl class="item-property">
                                <dt>Descripción</dt>
                                <dd><input type="text" class='form-control' name="description" id="description" value="{{$product->description}}"></dd>
                            </dl>
                            <dl class="param param-feature">
                                <dt>Categoría</dt>
                                <dd>
                                    <select name="category_id" id="category_id">
                                        <option value="{{$product->category['id']}}" selected>{{$product->category['name']}}</option>
                                        @foreach ($categories as $category)
                                            @if ($category->name != $product->category['name'])
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </dd>
                            </dl>  <!-- item-property-hor .// -->
                            <dl class="param param-feature">
                                <dt>Precio $</dt>
                                <dd><input type="number" class='form-control' name="precio" id="precio" value="{{$product->precio}}"></dd>
                            </dl>  <!-- item-property-hor .// -->
                            <hr>
                            <div class='container-fluid p-0'>
                                <a href="/productos" class="btn btn-info btn-md">Volver</a>
                                <input type="submit" class="btn btn-primary btn-md" value="Actualizar">
                            </div>
                        </article>
                    </section>

                </article>
            </form>
            @if ($errors->any())
            <div class="container alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </section>
    </div>
@endsection

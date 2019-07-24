@extends('layouts.default')

@section('assets')
    <link rel="stylesheet" href="{{asset('css/inicio.css')}}">
@endsection

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <section class="carousel-inner">
            <article class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/carousel/carousel1.jpg')}}" alt="First slide">
            <article class="carousel-caption d-none d-md-block">
                <h3 class="carousel azul"><a href=#">Los mejores productos para la oficina</a></h3>
                <h5>Precios exclusivos para empresas y agrupaciones</h5>
            </article>
            </article>
            <article class="carousel-item">
            <img class="d-block w-100 height: 200px" src="{{asset('images/carousel/carousel2.jpg')}}" alt="Second slide">
            <article class="carousel-caption d-none d-md-block">
            <h3 class="carousel azul"><a href="#">El mejor precio y la mejor calidad</a></h3>
            <h5>Elibrary sólo vende productos de la mejor calidad para que tu dinero valga más</h5>
            </article>
            </article>
            <article class="carousel-item">
            <img class="d-block w-100 height: 200px" src="{{asset('images/carousel/carousel3.jpg')}}" alt="Third slide">
            <article class="carousel-caption d-none d-md-block">
                <h3 class="carousel azul"><a href="#">Juntos cuidamos nuestro futuro</a></h3>
                <h5>Elibrary dona $1 por cada compra que realizás a organizaciones que ayudan a mejorar el medio ambiente</h5>
            </article>
            </article>
        </section>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
<section class="ss-inicio-categorias container-fluid bg-dark">
    <article class="row d-flex justify-content-center pt-3">
        <h1 class="ss-inicio-titles text-center">¡Mira todo lo que tenemos!</h1>
    </article>
    <article class="row mt-5 pb-5">
        <div class="col-lg-2 col-12">
            <img class="rounded-circle fotos" src="{{asset('images/categorias/oficina.jpg')}}" alt="articulos de oficina" width="250" height="250">
            <h4 class="ss-inicio-cattext">Oficina</h4>
        </div>
        <div class="col-lg-2 col-12 ">
                <img class="rounded-circle fotos" src="{{asset('images/categorias/juguetes.jpg')}}" alt="articulos de oficina" width="250" height="250">
                <h4 class="ss-inicio-cattext">Juguetes</h4>
        </div>
        <div class="col-lg-2 col-12 ">
                <img class="rounded-circle fotos" src="{{asset('images/categorias/herramientas.jpg')}}" alt="articulos de oficina" width="250" height="250">
                <h4 class="ss-inicio-cattext">Herramientas</h4>
        </div>
        <div class="col-lg-2 col-12 ">
                <img class="rounded-circle fotos" src="{{asset('images/categorias/utiles.png')}}" alt="articulos de oficina" width="250" height="250">
                <h4 class="ss-inicio-cattext">Utiles Escolares</h4>
        </div>
        <div class="col-lg-2 col-12 ">
                <img class="rounded-circle fotos" src="{{asset('images/categorias/profesional.jpg')}}" alt="articulos de oficina" width="250" height="250">
                <h4 class="ss-inicio-cattext">Utiles Profesionales</h4>
        </div>
        <div class="col-lg-2 col-12 ">
                <img class="rounded-circle fotos" src="{{asset('images/categorias/maquinas.jpg')}}" alt="articulos de oficina" width="250" height="250">
                <h4 class="ss-inicio-cattext">Maquinaria</h4>
        </div>
    </article>
</section>

<div class="bg-dark pb-5">
    <section class="ss-inicio-descuentos container bg-light rounded pb-5">
        <article class="row">
            <div class="col-lg-6 col-12 d-flex justify-content-center mt-5">
                <div class="ss-inicio-descuentos">
                    <img src="{{asset('images/productos/valijafaber.jpg')}}" alt="valija faber">
                    <h2 class="text-center">Valija FaberCastell</h2>
                    <h3 class="text-center">Precio: $599.99 !</h2>
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-center mt-5">
                <div class="ss-inicio-descuentos">
                        <img src="{{asset('images/productos/singer.jpg')}}" alt="valija faber">
                        <h2 class="text-center">Maquina de Coser Singer</h2>
                        <h3 class="text-center">Precio: $19899.99 !</h2>
                </div>
            </div>
                <div class="col-lg-6 col-12 d-flex justify-content-center mt-5">
                        <div class="ss-inicio-descuentos">
                            <img src="{{asset('images/productos/tablero.jpg')}}" alt="valija faber">
                            <h2 class="text-center">Tablero Técnico Profesional</h2>
                            <h3 class="text-center">Precio: $6299.99 !</h2>
                        </div>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-center mt-5">
                        <div class="ss-inicio-descuentos">
                            <img src="{{asset('images/productos/parker.jpg')}}" alt="valija faber">
                            <h2 class="text-center">Grabado de lapiceras</h2>
                            <h3 class="text-center">Precio: $1999.85 !</h2>
                        </div>
                </div>
        </article>
    </section>
</div>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <section class="carousel-inner">
            <article class="carousel-item active">
            <img class="d-block w-100" src="{{asset('images/carousel/carousel4.jpg')}}" alt="First slide">
            <article class="carousel-caption d-none d-md-block">
                <h3 class="carousel"><a href="#">Hacemos envios a todo el país</a></h3>
                <h5>Entregas fuera de buenos aires en menos de 24 hs!</h5>
            </article>
            </article>
            <article class="carousel-item">
            <img class="d-block w-100 height: 200px" src="{{asset('images/carousel/carousel5.jpg')}}" alt="Second slide">
            <article class="carousel-caption d-none d-md-block">
            <h3 class="carousel"><a href="#">Callcenter a su disposición</a></h3>
            <h5>Las 24hs los 7 dias de la semana</h5>
            </article>
            </article>
            <article class="carousel-item">
            <img class="d-block w-100 height: 200px" src="{{asset('images/carousel/carousel3.jpg')}}" alt="Third slide">
            <article class="carousel-caption d-none d-md-block">
                <h3 class="carousel"><a href="#">Juntos cuidamos nuestro futuro</a></h3>
                <h5>Elibrary dona $1 por cada compra que realizás a organizaciones que ayudan a mejorar el medio ambiente</h5>
            </article>
            </article>
        </section>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>

<div class="row bg-dark pt-5 pb-5">
        <div class="col-12  text-center">
                <h1 class="ss-inicio-titles text-center">¿Dónde estamos ubicados?</h1>
        </div>
<div class="col-12 d-flex justify-content-center ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.1864516967757!2d-58.4458648843131!3d-34.54883428047368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436efe09303%3A0xfb39818e7624ac76!2sDigital+House!5e0!3m2!1ses!2sar!4v1563850805453!5m2!1ses!2sar" width="1920" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>

@endsection

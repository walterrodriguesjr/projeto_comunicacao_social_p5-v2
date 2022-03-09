{{-- VIEW PRINCIPAL, TRAZENDO EXTENDS, E ENVIANDO PELAS SECTIONS, 
    CONTEUDOS PERSONALIZADOS E INDIVIDUAIS DA PAGINA, RECEBIDO NO TEMPLATE1 PELOS YIELDS --}}

@extends('layouts.template.template1')

@section('titulo', 'Home')

{{-- CONTEUDO DE SEARCH ENVIADO POR SECTION PARA O TEMPLATE1 --}}
@section('conteudoPesquisa')
    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control"
                        placeholder="Digite para pesquisar..."> <button class="btn btn-secondary">Buscar</button> </div>
            </div>
        </div>
    </div>
    @endsection

    {{-- CABEÇALHO DA AREA DE CARDS --}}
    @section('conteudoCards')
    <div class="p-5 bg-light">
        <h1 class="display-5">Eventos Cadastrados</h1>
        <hr class="my-2">

        {{-- AREA DE CARDS --}}
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    @endsection



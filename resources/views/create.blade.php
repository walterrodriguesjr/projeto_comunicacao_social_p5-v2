
{{-- UTILIZA O TEMPLATE BASICO --}}
@extends('layouts.template.template1')

{{-- SECTION QUE ENVIA PARA O YIELD O PARAMETRO DE TITULO PARA SER SUBSTITUIDO --}}
@section('titulo', 'Criar Eventos')

{{-- SECTION QUE ENVIA O FORM ABAIXO APOS SUBMIT PARA O YIELD DO TEMPLATE, PARA SER RENDERIZADO --}}
@section('conteudoFormCadastroEvento')

  {{-- FORM DE CRIAÇÃO DE NOVO EVENTO --}}
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="{{ route('create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control"
                    placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Som"> Som
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Alimentação"> Alimentação
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Fotos"> Fotos
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Filmagem"> Filmagem
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection

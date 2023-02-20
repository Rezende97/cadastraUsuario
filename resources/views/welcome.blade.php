@extends('layout/home')

@section('title', 'Listagem')

@section('content')

    <div id="listagemContainer">

        <div class="title-listar">
            <h2>Listagem de Registros</h2>
        </div>
        <div class="button-create-usuario">
            <a class="btn btn-primary button-adc" href="/registerUser" role="button">Adicionar Usuário</a>
        </div>
        <div >
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Documento</th>
                        <th scope="col">RG</th>
                        <th scope="col">Data de Nascimento</th>
                        <th scope="col">Est Civil</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Rua</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Complemento</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($registros as $registro)
                        <tr class="table-light">
                            <th scope="col">{{ $registro->id }}</th>
                            <td>{{ $registro->nome }}</td>
                            <td>{{ $registro->documento }}</td>
                            <td>{{ $registro->rg }}</td>
                            <td>{{ $registro->data_nascimento }}</td>
                            <td>{{ $registro->est_civil }}</td>
                            <td>{{ $registro->telefone }}</td>
                            @foreach ($registro->moradias as $endereco)
                                <td>{{ $endereco->rua }}</td>
                                <td>{{ $endereco->bairro }}</td>
                                <td>{{ $endereco->complemento }}</td>
                                <td>{{ $endereco->estado }}</td>
                                <td>
                                    <a class="btn btn-info" href="show/{{ $registro->id }}" role="button">Atualizar</a>
                                    <form action="destroy/{{ $registro->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger button-excluir">Excluir</button>
                                    </form>
                                </td>                                
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endSection
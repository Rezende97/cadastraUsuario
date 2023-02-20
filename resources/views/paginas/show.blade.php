@extends('layout.home')

@section('title', 'Atualizar Cadastro')

@section('content')

    <div class="form-register">
        <div class="title-listar">
            <h2>Atualizar Dados</h2>
        </div>
        <div class="formu">
            <form action="/update/{{$registro->id}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-user">
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control col-6" id="nome" name="nome" placeholder="Nome Completo" value="{{$registro->nome}}" style="width: 20rem;" required >
                    </div>
                    <div class="form-group">
                        <label for="documento" class="form-label">Documento</label>
                        <input type="text" class="form-control col-6" id="documento" name="documento" placeholder="informe o CPF ou CNPJ" value="{{$registro->documento}}" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="rg" class="form-label">RG</label>
                        <input type="text" class="form-control col-6" id="rg" name="rg" placeholder="Informe o RG" value="{{$registro->rg}}" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control col-6" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento" value="{{$registro->data_nascimento}}" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="est_civil" class="form-label">Estado Civil</label>
                        <input type="text" class="form-control col-6" id="est_civil" name="est_civil" placeholder="Informe o Estado Civil" value="{{$registro->est_civil}}" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control col-6" id="telefone" name="telefone" placeholder="Telefone ou Celular" value="{{$registro->telefone}}" style="width: 20rem;" required>
                    </div>
                </div>
                <div class="form-cep">
                    @foreach($registro->moradias as $moradia)
                        <div class="form-group">
                            <label for="cep" class="form-label">Cep</label>
                            <input type="text" class="form-control col-6" id="cep" name="cep" placeholder="Informe o CEP" value="{{$moradia->cep}}" style="width: 20rem;" required>
                        </div>
                        <div class="form-group">
                            <label for="rua" class="form-label">Rua</label>
                            <input type="text" class="form-control col-6" id="rua" name="rua" value="{{$moradia->rua}}" style="width: 20rem;" required>
                        </div>
                        <div class="form-group">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control col-6" id="bairro" name="bairro" placeholder="" value="{{$moradia->bairro}}" style="width: 20rem;" required>
                        </div>
                        <div class="form-group">
                            <label for="estado" class="form-label">Estado</label>
                            <input type="text" class="form-control col-6" id="estado" name="estado" value="{{$moradia->estado}}" style="width: 20rem;" required>
                        </div>
                        <div class="form-group">
                            <label for="complemento" class="form-label">Complemento</label>
                            <input type="text" class="form-control col-6" id="complemento" name="complemento" placeholder="Complemento" value="{{$moradia->complemento}}" style="width: 20rem;" required>
                        </div>
                    @endforeach
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Atualizar">
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
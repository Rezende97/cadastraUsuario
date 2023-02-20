@extends('layout/home')

@section('title', 'Cadastrar Usuário')

@section('content')

    <div class="form-register">
        <div class="title-listar">
            <h2>Cadastrar usuario</h2>
        </div>
        <div class="formu">
            <form action="{{route('register.store')}}" method="post">
                
                @csrf
                <div class="form-user">
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control col-6" id="nome" name="nome" placeholder="Nome Completo" style="width: 20rem;" required >
                    </div>
                    <div class="form-group">
                        <label for="documento" class="form-label">CPF</label>
                        <input type="text" class="form-control col-6" id="documento" name="documento" placeholder="informe o CPF ou CNPJ" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="rg" class="form-label">RG</label>
                        <input type="text" class="form-control col-6" id="rg" name="rg" placeholder="Informe o RG" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control col-6" id="data_nascimento" name="data_nascimento" placeholder="Data de Nascimento" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="est_civil" class="form-label">Estado Civil</label>
                        <input type="text" class="form-control col-6" id="est_civil" name="est_civil" placeholder="Informe o Estado Civil" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control col-6" id="telefone" name="telefone" placeholder="Telefone ou Celular" style="width: 20rem;" required>
                    </div>
                </div>

                <div class="form-cep">
                    <div class="form-group">
                        <label for="cep" class="form-label">Cep</label>
                        <input type="text" class="form-control col-6" id="cep" name="cep" placeholder="Informe o CEP" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="rua" class="form-label">Rua</label>
                        <input type="text" class="form-control col-6" id="rua" name="rua" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control col-6" id="bairro" name="bairro" placeholder="" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control col-6" id="estado" name="estado" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control col-6" id="complemento" name="complemento" placeholder="Complemento" style="width: 20rem;" required>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary button-submit" type="submit" value="Cadastrar">
                    </div>
                </div>
            </form>

        </div>
    </div>
@endSection
@extends('app')

@section('content')

<form method="POST" action="/funcionario/{{$funcionario->id}}">
@csrf
@method('PUT')
    <div class="row form-group">
        <div class="col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome"  name="nome"  placeholder="Seu nome" value="{{$funcionario->nome}}">
        </div>
        <div class="col-md-6">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone"  name="telefone" placeholder="Telefone" maxlength="15" value="{{$funcionario->telefone}}">
        </div>
    </div>
    <div class="row form-group">
        <div class=" col-md-6">
            <label for="setor">Setor</label>
            <select class="form-control"  name="setor" id="setor"  value="{{$funcionario->setor_id}}">
                <option ></option>
                @foreach (\App\Setor::All() as $setor)
                <option value="{{ $setor->id }}"   @if($funcionario->setor_id == $setor->id) selected  @endif > {{ $setor->descricao }} </option>
                @endforeach
            </select>
        </div>
        <div class=" col-md-6">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" maxlength="15" value="{{$funcionario->celular}}">
        </div>
    </div>
        <div class="row form-group">
        <div class="col-md-6">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf"  name="cpf" placeholder="Seu cpf" value="{{$funcionario->cpf}}">
        </div>
        <div class=" col-md-6">
            <label for="ctps">CTPS</label>
            <input type="text" class="form-control" id="ctps" name="ctps" placeholder="Sua carteira de trabalho" value="{{$funcionario->ctps}}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection


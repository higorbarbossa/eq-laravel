@extends('app')

@section('content')
<h2>Funcionario</h2>
<hr>
<form method="POST" action="/funcionario">
@csrf
    <div class="row form-group">
        <div class="col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome"  name="nome"  placeholder="Seu nome">
        </div>
        <div class="col-md-6">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone"  name="telefone" placeholder="Telefone" maxlength="15">
        </div>
    </div>
    <div class="row form-group">
        <div class=" col-md-6">
            <label for="setor">Setor</label>
            <select class="form-control"  name="setor" id="setor">
                <option ></option>
            @foreach (\App\Setor::All() as $setor)
                <option value="{{ $setor->id }}">{{ $setor->descricao }}</option>
            @endforeach
            </select>
        </div>

        <div class=" col-md-6">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="Celular" maxlength="15">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-6">
            <label for="ctps">Carteira de trabalho</label>
            <input type="text" class="form-control" id="ctps"  name="ctps"  placeholder="Sua Carteira de Trabalho" maxlength="15">
        </div>
        <div class="col-md-6">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf"  name="cpf" placeholder="Seu cpf" maxlength="11">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection

@section('table')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">CTPS</th>
      <th scope="col">Contatos</th>
      <th scope="col">Setor</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($funcionarios as $f)
    <tr>
      <th scope="row">{{ $f->id }}</th>
      <td>{{ $f->nome }}</td>
      <td>{{ $f->cpf }}</td>
      <td>{{ $f->ctps }}</td>
      <td> 
        {{ $f->telefone }} 
        <br>
        {{ $f->celular }}
      </td>
      <td>{{ $f->setor->descricao }}</td>

      <td> 
        <a href="funcionario/{{$f->id}}/edit">
            <button class="btn btn-outline-info btn-sm">
                <i class="fas fa-trash-alt">editar</i>
            </button>
        </a>
      </td>
      <td>

            <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modalExemplo" onclick="getElementById('deletar').action='funcionario/{{$f->id}}'">
                <i class="fas fa-trash-alt">apagar</i>
            </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Desejar apagar o registro?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <form id="deletar" action="" method="post">
      @method('DELETE')
      @csrf
        <button class="btn btn-outline-danger btn-sm">
            <i class="fas fa-trash-alt">SIM</i>
        </button>
      </form>
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">NÃO</button>
      </div>
    </div>
  </div>
</div>

@endsection

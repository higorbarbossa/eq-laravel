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
                <i class="fas fa-trash-alt">edit</i>
            </button>
        </a>
      </td>
      <td>
      <form action="funcionario/{{$f->id}}" method="post">
      @method('DELETE')
      @csrf
        <button class="btn btn-outline-danger btn-sm">
            <i class="fas fa-trash-alt">delete</i>
        </button>
      </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

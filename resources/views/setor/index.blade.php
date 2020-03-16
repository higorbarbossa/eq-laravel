@extends('app')

@section('content')
<h2>Setores</h2>
<hr>
<form method="POST" action="/setor">
@csrf
    <div class="row form-group">
        <div class="col-md-6">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao"  name="descricao"  placeholder="Setor">
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
      <th scope="col">Descricao</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($setores as $s)
    <tr>
      <th scope="row">{{ $s->id }}</th>
      <td>{{ $s->descricao }}</td>
      <td> <a href="setor/{{$s->id}}/edit"><button class="btn btn-outline-info btn-sm">
            <i class="fas fa-trash-alt">editar</i>
        </button>
        </a>
      </td>
      <td>
      <form action="setor/{{$s->id}}" method="post">
      @method('DELETE')
      @csrf
        <button class="btn btn-outline-danger btn-sm">
            <i class="fas fa-trash-alt">apagar</i>
        </button>
      </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

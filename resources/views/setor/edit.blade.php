@extends('app')

@section('content')

<form method="POST" action="/setor/{{$setor->id}}">
@csrf
@method('PUT')
    <div class="row form-group">
        <div class="col-md-6">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao"  name="descricao"  placeholder="Setor" value="{{$setor->descricao}}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection


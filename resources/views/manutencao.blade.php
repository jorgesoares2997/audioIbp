@extends('layouts.main')

@section('title', 'Manutenção')

@section('content')



<div class='equipamentos'>
<h1>Equipamentos para manutenção</h1>
<p>Nessa área, você pode adicionar equipamentos que sofreram avarias ou precisam de manutenção preventiva,<br> fazendo isso, outros membros da equipe tomam conhecimento e podem executar esse serviço ou mandar para mão de obra especializada. 
<br>Você tambem pode visualizar equipamentos já documentados na página de <a href="/">Equipamentos</a></p>
    
    <div class="col-md-6 offset-md-3">
      <h1>Adicione um equipamento</h1>
      <form action="/equipamentos" method="POST" enctype="multipart/form-data">
        @csrf
    
        <div class="form-group">
          <label for="name">Nome do Equipamento:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="...">
        </div>
        <div class="form-group">
          <label for="date">Data do ocorrido:</label>
          <input type="date" class="form-control" id="date" name="date">
        </div>
    
        <div class="form-group">
          <label for="onde">Onde aconteceu?</label>
          <select name="onde" id="onde" class="form-control">
            <option value="...">...</option>
            <option value="Templo Principal">Templo Principal</option>
            <option value="Templo Anexo">Templo Anexo</option>
            <option value="Estudio">Estudio</option>
            <option value="Auditorio">Auditório</option>
            <option value="Outro">Outro</option>
          </select>
        </div>
        <div class="form-group">
          <label for="condit">Condição do equipamento:</label>
          <select name="condit" id="condit" class="form-control">
            <option value="...">...</option>
            <option value="Quebrado">Quebrado</option>
            <option value="Em conserto">Em conserto</option>
            <option value="Em analise">Em analise</option>
            <option value="Consertado">Consertado</option>
          </select>
        </div>
        <div class="form-group">
          <label for="description">Como aconteceu:</label>
          <textarea type="text" class="form-control" rows="4" id="description" name="description" placeholder="...">
    </textarea>
        </div>
        <div class="form-group">
          <label for="image">Imagem do Equipamento:</label>
          <input type="file" id="image" name="image" class="from-control-file">
        </div>
    
        <input type="submit" class="btn btn-primary" value="Adicionar Equipamento">
      </form>
    </div>
</div>




@endsection
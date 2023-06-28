@extends('layouts.main')

@section('title', 'Editando: ' . $equip->name)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando : {{$equip->name}}</h1>
  <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input type="file" id="image" name="image" class="from-control-file">
      <img src="/img/equips/{{$equip->image}}" alt="{{$equip->title}}" class="image-preview">
    </div>
    <div class="form-group">
      <label for="name">Evento:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Nome do evento" value='{{$equip->name}}'>
    </div>
    <div class="form-group">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control" id="date" name="date" value="{{$equip->date->format('Y-m-d')}}">
    </div>
    <div class="form-group">
      <label for="onde">Cidade:</label>
      <input type="text" class="form-control" id="onde" name="onde" placeholder="Local do evento" value="{{$equip->onde}}">
    </div>
    
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?" >{{$equip->description}}</textarea>
    </div>
   
    <input type="submit" class="btn btn-primary" value="Editar Evento">
  </form>
</div>

@endsection
@extends('layouts.main')

@section('title', $usuario->name)

@section('content')

<div style='padding:24px' id="info-container" class="container-fluid col-md-6 offset-md-3">
    <div class="col-md-8 offset-md-2">
      <div class="row profile-container">
        <div class="col-md-12 about-container">
          <h1 style='padding:24px' class="page-title">Olá {{$usuario->name}}</h1>         
          <form action="/events/updateProfile/{{$usuario->id}}" method="POST" enctype="multipart/form-data"> 
          @csrf
        @method('PUT')          
            <div class="form-group">
                <label for="image">Foto:</label>
                <input type="file" id='image' name='image' class='form-control-file'>   
                <span id='circle-image'><img src="/img/user/{{$usuario->image}}" alt="{{$usuario->name}}"></span> 
                  
            </div>
            
           
         
           
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nome do colaborador" value='{{$usuario->name}}'>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value='{{$usuario->email}}'>
            </div>
            <div class="form-group">
                <label for="bio">Bio:</label>
                <input type="text" class="form-control" id="bio" name="bio" placeholder="informações do colaborador" value='{{$usuario->bio}}'>
            </div>
            <div class="form-group">
                <label for="aniversario">Aniversário:</label>
                <input type="date" class="form-control" id="aniversario" name="aniversario" placeholder="aniversário do colaborador" value='{{$usuario->aniversario}}'>
            </div>
           
            
            

            
            <input type="submit" class="btn btn-primary" value="Fazer alterações">
          </form>
            
         
         
          
        </div>
       
      </div>
    </div>
  </div>


@endsection
@extends('layouts.main')

@section('title', 'Equipamento: ' . $equip->id)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/equips/{{ $equip->image }}" class="img-fluid" alt="{{ $equip->name }}">
      </div>
      
      
      <div id="info-container" class="col-md-6">
        <h1>{{ $equip->name }}</h1>
      
        
        <p><ion-icon name="key-outline"></ion-icon> Id: {{ $equip->id }}</p>
        <p><ion-icon name="location-outline"></ion-icon> {{ $equip->onde }}</p>
        <p><ion-icon name="medkit-outline"></ion-icon> {{ $equip->condit }}</p>
        <p class="card-date"> <ion-icon name='calendar-outline'></ion-icon>  {{ date('d/m/Y', strtotime($equip->date)) }}</p>
        <p><ion-icon name="build-outline"></ion-icon> {{ $equip->created_at }}</p>
        <p><ion-icon name="star-outline"></ion-icon> {{ $equipOwner['name']}}</p>

        
       
    
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Sobre o Equipamento:</h3>
        <p class="equip-description">{{ $equip->description }}</p>
      </div>
    </div>
  </div>

@endsection
@extends('layouts.main')

@section('title', 'Audio IBP')



@section('content')



<!-- parallax -->
<main>
    <div id='parallax'>
        <div id='about'>
            <div id='text-about'>
                <h1>Equipe de audio IBP</h1>
                <p>esse site é destinado ao manuseio da equipe de audio e sonoplastia da <a href="https://www.instagram.com/ibprazeres/"><strong>Igreja Batista em Prazeres</strong></a></p>
                <p>nos conheça ou nos faça uma visita!</p>
            </div>
            <div id='equipe-about'>
                <a class='btn btn-primary' href="/equipe">Equipe</a>
                <a class='btn btn-primary' href="/about">Sobre nós</a>
    
            </div>
        </div>
    
    </div>
    @auth
    <!-- Busca  -->
    <div id="search-container" class="col-md-12">
    <h1>Busque um equipamento</h1>
    <form action="/" method="GET">
        <input  type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        <button class='btn btn-dark'><ion-icon  name='search'></ion-icon></button>
    </form>
</div>
<div id="equips-container card-group" class="col-md-12 ">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Dashboard</h2>
    <p class="subtitle">Veja os equipamentos documentados</p>
    @endif
    <!-- dashboard -->
    <div id="cards-container" class="row ">
        @foreach($equips as $equip)
        <div class="card col-md-3" id='card' >
            @if($equip->image)
            <img src="/img/equips/{{ $equip->image }}" class='img-fluid rounded-start' alt="{{ $equip->name }}">
            @else
            <img src="/img/casa.png" class='img-fluid rounded-start' alt="{{$equip->name}}">
            @endif
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($equip->date)) }}</p>
                <h5 class="card-title">{{ $equip->name }}</h5>
                <p class='card-condit'> {{$equip->condit}}</p>
                

                <a href="/events/{{ $equip->id }}" id='saber-mais' class="btn btn-dark">Saber mais</a>
                
            </div>
        </div>
        @endforeach
        @if(count($equips) == 0 && $search)
            <p>Não foi possível encontrar nenhum equipamento com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($equips) == 0)
            <p>Não há equipamentos disponíveis</p>
        @endif
    </div>
</div>
@endauth
@guest
<div class="col-md-12">
    <div class="row">
        <h1>Faça login para ter acesso á Dashboard de equipamentos</h1>
    </div>
</div>
@endguest
   

</main>


@endsection
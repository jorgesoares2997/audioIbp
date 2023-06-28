@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($equips) > 0)
    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>#</th>  
                <th scope='col'>Nome</th>
                <th scope='col'>Participantes</th>
                <th scope='col'>Ações</th>                
            </tr>
        </thead>
        <tbody>
            @foreach($equips as $equip)
            <tr>
                <td scope='row'>{{$loop->index + 1}}</td>
                <td><a href="/equips/{{$equip->id}}">{{$equip->title}}</a></td>
                <td>{{ count($equip->users) }} Participantes</td>
                <td><a href="/equipamentos/edit/{{$equip->id}}" class='btn btn-info edit-btn'><ion-icon name='create-outline'></ion-icon> Editar</a>
               <form action="/equipamentos/{{$equip->id}}" method='POST'>
                @csrf
                @method('DELETE')
                <button type='submit' class='btn btn-danger delete-btn'><ion-icon name='trash-outline'></ion-icon> Deletar</button>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>você ainda não tem eventos, <a href="/equipamentos/create">Criar evento</a></p>
    @endif
</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Eventos que estou participando</h1>
</div>

    
   
</div>



@endsection
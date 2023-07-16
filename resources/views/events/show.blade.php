<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
       <!-- Fonte do Google -->
       <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style type="text/css">
body{
    width: 100%;
    
}.navbar{
    width: 100%;
    background-color: #444;   
}
.navbar-brand img{
    width: 60px;
    height: 65px;
}

p{
  font-size:20px;
}

#image-container,
#info-container{

  padding:24px;
}

#cabeca{
    display: flex;
    justify-content: space-between;    
    width: 70%;    
    padding-left: 32px;
}

#navbarNavDropdown a{
    color: #f3f3f3;
}


/* footer  */

.pre-footer{
   
   width: 100%;
   background-color: #444;
   margin-bottom: 45px;
   position: fixed;
   bottom: 5px;
}

#footer-icons{
   display: flex;
   flex-direction: row;
  
   justify-content: space-evenly;
}
#footer-icons li{
   list-style: none;
   font-size: 50px;
   color: #f3f3f3;    
   text-align: center;  
}
#footer-icons ion-icon{
   color: #f3f3f3;
   transition: .5s;
}

footer{
   width: 100%;
   height: 50px;
   position: fixed;
   bottom: 0;
   text-align: center;
   background-color: #444;
   color: #f3f3f3;
}
footer p{
   text-decoration: none;
}
#p-footer{
   margin-top: 10px;
   color: #f3f3f3;
   
}
#p-footer a{
   text-decoration: none;
}
    </style>
    <title>Equipamento: {{$equip->id}}</title>
    <script src='/js/script.js'></script>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark">
    <div class="container-fluid" id='cabeca'>
      
      <a class="navbar-brand" href="/"><img src="/img/casa.png" alt="logo da casa"></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" id='iframe-menu' aria-current="page" href='/' >Equipamentos</a>
          </li>
  
            <a class="nav-item nav-link" href='/about' id='about-menu' >Sobre nós</a>
  
          <li class="nav-item">
            <a class="nav-link" href="/equipe">Equipe</a>
          </li>
  
          @auth
                 <li class="nav-item">  <a class="nav-link" href="/manutencao">manutenção</a></li>
                <li class="nav-item">
                  <form action="/logout" method='POST'>
                    @csrf
                    <a href="/logout"
                     class='nav-link'
                    onclick="event.preventDefault();
                    this.closest('form').submit();">Sair</a>
                  </form>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                  <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                  <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                @endguest
          </div>
        </li>
        </ul>
  
    </div>
  </nav>
</header>
<main>
  <div class="container-fluid">
    <div class="row">
      
      @if(session('msg'))
      <p class="msg">{{session('msg')}}</p>
      @endif
      
    </div>
  </div>
</main>


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
        <div style='display:flex; justify-content:space-between; width:40%'> 
          <a href="/events/edit/{{$equip->id}}" class='btn btn-info edit-btn'><ion-icon name='create-outline'></ion-icon> Editar</a>
          <form action="/events/{{$equip->id}}" method='POST'>
                  @csrf
                  @method('DELETE')
                  <button type='submit' class='btn btn-danger delete-btn'><ion-icon name='trash-outline'></ion-icon> Deletar</button>
                  </form>
        </div>

        
       
    
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Sobre o Equipamento:</h3>
        <p style='text-align:start; width:40%' class="equip-description">{{ $equip->description }}</p>
      </div>
    </div>
  </div>


  <div class="pre-footer">
        
        <div>
            <div class='col-md-12'>
                
                  <ul id='footer-icons'>
                      
                      <li>
                          <a href="https://www.google.com/maps/dir/-8.1201442,-34.8955188/igrejabatista+em+prazeres/@-8.1432179,-34.9327758,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x7aae1c029cd26cd:0xb80eab7e54ab6bcb!2m2!1d-34.9305526!2d-8.1632108?entry=ttu" target='_blank'>
                              <ion-icon name="location-outline"></ion-icon>
                             
                          </a>
                          <p style='font-size:16px'>Nos faça uma visita</p>
                      </li>
                      <li>
                          
                          <a href="https://www.instagram.com/ibprazeres/" target='_blank'>
                              <ion-icon name="logo-instagram"></ion-icon>
                                
                          </a>
                          <p style='font-size:16px'>Nos siga nas redes sociais</p>
                      </li>
                      <li>
                          
                          <a href="https://www.youtube.com/@IgrejaBatistaemPrazeres" target='_blank'>
                              <ion-icon name="logo-youtube"></ion-icon>                          
                             
                          </a>
                          <p style='font-size:16px'>nos acompanhe no youtube </p>
                      </li>
                      
                  </ul>
            </div>
            
        </div>
    </div>
<footer>


    <a href="https://github.com/jorgesoares2997" target='_blank'>
        <p id='p-footer'>&copy; JS </p>
    </a>


</footer>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

</body>

</html>
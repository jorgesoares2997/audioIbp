@extends('layouts.main')

@section('title', 'index')

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
    <!-- About area  -->
    <div id='about-area'>
        <div class="container">
            <div class='row'>
                <div class='col-12'>
                    <h2 class='main-title'>Sobre a equipe de audio</h2>
                </div>
                <div class="col-md-6"><img id='mix' src="/img/mix.jpg" alt="equipe de audio"></div>
                    <div class="col-md-6">
                        <h3 class="about-title">Vivemos a Igreja nas Casas.</h3>
                        <p>Somos uma equipe que atua na <a href="https://keepo.io/ibprazeres/">IBP</a></p>
                        <p>Essa equipe foi formada á partir do crescimento da área do audio e da sonoplastia da Igreja Batista em Prazeres </p>
                        <p>Uma Igreja referencia em questões acústicas em Jaboatão dos Guararapes-PE</p>
                        <p>Nossos Valores:</p>
                            <ul id="about-list">
                                <li><ion-icon name="checkmark-sharp"></ion-icon> Somos Um grupo de voluntários</li>
                                <li><ion-icon name="checkmark-sharp"></ion-icon> Atuamos de maneira viva e inovadora</li>
                                <li><ion-icon name="checkmark-sharp"></ion-icon> Integramos outras áreas de atuaçao, como iluminação e streaming</li>
                                <li><ion-icon name="checkmark-sharp"></ion-icon> Valorizamos o aprendizado e o uso cotidiano</li>
                                <li><ion-icon name="checkmark-sharp"></ion-icon> Damos oportunidades de desenvolvimento ministerial</li>
                            </ul>
                    </div>
                </div>
            </div>
    </div>
    <!-- Iframe area  -->
    <div id='iframe-area'>
        <div class="container">
            <div class="column">
                <div class="col-12">
                    <h2 class="main-title">Conheça nossa Instituição</h2>
                </div>
                <h3 class="main-title">Nosso Podcast</h3>
                <div class='iframe'>
    
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/q3wDi46xVj4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <p>Nosso podcast alcança publicos<br> e aborda assuntos que o<br> culto convencional(que apesar de ser vital),<br> não pode alcançar ou abordar.</p>
                    </div>
                <h3 class="main-title">Nossa identidade</h3>
                <div class='iframe'>
    
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/3trEvuPvEco" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <p>Conheça a nossa identidade,<br> os valores que não abrimos mão<br> e que nos faz ser quem somos.</p>
                    </div>
                <div>
    
                </div>
             </div>
        </div>
    </div>
    
</main>


@endsection
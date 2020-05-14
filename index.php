<?php 
include_once 'scripts/app.php'; 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>j0ny_'s folio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9f6b657dbc.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet"> 



</head>

<body>

<!-- LOADER-->
<section id="loader" class="preloader">
	<div class="gooey">
			<span class="dot"></span>
			<div class="dots">
				<span></span>
				<span></span>
				<span></span>
			</div>
	</div>
</section>




    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="assets/jony2.svg" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-1">Sobre mim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sec-trabalho">Portfólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sec-contactos">Contactos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

       <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_PT/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="104039187983662"
  theme_color="#00e600"
  logged_in_greeting="Olá! Como posso ajudar?"
  logged_out_greeting="Olá! Como posso ajudar?">
      </div>

      <!-- Facebook end -->

        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h6>Bem-vindo, o meu nome é</h6>
                    <h1>
                        João Vasconcelos</h1>
                    <p>
                        tenho 21 anos, sou natural de Paços de Ferreira. Estou a estudar em no Intituto
                        Politécnico de Viana do Castelo, no qual o curso é <b>Engenharia da Computação Gráfica e
                            Multimédia</b>.

                    </p>
                    <button data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                        onclick="window.location.href='#sec-trabalho'" class="btn btn-light px-5 py-2"><a
                            href="#sec-trabalho"></a>Conheça o meu trabalho</button>
                </div>
                <div class="col-md-5 col-sm-12 h-25 w-3">
                    <img class="img-fluid" src="assets/CoolFace.png" alt="my face">
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" id="section-1" class="pray">
                            <img src="assets/JonyStyle.png" alt="jony">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="panel text-left">
                            <div id="intro" class="intro-text">
                                <h1>Sobre Mim</h1>
                                <p class="pt-4">O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão.
                                    O
                                    Lorem Ipsum
                                    tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500,
                                    quando
                                    uma misturou os caracteres de um texto para criar um espécime de livro. Este texto
                                    não
                                    só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica,
                                    mantendo-se
                                    essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das
                                    folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com
                                    os
                                    programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.
                                </p>
                                <p>
                                    O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O
                                    Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de
                                    1500, quando

                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            </section>
        <section class="section-2 container-fluid p-0">
            <div class="cover">
                <div class="content text-center">
                    <h1 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Tipo de serviços</h1>
                    <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Lorem ipsum dolor sit amet
                        consectetur
                        adipisicing elit. Odit similique expedita consequuntur at
                        doloribus dignissimos eaque ut beatae eos reiciendis. Sit consequuntur adipisci nobis non modi
                        asperiores, odio sunt labore.</p>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect" data-aos="flip-left" data-aos-duration="1000">

                        <i class="fas fa-drafting-compass"></i>
                        <h1>Design Gráfico</h1>

                    </div>
                    <div class="rect" data-aos="flip-right" data-aos-duration="1000">
                        <i class="fas fa-draw-polygon"></i>
                        <h1>Logo Design</h1>
                    </div>
                    <div class="rect" data-aos="flip-left" data-aos-duration="1000">
                        <i class="fas fa-bezier-curve"></i>
                        <h1>Motion Graphics</h1>
                    </div>
                    <div class="rect" data-aos="flip-right" data-aos-duration="1000">
                        <i class="fas fa-pencil-alt"></i>
                        <h1>Ilustração</h1>
                    </div>
                </div>
            </div>

            <div id="sec-trabalho" class="purchase text-center d-flex flex-md-row flex-wrap justify-content-center" >
                <h1 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Conheça o meu trabalho</h1>
                <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab maiores a quos nihil voluptatum
                    consectetur suscipit sit minus atque eius, quisquam assumenda ipsum numquam odio optio laudantium
                    nemo. Explicabo, atque.</p>
                    <?php 
                       printCard($count);
                       echo printQuotes();
                    ?>
            </div>

       
               
        </section>

       
       
     <!--     
        <section class="section-4">
            <div class="container text-center">
                <h1 class="text-dark">Conheça alguns clientes satisfeitos</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="team row">
               
                <div class="col-md-4 col-12">
                    
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center">
                                <div class="card mr-2 d-inline-block shadow-lg">
                                    <div class="card-img-top">
                                        <img src="" alt="Membro" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">Zézocas</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Modi, nemo
                                            nihil. Quo veniam quisquam vero ipsum voluptatem inventore recusandae saepe
                                            unde
                                            eligendi laudantium consequuntur suscipit officiis, praesentium odio quae
                                            sapiente.</p>

                                        <p class="text-black-50">CEO do Continente</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="card mr-2 d-inline-block shadow-lg">
                                    <div class="card-img-top">
                                        <img src="" alt="Membro" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">Zézocas</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Modi, nemo
                                            nihil. Quo veniam quisquam vero ipsum voluptatem inventore recusandae saepe
                                            unde
                                            eligendi laudantium consequuntur suscipit officiis, praesentium odio quae
                                            sapiente.</p>

                                        <p class="text-black-50">CEO do Continente</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="card mr-2 d-inline-block shadow-lg">
                                    <div class="card-img-top">
                                        <img src="" alt="Membro" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">Zézocas</h3>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Modi, nemo
                                            nihil. Quo veniam quisquam vero ipsum voluptatem inventore recusandae saepe
                                            unde
                                            eligendi laudantium consequuntur suscipit officiis, praesentium odio quae
                                            sapiente.</p>

                                        <p class="text-black-50">CEO do Continente</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                        </div>

                    </div>
                
                </div>
            
        </section>
       
    -->
       
        <section id="sec-contactos" class="section-3 container-fluid p-0 text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                    <h1 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Sinta-se à vontade para contactar-me</h1>
                    <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo amet molestias commodi,
                        accusantium, eveniet ullam facilis, nostrum sapiente quae cupiditate minus veniam at similique
                        itaque odio quibusdam quas dignissimos. Fuga?</p>
                </div>
            </div>
            <div class="plataform row">
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="desktop shadow-lg" data-aos="flip-left" data-aos-duration="1000">
                        <div class="d-flex flex-row justify-content-center">
                            <i class="fas fa-money-check fa-3x py-2 pr-3"></i>
                            <div class="text text-left">
                                <h3 class="pt-1 m-0">Preços</h3>
                                <p class="p-0 m-0">Preços Razoáveis e moderados</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <div class="desktop shadow-lg" data-aos="flip-right" data-aos-duration="1000">
                        <div class="d-flex flex-row justify-content-center">
                            <i class="far fa-clock fa-3x py-2 pr-3"></i>
                            <div class="text text-left">     
                                 <h3 class="pt-1 m-0">Tempo</h3>
                            <p class="p-0 m-0">Trabalhos completos em pouco Tempo</p>
                          </div>
                      
                        </div>
                    </div>
                </div>
            </div>
           

            
        </section>
        
        
     

    </main>
    <footer>
        <div class="container-fluid p-0" data-aos="flip-down" data-aos-duration="3000">
            <div class="row text-left">
                <div class="col-md-5 col-md-5">
                    <h1 class="text-light">Informações</h1>
                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus,
                        commodi?</p>
                    <p class="pt-4 text-muted">
                        © Copyright 2020 All Rights Reserved | Design by:
                        <span><a href="">João Vasconcelos</a></span>
                    </p>
                </div>
                <div class="col-md-5">
                    <h4 class="text-light">Newsletter</h4>
                    <p class="text-muted">fica atento</p>
                    <form class="form-inline">
                        <div class="col pl-0">
                            <div class="input-group pr-5">
                                <input type="text" class="form-control bg-dark text-white" placeholder="Email">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-sm-12">
                    <h4 class=" text-light">Segue-me nas redes!</h4>
                    <p class="text-muted">E fica a par de novos trabalhos</p>
                    <div class="column">
                        <a href="https://www.facebook.com/joaoeduv"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/who_dat_j0ny/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.behance.net/j0ny_"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js"
        integrity="sha256-UJoqRMiZ86QgG17Pw8Dy4XoUyGg8JuBAxH8YC8qTjcQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js"
        integrity="sha256-UJt5JHwfrhok9SvTqbi6rRw2ajY0ugeYsIT2pioVDJY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenLite.min.js"
        integrity="sha256-VfpswwlYKouVmlpnJW0MszMzLm9lH2yfB6ty3d1WsB4=" crossorigin="anonymous"></script>

    <script src="scripts/app.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>

    <script src="lib/jquery-migrate-3.0.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>
    <script>
        AOS.init();

        var x=window.scrollX;
    var y=window.scrollY;
    window.onscroll=function(){window.scrollTo(x, y);};

        $(window).on("load",function(){
            $("#loader").fadeOut("slow");
            window.onscroll=function(){};
            
        }); //LoaderFUNC

        $(document).ready(function() {
  $.ajaxSetup({ cache: true });
  $.getScript('https://connect.facebook.net/pt_PT/sdk.js', function(){
    FB.init({
      appId: '256774078775682',
      version: 'v7.0' // or v2.1, v2.2, v2.3, ...
    });     
    $('#loginbutton,#feedbutton').removeAttr('disabled');
    FB.getLoginStatus(updateStatusCallback);
  });
});

console.log(12);
    </script>
</body>

</html>
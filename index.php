<!DOCTYPE html>
<html>
<html lang="pt">

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Carrinho de Compras</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleCarrousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body>
    <section>
        <img src="./img/banner-site.png" class="banner" alt="">
    </section>

    <header class="container-fluid bg-alter text-white py-2">
        <section class="container">
            <section class="row">
                <article class="col-12">
                    <p class="text-center">Cursos - IA</p>
                </article>
            </section>
        </section>
    </header>

    <section class="three_box mb-5">
        <section class="container">
            <section class="row">
                <section class="col-md-4 mb-4">
                    <article class="box_text">
                        <i class="material-icons">computer</i>
                        <h3>Acessibilidade</h3>
                        <p>Nossos cursos estão disponiveis em uma plataforma responsiva , moderna e intuitiva permitindo
                            maior usabiliade para qualquer tipo de cliente, o proprio ato da compra é efetuado por um chatbot localizado nesse mesmo site, facilitando o processo de compra.</p>
                    </article>
                </section>
                <section class="col-md-4 mb-4">
                    <article class="box_text">
                        <i class="material-icons">smartphone</i>
                        <h3>Conforto</h3>
                        <p>a plataforma pode ser acessada de qualquer tipo de dispositivo pois tem suporte em varias
                            lojas de aplicativo, possuindo funcionalidades adequadas para cada plataforma. </p>
                    </article>
                </section>
                <section class="col-md-4">
                    <article class="box_text">
                        <i class="material-icons">tv</i>
                        <h3>Praticidade</h3>
                        <p>É possivel acessar os curso ate mesmo da tv da sua casa, permitindo mais praticidade no
                            dia-a-dia caso queira rever aulas de forma mais tranquila. </p>
                    </article>
                </section>
            </section>
        </section>
    </section>


    <section class="box-carrousel ">
        <section id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <article class="carousel-inner">
                <picture class="carousel-item active" data-bs-interval="10000">
                    <img src="./img/1.png" class="d-block w-100" alt="curso1">
                </picture>
                <picture class="carousel-item" data-bs-interval="2000">
                    <img src="./img/2.png" class="d-block w-100" alt="curso2">
                </picture>
                <picture class="carousel-item">
                    <img src="./img/3.png" class="d-block w-100" alt="curso3">
                </picture>
            </article>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
    </section>

    <section class="customer">
        <section class="container">
            <section class="row">
                <section class="col-md-12">
                    <article class="titlepage">
                        <h2>Avaliações de Alunos</h2>
                    </article>
                </section>
            </section>
            <article class="row">
                <section class="col-md-12">
                    <section id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <section class="carousel-inner">
                            <section class="carousel-item active">
                                <section class="container">
                                    <section class="carousel-caption ">
                                        <section class="row">
                                            <section class="col-md-9 offset-md-3">
                                                <article class="test_box">
                                                    <i><img src="img/cos.png" alt="#" /></i>
                                                    <h4>Juliano Tavares</h4>
                                                    <p>O curso de IA ofertado possui conteúdo abrangente e atualizado, instrutores experientes, estrutura bem organizada, recursos adequados e um sistema de avaliação eficaz. É importante pesquisar avaliações de outros alunos para garantir que atenda às necessidades individuais de aprendizado em IA.</p>
                                                </article>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                            <section class="carousel-item">
                                <section class="container">
                                    <section class="carousel-caption ">
                                        <section class="row">
                                            <section class="col-md-9 offset-md-3">
                                                <article class="test_box">
                                                    <i><img src="img/cos.png" alt="#" /></i>
                                                    <h4>Dominique Figueira</h4>
                                                    <p>O curso de IA produzido pela plataforma possui conteúdo abrangente e atualizado, instrutores experientes, estrutura bem organizada, recursos adequados e um sistema de avaliação eficaz. É importante pesquisar avaliações de outros alunos para garantir que atenda às necessidades individuais de aprendizado em IA.</p>
                                                </article>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                            <section class="carousel-item">
                                <section class="container">
                                    <section class="carousel-caption ">
                                        <section class="row">
                                            <section class="col-md-9 offset-md-3">
                                                <article class="test_box">
                                                    <i><img src="img/cos.png" alt="#" /></i>
                                                    <h4>Debora Glock</h4>
                                                    <p>O curso de IA oferecido pela plataforma de ensino possui conteúdo abrangente e atualizado, instrutores experientes, estrutura bem organizada, recursos adequados e um sistema de avaliação eficaz. É importante pesquisar avaliações de outros alunos para garantir que atenda às necessidades individuais de aprendizado em IA.</p>
                                                </article>
                                            </section>
                                        </section>
                                    </section>
                                </section>
                            </section>
                          
                        </section>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </section>
                </section>
            </article>
        </section>
    </section>



    <section id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>
        <i class="material-icons">shopping_cart</i>
    </section>


    <section class="chat-box">
        <article class="chat-box-header">
            ChatBoTelles
            <span class="chat-box-toggle"><i class="material-icons">close</i></span>
        </article>
        <section class="chat-box-body ">
            <section class="chat-box-overlay ">
            </section>
            <section id="chat-container" class="chat-logs">
                <section class="message bot-message " style="flex:1">
                    <section id="chat-container ">

                    </section>
                </section>
            </section><!--chat-log -->
        </section>
        <section class="chat-input">
            <form id="input-container" method="post">
                <input type="text" class="chat-input" id="user-input" name="user-input"
                    placeholder="Digite um comando..." />
                <input type="submit" id="submit-button" class="chat-submit"><i class="material-icons">send</i></input>
            </form>
        </section>
    </section>




    <footer>
        <section class="footer">
            <section class="container">
                <section class="row">
                    <section class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </section>
                    <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <h3>Sobre nos</h3>
                        <ul class="about_us">
                            <li>Somos uma pequena escola interessada em transformar a educação e o ensino atraves da difusão do conhecimento de IA em diferentas areas.</li>
                        </ul>
                    </article>
                    <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <h3>Contato</h3>
                        <ul class="conta">
                            <li>É possivel entrar em contato conosco utilizando qualquer uma das redes sociais disponibilizadas aqui.
                            </li>
                        </ul>
                    </article>
                    <article class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <form class="bottom_form">
                            <h3>Newsletter</h3>
                            <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                            <button class="sub_btn">Inscrever-se</button>
                        </form>
                    </article>
                </section>
            </section>
            <section class="copyright">
                <section class="container">
                    <section class="row">
                        <article class="col-md-12">
                            <p>© 2023 alguns direitos reservados Design by<a href="https://github.com/GustavoDiasC">Github</a></p>
                        </article>
                    </section>
                </section>
            </section>
        </section>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/style.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>
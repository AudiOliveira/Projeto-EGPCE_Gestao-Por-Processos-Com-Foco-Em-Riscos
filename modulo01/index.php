
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/bootstrap/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://cdn.egp.ce.gov.br/Imagens/favicon.png" />

    <!-- Jquery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CSS - Aula Web -->
    <link rel="stylesheet" href="https://cdn.egp.ce.gov.br/AulasWeb/css/style.css">
    
    <!-- GAMES -->
    <!-- Game colunas -->
    <link rel="stylesheet" href="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/games/game_colunas.css">
    <script src="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/games/game_colunas.js" defer></script>
    
    <!-- Game embaralhar -->
    <script src="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/games/game-embaralhar-palavra.js" defer></script>

    <!-- JS - Aula Web -->
    <script src="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/games/script.js" defer></script>

    <!-- Animate -->
    <link rel="stylesheet" href="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/animate/animate.min.css" />

    <!-- Wow JS -->
    <link rel="stylesheet" href="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/wow/animate_4.1.1.min.css">
    <script src="https://cdn.egp.ce.gov.br/AulasWeb/extensoes/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <title>EGPCE | Gestão por Processos com Foco em Riscos</title>
</head>
<body>
    <nav class="menulateral shadow-lg">
    <div class="btn-expandir">
        <img src="https://cdn.egp.ce.gov.br/Imagens/logo_egpce.png" alt="Logo EGPCE" id="logo">
    </div>
    <!-- Aqui ficam os itens e links do menu -->
<ul>
    <li class="menu">
        <a href="./index.php">
        <span class="icon "><i class="bi bi-person-workspace"></i>
        </span>
        <span class="txt">Apresentação</i></span>
        </a>
    </li>

    <!-- Tópicos com subtópicos -->
    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-1-circle"></i></span>
            <span class="txt">Gestão por Processos: Contextualizaçãos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 01/topico 01.php">
            <i class="bi bi-journals circulo"></i>01 Inicio</a>
        <a href="./topico 01/topico 01.2.php">
            <i class="bi bi-journals circulo"></i>01.2 principais Conceitos Associados à Gestão de Processos</a>
    </div>

    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-2-circle"></i></span>
            <span class="txt">Gestão de Processos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 02/topico 02.php">
            <i class="bi bi-journals circulo"></i>02 Inicio</a>
        <a href="./topico 02/topico 02.2.php">
            <i class="bi bi-journals circulo"></i>02.2 Gerenciamento para melhorar Processos</a>
    </div>

    <li class="menu">
        <a href="./referencias.php">
            <span class="icon"><i class="bi bi-book-half"></i></span>
            <span class="txt">Referências</span>
        </a>
    </li>
</ul></nav><nav class="navbar shadow-sm" id="navmenu">
    <div class="container-fluid">
        <button class="btn" id="btn_menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars fs-2"></i></button>

        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header text-center">
                <h5 class="offcanvas-title " id="offcanvasScrollingLabel"><img src="https://cdn.egp.ce.gov.br/Imagens/logo_egpce.png" alt="Logo EGPCE" id="img_logo"></h5>
                <button type="button" class="btn-close" id="close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <nav class="menulateral-responsivo">
                    <!-- EGPCE - Itens do menu -->
                    <!-- Aqui ficam os itens e links do menu -->
<ul>
    <li class="menu">
        <a href="./index.php">
        <span class="icon "><i class="bi bi-person-workspace"></i>
        </span>
        <span class="txt">Apresentação</i></span>
        </a>
    </li>

    <!-- Tópicos com subtópicos -->
    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-1-circle"></i></span>
            <span class="txt">Gestão por Processos: Contextualizaçãos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 01/topico 01.php">
            <i class="bi bi-journals circulo"></i>01 Inicio</a>
        <a href="./topico 01/topico 01.2.php">
            <i class="bi bi-journals circulo"></i>01.2 principais Conceitos Associados à Gestão de Processos</a>
    </div>

    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-2-circle"></i></span>
            <span class="txt">Gestão de Processos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 02/topico 02.php">
            <i class="bi bi-journals circulo"></i>02 Inicio</a>
        <a href="./topico 02/topico 02.2.php">
            <i class="bi bi-journals circulo"></i>02.2 Gerenciamento para melhorar Processos</a>
    </div>

    <li class="menu">
        <a href="./referencias.php">
            <span class="icon"><i class="bi bi-book-half"></i></span>
            <span class="txt">Referências</span>
        </a>
    </li>
</ul>                </nav>
            </div>
        </div>

        <a class="navbar-brand"></a>

        <form class="form" role="search">
            <a class="nav-link active nonedec me-3" aria-current="page" href="#">Nome_Completo</a>
            <button type="button" class="btn btn-outline-success" id="moodle">Ir para o Moodle</button>
            <button type="button" id="btn_tema">
                <div id="icone"></div>
                <div id="txtBtn"> Mudar Tema</div>
            </button>
            <!-- Btn Modo Escuro - End -->
        </form>
    </div>
</nav>    

    <!-- CONTEUDO - Begin -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">
                    
                    <div class="col-md-10 col-sm-8 container-fluid">
                         <!-- Título Pricipal -->
                         <h2 class="Titulo wow fadeIn">Apresentação</h2><br>
                        <div class="apresentacao_inicial">
                        
                            <div class="img_resp wow zoomIn" data-wow-delay="0.3s">
                                <img src="./imgs/group_14.png" style="width: 20rem;" alt="">
                                <p class="apresentacao_descricao" style="margin-left: 3rem;">Fonte: <a target="_blank" href="https://www.freepik.com/free-vector/company-teamwork-idea-generation-discussion-meeting-conference-corporate-workers-characters-brainstorming-business-strategy-planning_10782675.htm#page=2&query=Gest&atilde;o%20por%20processos%20com%20foco%20em%20riscos.%20vetor&position=11&from_view=search&track=ais&uuid=777fdf93-1814-47e9-a150-f6caa8115e35">Imagem retirada do Freepik</a></p>
                            </div>
                            
                            <!-- Apresentação -->
                            <div>
                                <p class="texto_dark apresentacao_texto wow zoomIn" data-wow-delay="0.3s">
                                <strong> Olá, <!--<br />
<b>Warning</b>:  Undefined variable $NomeUsuario in <b>/var/www/html/ModeloRecursos/index.php</b> on line <b>32</b><br />
 --> bem-vindo ao módulo 01 do curso Gestão por processos com foco em riscos.</strong><br>
 você irá aprender a aprimorar a eficiência organizacional através da Gestão por Processos, integrando estratégias para identificar, avaliar e gerenciar riscos em cada etapa. Ao final, estará apto a implementar práticas eficazes de gestão, alinhando processos de maneira proativa para impulsionar a melhoria contínua do negócio.
                                </p>
                                </div>
                            </div>

                           
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            As organizações, sejam elas públicas ou privadas, buscam continuamente otimizar recursos e alcançar resultados, sem comprometer a qualidade do produto ou serviço que está ofertando a seus clientes.<br><br>

                            Nesse contexto, identificar e gerenciar processos torna-se algo fundamental para o alcance dos objetivos supracitados, visto que por meio de um modelo de gestão que busca o alcance dos resultados focado em atender às necessidades dos clientes, as organizações têm conseguido eficiência e eficácia.<br><br>
                            </p>

                            <!-- Subtopico -->
                            <h3 class="Subtopico wow fadeIn">Objetivos</h3>
                            <!-- Lista  -->
                            <ul class="list">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i class="fa fa-dot-circle text-success"></i> Evidenciar os principais conceitos que são utilizados na gestão de processos;
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i class="fa fa-dot-circle text-success"></i> Apresentar a metodologia para manter e melhorar processos;
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i class="fa fa-dot-circle text-success"></i> Apresentar a importância do gerenciamento de processos como ferramenta para o alcance da melhoria contínua.
                                </li>
                            </ul>
                            <br>


                            <!-- Accordion com texto sobre o que será visto no curso -->
                            <div class="accordion destaques wow fadeInLeftBig" data-wow-delay="0.3s">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false">
                                    <h5>O que você verá agora?<span class="fw-lighter"><br>(Clique aqui para saber mais)</span></h5>
                                </button>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-content">
                                    Nesta aula, os principais conceitos e elementos pertinentes à gestão de processos são apresentados de forma bastante didática, fazendo uma relação com um exemplo cotidiano, com o qual todos são familiarizados.
                                    </div>
                                </div>
                            </div>

                            <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="./topico 01/topico 01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
                            </div>

                            <!-- BARRA DE PROGRESSO -->
                            <div id="progress-bar"></div>
                                    
                            <!-- FOOTER -->
                            <div class="footer">
    <hr>
    <div class="text-center">
        <p class="txt_final text-secondary">
            2024 EGPCE | Escola de Gestão Pública do Estado do Ceará
        </p>
        <br>
        <img class="img-fluid" style="max-width: 200px;"
        src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/seplag-cinza.png" alt="Logo Seplag">
    </div>
</div>                        </div> <!-- apresentacao_inicial -->
                    </div> <!-- col-md-10 col-sm-8 container-fluid -->

                </div> <!-- row -->
            </div> <!-- main-content container-fluid -->
        </section> <!-- section -->
    </div> <!-- all-conteudo -->
    <!-- CONTEUDO - End -->


    <!-- BACK TO TOP -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

</body>

</html>

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
        <span class="txt" style="font-size: 90%;">Apresentação</i></span>
        </a>
    </li>

    <!-- Tópicos com subtópicos -->
    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-1-circle"></i></span>
            <span class="txt" style="font-size: 90%;">Gestão por Processos: Contextualizaçãos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 01.php">
            <i class="bi bi-journals circulo"></i>01 - Inicio</a>
        <a href="./topico 01.php#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 - principais Conceitos Associados à Gestão de Processos</a>
    </div>

    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-2-circle"></i></span>
            <span class="txt" style="font-size: 90%;">Gestão de Processos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 02.php">
            <i class="bi bi-journals circulo"></i>02 - Inicio</a>
        <a href="./topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 - Gerenciamento para melhorar Processos</a>
    </div>

    <li class="menu">
        <a href="referencias.php">
            <span class="icon"><i class="bi bi-book-half"></i></span>
            <span class="txt" style="font-size: 90%;">Referências</span>
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
        <a href="./topico 01.php">
            <i class="bi bi-journals circulo"></i>01 - Inicio</a>
        <a href="./topico 01.php#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 - principais Conceitos Associados à Gestão de Processos</a>
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
        <a href="./topico 02.php">
            <i class="bi bi-journals circulo"></i>02 - Inicio</a>
        <a href="./topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 - Gerenciamento para melhorar Processos</a>
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
                        <!-- REFERÊNCIAS  -->
                        <h2 class="Titulo wow fadeIn"><span class="iconTitulo"><i
                                    class="bi bi-book-half"></i></span>Referências</h2><br>
                            <p class="Texto  wow fadeIn"> <i class="bi bi-book me-2"></i>
                            ABNT – ASSOCIAÇÃO BRASILEIRA DE NORMAS TÉCNICAS. <strong>Sistemas de gestão da qualidade:</strong> fundamentos e vocabulário. NBR ISO 9000. Rio de Janeiro, 2000.
                            </p>
                            <p class="Texto  wow fadeIn"> <i class="bi bi-book me-2"></i>
                            BPM CBOK – <strong>Guia para o Gerenciamento de Processos de Negócio.</strong> Corpo Comum do Conhecimento – ABPMP BPM CBOK V3.0, Association of Business Process Management Professionals, 2013.
                            </p>
                            <p class="Texto  wow fadeIn"> <i class="bi bi-book me-2"></i>
                            CAMPOS, Vicente Falconi. <strong>Gerenciamento da rotina do trabalho do dia-a-dia.</strong> 8. ed. Nova Lima/MG: INDG, 2004.
                            </p>
                            <p class="Texto  wow fadeIn"> <i class="bi bi-book me-2"></i>
                            FERREIRA, André Ribeiro. Gestão de processos. Módulo 3. – Brasília: ENAP / DDG, 2013. 179 p. <strong>Apostila do Programa de Desenvolvimento de Gerentes Operacionais – DGO.</strong> Revisão e adaptação – Coordenação-Geral de Projetos de Capacitação/ DDG / ENAP.
                            </p>
                            <p class="Texto  wow fadeIn"> <i class="bi bi-book me-2"></i>
                            SANTOS, Ricardo; ARRAES, Vanessa; MENDONÇA, Aline. Redesenho de processos: a experiência do estado do Ceará em prover melhoria na gestão. <strong>Anais do VI Congresso CONSAD de Gestão Pública</strong>, Brasília: DF, 2013.
                            </p>
                            <p class="Texto  wow fadeIn"> <i class="bi bi-book me-2"></i>
                            BRASIL. Ministério do Planejamento, Orçamento e Gestão. <strong>Padrão de Trabalho de Modelagem de Processos: Escritório de Processos.</strong> 2007.
                            </p>
                            <br>
                            <!-- FIM DAS REFERENCIAS  -->

                        <div class="border border-success m-4 p-4 text-rounded rounded rounded-lg wow animate__fadeInLeftBig"
                            data-wow-delay="0.3s">
                            <p><strong>Pronto,</strong> Nome_Completo <strong>agora você já pode fazer a avaliação do curso</strong>
                            Gestão por Processos com Foco em Riscos <strong>Módulo 01 abaixo, Boa Sorte!</strong>
</p>
                        </div>

                           <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="./topico 02.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                    <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="#" class="btn btn-outline-success" role="button" aria-pressed="true">Realizar a Atividade Avaliativa <i class="fa-solid fa-chevron-right"></i></a>
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
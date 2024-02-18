
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
        <span class="txt" style="font-size: 18px;">Apresentação</i></span>
        </a>
    </li>

    <!-- Tópicos com subtópicos -->
    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-1-circle"></i></span>
            <span class="txt" style="font-size: 18px;">Gestão por Processos: Contextualizaçãos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 01/topico 01.php">
            <i class="bi bi-journals circulo"></i>01 Inicio</a>
        <a href="./topico 01/topico 01.php#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 principais Conceitos Associados à Gestão de Processos</a>
    </div>

    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-2-circle"></i></span>
            <span class="txt" style="font-size: 18px;">Gestão de Processos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 02/topico 02.php">
            <i class="bi bi-journals circulo"></i>02 Inicio</a>
        <a href="./topico 02/topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 Gerenciamento para melhorar Processos</a>
        <a href="./topico 02/topico 02.php#subtopico2.3">
            <i class="bi bi-journals circulo"></i>02.3 Como é gerenciar riscos?</a>
    </div>

    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 03/topico 03.php"">
        <span class="icon "><i class="bi bi-3-circle"></i>
        </span>
        <span class="txt" style="font-size: 18px;">O modelo de estrutura integrada de gestão de riscos COSO II</i></span>
        </a>
    </li>
    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 04/topico 04.php"">
        <span class="icon "><i class="bi bi-4-circle"></i>
        </span>
        <span class="txt" style="font-size: 18px;">Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)</i></span>
        </a>
    </li>

    <li class="menu">
        <a href="referencias.php">
            <span class="icon"><i class="bi bi-book-half"></i></span>
            <span class="txt" style="font-size: 18px;">Referências</span>
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
        <a href="./topico 01/topico 01.php#subtopico1.2">
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
        <a href="./topico 02/topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 Gerenciamento para melhorar Processos</a>
        <a href="./topico 02/topico 02.php#subtopico2.3">
            <i class="bi bi-journals circulo"></i>02.3 Como é gerenciar riscos?</a>
    </div>

    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 03/topico 03.php"">
        <span class="icon "><i class="bi bi-3-circle"></i>
        </span>
        <span class="txt">O modelo de estrutura integrada de gestão de riscos COSO II</i></span>
        </a>
    </li>
    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 04/topico 04.php"">
        <span class="icon "><i class="bi bi-4-circle"></i>
        </span>
        <span class="txt">Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)</i></span>
        </a>
    </li>

    <li class="menu">
        <a href="referencias.php">
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
                        <h2 class="Titulo"><span class="iconTitulo"><i
                                    class="bi bi-book-half"></i></span>Referências</h2><br>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            AVALOS, José Miguel Aguilera. <strong>Auditoria e Gestão de Riscos</strong>. São Paulo: Saraiva, 2009.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            BRAGA. Marcus Vinicius de Azevendo. <strong>Gestão de Riscos no Setor Público:</strong> ampliando horizontes. Disponível em <a class="mouseover" target="_blank" href="http://www.administradores.com.br/artigos/negocios/gestao-dos-riscos-no-setor-publico-ampliando-os-horizontes/67507/">http://www.administradores.com.br/artigos/negocios/gestao-dos-riscos-no-setor-publico-ampliando-os-horizontes/67507/</a>. Acesso em 09/09/2017.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            BRITO, Claudenir; FONTENELLE, Rodrigo. <strong>Auditoria privada e governamental</strong>: teoria de forma objetiva e questões comentadas. Rio de Janeiro: Elsevier, 2013.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            CGE/CE. <strong>Auditoria Governamental de Processos com Foco em Riscos</strong>, Ernest & Young Terco, 2012. 258p.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            CGE/CE. Disponível em <a class="mouseover" target="_blank" href="http://www.cge.ce.gov.br/index.php/eventos-institucionais/seminario-controles-internos-gestao-de-riscos-e-programa-de-integridade">http://www.cge.ce.gov.br/index.php/eventos-institucionais/seminario-controles-internos-gestao-de-riscos-e-programa-de-integridade</a>. Acesso em 09 set. 2017.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            CGU. Disponível em <a class="mouseover" target="_blank" href="http://www.cgu.gov.br/sobre/legislacao/arquivos/instrucoes-normativas/in_cgu_mpog_01_2016.pdf">http://www.cgu.gov.br/sobre/legislacao/arquivos/instrucoes-normativas/in_cgu_mpog_01_2016.pdf</a>. Acesso em 15 ago. 2017.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            CHAVES, Renato Santos. <strong>Auditoria e Controladoria no Setor Público</strong> – Fortalecimento dos Controles Internos com Jurisprudência do TCU. 2 Ed. Curitiba: Juruá, 2011.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            COSO, <strong>Gerenciamento de Riscos na Empresa</strong> – Estrutura Integrada: Sumário Executivo e Estrutura (Versão em português), 2 vol. Jersey City: AICPA, 2007.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            DAMODARAN, Aswath. <strong>Gestão estratégica do risco</strong> – uma referência para a tomada de riscos empresariais. São Paulo: Bookman, 2009.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            DIAS, Sergio Vidal dos Santos. <strong>Auditoria de Processos Organizacionais</strong>: Teoria, Finalidade, Metodologia de Trabalho e Resultados Esperados - 3. ed – São Paulo: Atl-- ITEM 12
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            ENAP – Fundação Escola Nacional de Administração Pública. <strong>Guia sobre a gestão de riscos no serviço público.</strong> Stephen Hill. <em>In:</em> ENAP Cadernos 30. Brasília: En-- ITEM 13
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            HM Treasury. <strong><em>The Orange Book</strong> - Management of Risk - Principles and Concepts</em>, 2004. 52p. Disponível em: <a class="mouseover" target="_blank" href="https://goo.gl/wSqdZ6">https://goo.gl/wSqdZ6</a>
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            <em>House of Commons Committee of Public Accounts, <strong>Managing risks to improve public services</strong>.</em> 2005. 40p.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            IFAC. <em>International Federation of Accountants. Study 13. <strong>Corporate governance in the public sector</strong>: a governing body perspective.</em> 2001.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            INTOSAI, INTOSAI GOV 9100 - <em>The International Standards of Supreme Audit Institutions, ISSAI, are issued by the International Organization of Supreme Audit Institutions</em>, 2007.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            PRIBERAM. Disponível em <a class="mouseover" target="_blank" href="https://www.priberam.pt/dlpo/evento">https://www.priberam.pt/dlpo/evento</a>. Acesso em 08 ago. 2017.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            QSP. Disponível em <a class="mouseover" target="_blank" href="http://www.qsp.org.br/pdf/implemente_abr.pdf">http://www.qsp.org.br/pdf/implemente_abr.pdf</a>. Acesso em 09 set. 2017.
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            TCU, <strong>Auditoria Governamental</strong>, 2011. 356p. Disponível em <a class="mouseover" target="_blank" href="http://portal2.tcu.gov.br/portal/pls/portal/docs/2499144.ZIP">http://portal2.tcu.gov.br/portal/pls/portal/docs/2499144.ZIP</a> . Acesso em 20 jul. 2013
                            </p>
                            <p class="Texto"> <i class="bi bi-book me-2"></i>
                            <em>Victorian Government</em> (Australia) – <em>Department of Treasury and Finance, <strong>Victorian Government Risk Management Framework</strong></em>, 2011. 38p Disponível em <a class="mouseover" target="_blank" href="https://goo.gl/1ZZ1e6">https://goo.gl/1ZZ1e6</a> Acesso e 20 jul. 2013.
                            </p>
                            <br>
                            <!-- FIM DAS REFERENCIAS  -->

                        <div class="border border-success m-4 p-4 text-rounded rounded rounded-lg wow animate__fadeInLeftBig"
                            data-wow-delay="0.3s">
                            <p><strong>Pronto,</strong> Nome_Completo <strong>agora você já pode fazer a avaliação do curso</strong>
                            Gestão por Processos com Foco em Riscos <strong>Módulo 02 abaixo, Boa Sorte!</strong>
</p>
                        </div>

                           <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="./topico 04 /topico 04.php" class="btn btn-outline-success" role="button" aria-pressed="true">
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
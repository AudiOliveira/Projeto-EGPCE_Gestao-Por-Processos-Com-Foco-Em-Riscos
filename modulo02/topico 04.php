
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
        <span class="txt" style="font-size: 17px;">Apresentação</i></span>
        </a>
    </li>

    <!-- Tópicos com subtópicos -->
    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-1-circle"></i></span>
            <span class="txt" style="font-size: 17px;">Riscos: O que são e os que nos interessam</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 01.php">
            <i class="bi bi-journals circulo"></i>01 - Riscos: O que são e os que nos interessam</a>
        <a href="./topico 01.php#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 - Quais os riscos que nos interessam?</a>
    </div>

    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-2-circle"></i></span>
            <span class="txt" style="font-size: 17px;">Gerenciamento de Riscos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 02.php">
            <i class="bi bi-journals circulo"></i>02 - Gerenciamento de Riscos</a>
        <a href="./topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 - O que é gerenciamento de riscos?</a>
        <a href="./topico 02.php#subtopico2.3">
            <i class="bi bi-journals circulo"></i>02.3 - Como é gerenciar riscos?</a>
    </div>

    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 03.php"">
        <span class="icon "><i class="bi bi-3-circle"></i>
        </span>
        <span class="txt" style="font-size: 17px;">O modelo de estrutura integrada de gestão de riscos COSO II</i></span>
        </a>
    </li>
    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 04.php" class="ativo">
        <span class="icon "><i class="bi bi-4-circle"></i>
        </span>
        <span class="txt" style="font-size: 17px;">Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)</i></span>
        </a>
    </li>

    <li class="menu">
        <a href="./referencias.php">
            <span class="icon"><i class="bi bi-book-half"></i></span>
            <span class="txt" style="font-size: 17px;">Referências</span>
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
            <span class="txt">Riscos: O que são e os que nos interessam</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 01.php">
            <i class="bi bi-journals circulo"></i>01 - Riscos: O que são e os que nos interessam</a>
        <a href="./topico 01.php#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 - Quais os riscos que nos interessam?</a>
    </div>

    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-2-circle"></i></span>
            <span class="txt">Gerenciamento de Riscos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 02.php">
            <i class="bi bi-journals circulo"></i>02 - Gerenciamento de Riscos</a>
        <a href="./topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 - O que é gerenciamento de riscos?</a>
        <a href="./topico 02.php#subtopico2.3">
            <i class="bi bi-journals circulo"></i>02.3 - Como é gerenciar riscos?</a>
    </div>

    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 03.php"">
        <span class="icon "><i class="bi bi-3-circle"></i>
        </span>
        <span class="txt">O modelo de estrutura integrada de gestão de riscos COSO II</i></span>
        </a>
    </li>
    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 04.php" class="ativo">
        <span class="icon "><i class="bi bi-4-circle"></i>
        </span>
        <span class="txt">Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)</i></span>
        </a>
    </li>

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
                         <h2 class="Titulo wow fadeIn">04 - Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)</h2>

                        <!-- Destaque verde -->
                        <div class="content_box_padrao wow fadeInLeftBig">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    <strong>Objetivo:</strong> Apresentar as características gerais do gerenciamento de riscos no setor público e do Programa de Fortalecimento do Controle Interno do Poder Executivo, especialmente quanto à integridade e às três linhas de defesa do controle interno.
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">Inicialmente é importante destacar que o processo de implementação de gestão de riscos em uma organização, especialmente do setor público, requer o estabelecimento de uma estratégia de médio a longo prazo, que passa pelo cumprimento de uma série de desafios evolutivos quanto à maturidade de riscos organizacionais.</p>

                            <p class="wow fadeIn" data-wow-delay="0.3s">Nesse sentido, registre-se que a visão da QSP (2010) sobre a maturidade de riscos em uma organização contempla uma série de graus e correspondentes características, como a seguir alinhados:</p>

                            <!-- Balão informativo -->
                            <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                            </div>

                            <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                            <div class="accordion destaques wow fadeIn" id="accordionExample">
                                <div>
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Ingênuo
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>Nenhuma abordagem formal desenvolvida para a gestão de riscos.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Consciente
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Abordagem para a gestão de riscos dispersa em “silos”.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Definido
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Estratégia e políticas implementadas e comunicadas, apetite por riscos definido.</p>
                                        </div>  
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                            Gerenciado
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Abordagem corporativa para a gestão de riscos desenvolvida e comunicada.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                            Habilitado
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Gestão de riscos e controles internos totalmente incorporados às operações.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><br>

                            <!-- CAIXA DE TEXTO FIQUE ATENTO -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_fiqueatento">
                                    <i class="fa-solid fa-person-circle-exclamation"></i> 
                                        FIQUE ATENTO 
                                </div>
                                <div class="content_box" id="conteudo_fiqueatento">
                                    <p>Além disso, Braga (2012) relata que “a discussão da gestão de riscos ainda é incipiente na Administração Pública pátria, restrita a uma presença mais acentuada nos setores que lidam com o Sistema Financeiro e naqueles que atuam em desastres naturais”.</p>
                                </div>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">Nada obstante, ainda como destaca Braga (2012), “os órgãos de controle podem contribuir sobremaneira nessa discussão, como indutores desse processo de gestão de riscos, em uma salutar interação”, pois a ampliação da discussão sobre gestão de riscos no âmbito estatal contribui para a eficiência da gestão e a disponibilização de serviços públicos de qualidade é possível não só com diminuição de custos, melhoria de processos e adoção de instrumentos de mercado, mas também por meio do tratamento das incertezas (BRAGA, 2012). </p>

                                <p class="wow fadeIn" data-wow-delay="0.3s">Nesse sentido, a Controladoria e Ouvidoria Geral do Estado (CGE) atualizou seu Planejamento Estratégico para o período 2015 a 2022, aprovando-o por meio da Portaria no 183/2014, tendo, dentre os desafios a serem vencidos: a consolidação do controle interno preventivo baseado na gestão por processos; a universalização do atendimento em ouvidoria e acesso à informação; a educação para o controle social; o fortalecimento da ética e da transparência, e a estruturação e disponibilização de informações estratégicas para a tomada de decisão.</p>

                                <p class="wow fadeIn" data-wow-delay="0.3s">Assim, com a missão de “assegurar a adequada aplicação dos recursos públicos, contribuindo para uma gestão ética e transparente e para a oferta de serviços públicos com qualidade”, a CGE estabeleceu oito objetivos estratégicos para o período 2015-2022, a seguir relacionados, os quais serão alcançados por meio da execução de 35 projetos estratégicos.</p>

                            
                            <ol>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong> Fortalecer a tomada de decisão pelos gestores, com base na atuação do controle interno como suporte à gestão;</strong></li><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong> Consolidar as auditorias com abordagens qualitativas e baseadas em riscos e processos;</strong></li><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong> Implantar a gestão de risco no Poder Executivo Estadual, considerando as necessidades do cidadão, as estratégias de Governo e as políticas setoriais; </strong></li><br>
                                <li class="wow fadeInLeft" data-wow-delay="1.2s"><strong> Consolidar o Controle Interno Preventivo, baseado na Gestão por Processos; </strong></li><br>
                                <li class="wow fadeInLeft" data-wow-delay="1.5s"><strong> Fortalecer a ouvidoria e o acesso à informação como instrumentos para consolidar a gestão ética, transparente, democrática e participativa;</strong></li><br>
                                <li class="wow fadeInLeft" data-wow-delay="1.8s"><strong> Consolidar o modelo de gestão institucional integrada, provendo os recursos organizacionais necessários à prevenção de riscos, à auditoria interna e à ouvidoria;</strong></li><br>
                                <li class="wow fadeInLeft" data-wow-delay="2.1s"><strong> Difundir a atuação da CGE junto à sociedade e fortalecer o desenvolvimento da cidadania, para o exercício do controle social; </strong></li><br>
                                <li class="wow fadeInLeft" data-wow-delay="2.4s"><strong> Implantar a inteligência de negócio, agregando valor à prevenção de riscos, à auditoria interna e à ouvidoria. </strong></li><br>
                            </ol>
                            

                            <!-- CAIXA DE TEXTO SAIBA MAIS -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_saibamais">
                                    <i class="fa-solid fa-plus"></i> 
                                        SAIBA MAIS 
                                    </div>
                                <div class="content_box" id="conteudo_saibamais">
                                    <p>Acesse a biblioteca do curso e leia o <a class="mouseover" target="_blank" href="https://drive.google.com/open?id=0B5moywX9O3sQZEVRRlMyakh4Q0E">“Planejamento Estratégico 2015-2022”</a>.</p>
                                </div>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">Nesse contexto, e alinhado aos objetivos estratégicos acima referidos, especialmente o que se refere à implantação da gestão de risco no Poder Executivo Estadual, a CGE iniciou a execução do Programa de Fortalecimento do Controle Interno no Poder Executivo, tendo como um dos projetos o Programa de Integridade do Poder Executivo. </p>

                            <p class="wow fadeIn" data-wow-delay="0.3s">O referido Programa, lançado por ocasião do Seminário Controles Internos, Gestão de Riscos e Programa de Integridade, realizado em 30/08/2017, considera a integridade como um conjunto de mecanismos integrados, que criam o ambiente necessário para a Administração Pública gerar resultados com a qualidade esperada pela população, de forma regular, eficiente e proba. Nesse sentido, o objetivo do Programa de Integridade do Poder Executivo é sistematizar práticas de controle interno, de gestão de riscos e de governança, baseado no modelo de atuação das três linhas de defesa, estabelecido pelo <em>The Institute of Internal Auditors</em> (CGE, 2017).</p>

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-06">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 6:</strong>
                                Controle Externo</p>
                                    <div class="zoom">
                                        <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem6">
                                            <img src="./imgs/Figura06.png" style="max-width: 50rem; width: 30rem;" alt="Figura06" id="img-6">
                                        </a>
                                    </div>
                            </div>

                            <!-- Imagem06 - MODAL-->
                            <div class="modal fade text-center" id="Imagem6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="./imgs/Figura06.png" alt="Figura06">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 6:</strong>
                                    Controle Externo</p>
                                </div>
                                </div>
                            </div>
                            <!-- Imagem06 - End-->
                            <br>

                            <p class="wow fadeIn">Para implantação do Programa de Integridade do Poder Executivo, será observado o cumprimento das seguintes estratégias (CGE, 2017): </p>
                            <ul class="fa-ul list">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> comprometimento e apoio da alta administração;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> instância responsável pelo Plano de Integridade;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> editar norma para implantação do Programa de Integridade;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> diagnóstico da situação atual do órgão - Análise de Riscos;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> desenvolver Plano de Implementação - estruturação das regras e instrumentos, Plano de Comunicação;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> definir metodologia de monitoramento contínuo.</li><br>
</ul>
                                <p class="wow fadeIn">Em decorrência da implantação desse Programa, são esperados os resultados apresentados a seguir (CGE, 2017): </p>

                                <ul class="fa-ul list">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> proporcionar razoável segurança no alcance dos resultados esperados;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> gerar economias decorrentes do ganho de eficiência;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> propiciar a adequada aplicação dos recursos públicos, em conformidade com as leis e regulamentos;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> proporcionar maior confiabilidade e qualidade das informações geradas para decisão e prestação de contas;</li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-check"></i> transmitir o conceito de organização íntegra e transparente.</li>
</ul>
                            <!-- CAIXA DE TEXTO SAIBA MAIS -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_saibamais">
                                    <i class="fa-solid fa-plus"></i> 
                                        SAIBA MAIS 
                                    </div>
                                <div class="content_box" id="conteudo_saibamais">
                                    <p>Acesse o <em>link</em> para o Seminário Controles Internos, Gestão de Riscos e Programa de Integridade, realizado em 30/08/2017:
                                    <a class="mouseover" target="_blank" href="http://www.cge.ce.gov.br/index.php/eventos-institucionais/seminario-controles-internos-gestao-de-riscos-e-programa-de-integridade">http://www.cge.ce.gov.br/ index.php/ eventos-institucionais/seminario-controles-internos-gestao-de-riscos-e-programa-de-integridade</a>.</p>
                                </div>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">Finalmente, registramos que a implantação de gerenciamento de riscos na CGE está inserida nas estratégias de implantação do Programa de Integridade do Poder Executivo, e será mais bem detalhada em breve, em suas etapas e correspondente cronograma. </p>
                            <br>

                            <!-- CAIXA DE TEXTO SAIBA MAIS -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_saibamais">
                                    <i class="fa-solid fa-plus"></i> 
                                        SAIBA MAIS 
                                    </div>
                                <div class="content_box" id="conteudo_saibamais">
                                    <p>Para uma leitura complementar leia <a class="mouseover" target="_blank" href="http://www.administradores.com.br/artigos/negocios/gestao-dos-riscos-no-setor-publico-ampliando-os-horizontes/67507/">“Gestão de Riscos no Setor Público – ampliando os horizontes”</a>.</p>
                                </div>
                            </div>


                            <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="./topico 03.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="./referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
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
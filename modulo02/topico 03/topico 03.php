
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
        <a href="../index.php">
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
            <span class="txt" style="font-size: 18px;">Riscos: O que são e os que nos interessam</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="../topico 01/topico 01.php">
            <i class="bi bi-journals circulo"></i>01 Riscos: O que são e os que nos interessam</a>
        <a href="#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 Quais os riscos que nos interessam?</a>
    </div>

    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#">
            <span class="icon space"><i class="bi bi-2-circle"></i></span>
            <span class="txt" style="font-size: 18px;">Gerenciamento de Riscos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="../topico 02/topico 02.php">
            <i class="bi bi-journals circulo"></i>02 Gerenciamento de Riscos</a>
        <a href="../topico 02/topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 O que é gerenciamento de riscos?</a>
        <a href="../topico 02/topico 02.php#subtopico2.3">
            <i class="bi bi-journals circulo"></i>02.3 Como é gerenciar riscos?</a>
    </div>

    <!-- Tópico -->
    <li class="menu">
        <a href="../topico 03/topico 03.php"">
        <span class="icon "><i class="bi bi-3-circle"></i>
        </span>
        <span class="txt" style="font-size: 18px;">O modelo de estrutura integrada de gestão de riscos COSO II</i></span>
        </a>
    </li>
    <!-- Tópico -->
    <li class="menu">
        <a href="../topico 04/topico 04.php"">
        <span class="icon "><i class="bi bi-4-circle"></i>
        </span>
        <span class="txt" style="font-size: 18px;">Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)</i></span>
        </a>
    </li>

    <li class="menu">
        <a href="../referencias.php">
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
        <a href="../index.php">
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
        <a href="../topico 01/topico 01.php">
            <i class="bi bi-journals circulo"></i>01 Riscos: O que são e os que nos interessam</a>
        <a href="../topico 01/topico 01.php#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 Quais os riscos que nos interessam?</a>
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
        <a href="../topico 02/topico 02.php">
            <i class="bi bi-journals circulo"></i>02 Gerenciamento de Riscos</a>
        <a href="../topico 02/topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 O que é gerenciamento de riscos?</a>
        <a href="../topico 02/topico 02.php#subtopico2.3">
            <i class="bi bi-journals circulo"></i>02.3 Como é gerenciar riscos?</a>
    </div>

    <!-- Tópico -->
    <li class="menu">
        <a href="../topico 03/topico 03.php"">
        <span class="icon "><i class="bi bi-3-circle"></i>
        </span>
        <span class="txt">O modelo de estrutura integrada de gestão de riscos COSO II</i></span>
        </a>
    </li>
    <!-- Tópico -->
    <li class="menu">
        <a href="../topico 04/topico 04.php"">
        <span class="icon "><i class="bi bi-4-circle"></i>
        </span>
        <span class="txt">Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)</i></span>
        </a>
    </li>

    <li class="menu">
        <a href="../referencias.php">
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
                         <h2 class="Titulo wow fadeIn">03 - O modelo de estrutura integrada de gestão de riscos COSO II</h2>

                        <!-- Destaque verde -->
                        <div class="content_box_padrao wow fadeInLeftBig">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    <strong>Objetivo:</strong> Apresentar informações básicas que levem ao conhecimento das três dimensões do modelo de gestão integrada de riscos – objetivos da organização, componentes do gerenciamento de riscos e objetos controle.
                                </p>
                            </div>

                            
                            <div><p class="wow fadeIn" data-wow-delay="0.3s">
                            Conforme mencionado no tópico anterior, será abordado aqui o modelo de estrutura integrada de gestão de riscos COSO II, o qual trata o paradigma de gestão de riscos por meio de um modelo integrado de três conjuntos de dimensões que presume a existência de um relacionamento direto entre os objetivos que uma organização pretende alcançar [primeira dimensão], os componentes do gerenciamento de riscos [segunda dimensão] e os objetos de controle [terceira dimensão], o qual pode ser visualizado por meio de uma matriz tridimensional, em forma de cubo (COSO, 2007, p. 7).
                            </p></div>

                            <!-- IMAGEM NO SITE  -->
                           <div class="text-center img-05">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 5:</strong>
                                Matriz Tridimensional</p>
                                    <div class="zoom">
                                        <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem5">
                                            <img src="../imgs/Figura05.png" style="max-width: 50rem; width: 25rem;" alt="Figura05" id="img-5">
                                        </a>
                                    </div>
                            

                            <!-- Imagem05 - MODAL-->
                            <div class="modal fade text-center" id="Imagem5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="../imgs/Figura05.png" alt="Figura05">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 5:</strong>
                                    Matriz Tridimensional</p>
                                </div>
                                </div>
                            </div>
                            <!-- Imagem05 - End-->

                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">Com efeito, de acordo com COSO (2007, p. 5), a dimensão referente aos objetivos que uma organização almeja atingir contemplam as seguintes categorias:</p>


                            <!-- Balão informativo -->
                            <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                            </div>

                            <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                            <div class="accordion destaques wow fadeIn" id="accordionExample">
                                <div>
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Estratégicos
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>Metas gerais, alinhadas com o que suportem à sua missão.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Operacional
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Utilização eficaz e eficiente dos recursos.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Comunicação
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Confiabilidade de relatórios.</p>
                                        </div>  
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                            Conformidade
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Cumprimento de leis e regulamentos aplicáveis.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">De outra parte, a dimensão referente aos componentes do gerenciamento de riscos corporativos “é constituída de oito componentes inter-relacionados, pelo qual a administração gerencia a organização, e estão integrados com o processo de gestão”, conforme a seguir COSO (2007, p. 6):</p>

                             <!-- Balão informativo -->
                             <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                            </div>

                            <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                            <div class="accordion destaques wow fadeIn" id="accordionExample2">
                                <div>
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            Ambiente Interno
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                        <p>O ambiente interno compreende o tom de uma organização e fornece a base pela qual os riscos são identificados e abordados pelo seu pessoal, inclusive a filosofia de gerenciamento de riscos, o apetite a risco, a integridade e os valores éticos, além do ambiente em que estes estão.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Fixação de Objetivos
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Os objetivos devem existir antes que a administração possa identificar os eventos em potencial que poderão afetar a sua realização. O gerenciamento de riscos corporativos assegura que a administração disponha de um processo implementado para estabelecer os objetivos que propiciem suporte e estejam alinhados com a missão da organização e sejam compatíveis com o seu apetite a riscos.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Identificação de Eventos
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Os eventos internos e externos que influenciam o cumprimento dos objetivos de uma organização devem ser identificados e classificados entre riscos e oportunidades. Essas oportunidades são canalizadas para os processos de estabelecimento de estratégias da administração ou de seus objetivos.</p>
                                        </div>  
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Avaliação de Riscos
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Os riscos são analisados, considerando-se a sua probabilidade e o impacto como base para determinar o modo pelo qual deverão ser administrados. Esses riscos são avaliados quanto à sua condição de inerentes e residuais.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            Resposta a Risco
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>A administração escolhe as respostas aos riscos - evitando, aceitando, reduzindo ou compartilhando – desenvolvendo uma série de medidas para alinhar os riscos com a tolerância e com o "apetite a risco".</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTwelve">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                            Atividades de Controle
                                        </button>
                                    </h2>
                                    <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                        <p>Políticas e procedimentos são estabelecidos e implementados para assegurar que as respostas aos riscos sejam executadas com eficácia.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingThirteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            informações e Comunicações
                                        </button>
                                    </h2>
                                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>As informações relevantes são identificadas, colhidas e comunicadas de forma e no prazo que permita que sejam cumpridas as responsabilidades. A comunicação eficaz também ocorre em um sentido mais amplo, fluindo em todos os níveis da organização.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFourteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                            Monitoramento
                                        </button>
                                    </h2>
                                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>A integridade da gestão de riscos corporativos é monitorada e são feitas as modificações necessárias. O monitoramento é realizado através de atividades gerenciais contínuas ou avaliações independentes ou de ambas as formas.</p>
                                        </div>  
                                    </div>
                                </div>

                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">Por outro lado, e com base na premissa de que a metodologia do COSO II é aplicável a qualquer setor da organização, uma vez que é focada em riscos dos processos e não em tarefas ou departamentos isolados, a terceira dimensão prevê que os controles devem ser exercidos sobre todos os objetos ou níveis organizacionais da entidade, pois em cada processo existem riscos potenciais e os controles devem sempre estar presentes para mitigar esses riscos independentemente de onde eles possam ocorrer, seja numa subsidiária, numa unidade de negócio, numa divisão ou ao nível da própria entidade (COSO, 2007).</p>

                            <p class="wow fadeIn" data-wow-delay="0.3s">Destaquem-se ainda algumas especificidades relativas à aplicação da metodologia do COSO II como instrumento de gestão de riscos (COSO, 2017):</p>

                            <!-- Balão informativo -->
                            <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                            </div>

                             <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                             <div class="accordion destaques wow fadeIn" id="accordionExample3">
                             <div>
                                    <h2 class="accordion-header" id="headingFifteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                        <strong><i class="fa fa-bullseye"></i> Relacionamento entre Objetivos e Componentes</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseFifteen" class="accordion-collapse collapse show" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> Existe um relacionamento direto entre os objetivos, que uma organização se empenha em alcançar, e os componentes do gerenciamento de riscos corporativos, que representam aquilo que é necessário para o seu alcance. Quanto mais consistente e presente essa relação, maior a capacidade de a entidade manter o enfoque na totalidade de seu gerenciamento de riscos, ou na categoria de objetivos, componentes, unidade da organização ou qualquer um dos subconjuntos.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingSixteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                        <strong><i class="fa fa-bullseye"></i> Eficácia</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> A determinação do grau de eficácia do gerenciamento de riscos corporativos de uma organização corresponde ao julgamento decorrente da avaliação da presença e da eficácia do funcionamento dos oito componentes. Desse modo, os componentes também são critérios para o gerenciamento eficaz de riscos corporativos. Para que os componentes possam estar presentes e funcionem adequadamente, não poderá haver fraquezas significantes, e os riscos necessitam ser enquadrados no apetite a risco da organização. Quando se constata que o gerenciamento de riscos corporativos é eficaz em cada uma das quatro categorias de objetivos, isso significa que os mais altos níveis colegiados de gestão de uma entidade (o Conselho de Administração e a Diretoria Executiva, por exemplo) terão garantia razoável de que entenderam até que ponto os objetivos estratégicos e operacionais estão realmente sendo alcançados, o sistema de comunicação da empresa é confiável, e todas as leis e regulamentos cabíveis estão sendo observados. Os oito componentes não funcionarão de forma idêntica em todas as organizações. A aplicação, e obtenção de um resultado eficaz, da metodologia COSO II para a gestão de riscos em quaisquer organizações, privadas ou públicas, deverá ser conduzida de modo a assegurar que cada um de seus componentes esteja presente e funcionando, naturalmente de forma adaptada ao tipo institucional e formal da organização.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingSeventeen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                        <strong><i class="fa fa-bullseye"></i> Limitações</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> A despeito de oferecer importantes benefícios, o gerenciamento de riscos corporativos está sujeito a limitações, especialmente em decorrência do fato de que o julgamento humano, no processo decisório, pode ser falho, motivo pelo qual as decisões de respostas a risco e o estabelecimento dos controles necessitam levar em conta os custos e benefícios relativos. São exemplos de falhas dessa natureza: o erro ou engano humano; o conluio entre duas ou mais pessoas; e a recusa ou aceite da gestão em relação às decisões de gestão de riscos. Essas limitações impedem que as instâncias superiores de gestão (o Conselho de Administração e a Diretoria Executiva, por exemplo) tenham absoluta garantia da realização dos objetivos da organização.</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="accordion-header" id="headingEighteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                                        <strong><i class="fa fa-bullseye"></i> Funções e Responsabilidades</strong>
                                        </button>
                                    </h2>
                                    <div id="collapseEighteen" class="accordion-collapse collapse" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> Cada um dos empregados de uma organização tem uma parcela de responsabilidade no gerenciamento de riscos corporativos. O gestor principal e titular de uma organização é o responsável maior e deve assumir a responsabilidade da iniciativa. Cabe aos outros gestores executivos e estratégicos apoiar a filosofia de administração de riscos da organização, incentivar a observação de seu apetite a risco e administrar os riscos dentro de suas esferas de responsabilidade, conforme as tolerâncias a risco. Em geral, cabe aos gestores responsáveis pela gestão de riscos, pela gestão financeira, pela gestão da auditoria interna, dentre outros, responsabilidades fundamentais de suporte. Os outros membros da organização são responsáveis pela execução da gestão de riscos em cumprimento das diretrizes e dos protocolos estabelecidos. A mais alta instância de gestão de uma organização (o Conselho de Administração, por exemplo) executa importante atividade de supervisão da gestão de riscos da organização, estando ciente e de acordo com o grau de apetite a risco da organização. Diversas partes externas, como clientes, revendedores, parceiros comerciais, auditores externos, agentes normativos e analistas financeiros freqüentemente fornecem informações úteis para a condução da gestão de riscos, porém não são responsáveis pela sua eficácia e nem fazem parte do próprio gerenciamento de riscos da organização.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <p class="wow fadeIn">Concluindo, há de se ressaltar que o modelo de gerenciamento de riscos baseado na metodologia COSO II contempla abordagens integradas, que levam em conta os objetivos que uma organização pretende alcançar, os componentes que compõem um processo de gerenciamento de riscos e os objetos organizacionais de aplicação de controles, visualizados por meio de uma matriz tridimensional, em forma de cubo, em que cada um dos elementos que integram as correspondentes dimensões mantém relacionamentos com os demais em busca do melhor funcionamento do todo, sem deixar de considerar as limitações humanas próprias dos profissionais envolvidos e de suas respectivas responsabilidades funcionais. </p>
                             <br>


                             <!-- CAIXA DE TEXTO SAIBA MAIS -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_saibamais">
                                    <i class="fa-solid fa-plus"></i> 
                                        SAIBA MAIS 
                                    </div>
                                <div class="content_box" id="conteudo_saibamais">
                                <p>Para uma leitura complementar, acesse a biblioteca do curso e leia o Sumário Executivo do documento <a class="mouseover" target="_blank" href="https://drive.google.com/open?id=0B5moywX9O3sQc2xRUm9ReWJ2RTQ">“COSO – Gerenciamento de Riscos Corporativos - Estrutura Integrada”</a>, de Stephem Hill.</p>
                                </div>
                            </div>



                            <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="../topico 02/topico 02.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="../topico 04/topico 04.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
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
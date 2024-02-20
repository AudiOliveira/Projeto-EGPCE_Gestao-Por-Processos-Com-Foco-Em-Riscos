
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
            <a data-valor="#" class="ativo">
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
        <a href="./referencias.php">
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
            <a data-valor="#" class="ativo">
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
                         <!-- Título Pricipal -->
                         <h2 class="Titulo wow fadeIn">02 - Gestão de Processos</h2>
                        
                         <!-- Destaque verde -->
                         <div class="content_box_padrao wow fadeInLeftBig">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    <strong>Objetivo:</strong> Apresentar a metodologia para manter e melhorar processos e a importância do gerenciamento de processos como ferramenta para o alcance da melhoria contínua.
                                </p>
                            </div>

                           
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Organizações existem para atender às necessidades de seus clientes. Dessa forma, os processos de uma organização devem ser gerenciados, buscando garantir o atendimento a essas necessidades.<br><br>

                            <strong>O gerenciamento de processos possui dois grandes pilares:</strong>
                            </p>
                            <!-- Lista -->
                            <div class="wow fadeIn col-sm-12 col-md-12" data-wow-delay="0.3s">
                                <ul class="card-style list-group list-group-flush">
                                    <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> O primeiro está relacionado a manter os processos sob controle, atingindo os resultados planejados para o atendimento das necessidades dos clientes; </li>
                                    <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> O segundo pilar diz respeito a melhorar os processos, isso quer dizer, otimizar os processos de forma a gerar um salto de qualidade nos resultados.</li>
                                </ul>
                            </div><br>

                            <!-- Subtopico -->
                            <h3 class="Subtopico wow fadeIn">Gerenciamento para manter processos</h3>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>A partir de agora serão explicadas as etapas, que devem ser seguidas para implementação do gerenciamento para manter processos.</strong></p>


                            <!-- Subsubtopico  -->
                            <h4 class="subsubtopico wow fadeIn">Identificar e classificar os processos</h4>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Para gerenciar processos, o primeiro passo é identificar as necessidades dos clientes e a partir destas, identificar os processos finalísticos e de apoio, observando a criticidade dos mesmos.<br><br>

                            Com base na definição e na classificação dos processos, é realizado o macroprocesso da organização, nele é listado, em uma sequência lógica, os processos finalísticos e de apoio da organização.
                            </p>

                            <!-- Subsubtopico  -->
                            <h4 class="subsubtopico wow fadeIn">Definição de objetivos, metas e indicadores</h4>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Para cada processo crítico, faz-se necessário definir <strong>objetivos, metas e indicador</strong> para, posteriormente, verificar-se se o processo está controlado.<br><br>

                            <strong>Um objetivo é aquilo que se busca alcançar em um processo.</strong> O objetivo a ser definido precisa ser alinhado ao atendimento de uma necessidade do cliente. Esse é um ponto fundamental, pois não levar em conta a necessidade dos clientes na definição dos objetivos, muito provavelmente, fará com que a organização aplique recursos para gerar um resultado, o qual não será percebido pelo cliente. Em outras palavras, investe-se em atividades que não agregam valor.<br><br>

                            <strong>Um objetivo precisa ser alcançado. Dessa forma, é preciso definir metas.</strong> Uma meta trata-se de um objetivo mensurável e com prazo para ser alcançado:
                            </p>

                            <!-- Destaque padrão cinza -->
                            <div class="content_box_padrao_cinza wow fadeInLeftBig">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                <h2 class="text-center"><strong>META = OBJETIVO + VALOR + PRAZO</strong></h2>
                                </p>
                            </div>

                             <!-- CAIXA DE TEXTO EXEMPLO -->
                             <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_exemplo">
                                    <i class="fa-regular fa-pen-to-square"></i> 
                                        EXEMPLO 
                                </div>
                                <div class="content_box" id="conteudo_exemplo">
                                    <p>No exemplo da lanchonete, observe que o tempo padrão estabelecido para servir os lanches eram vinte minutos. O exemplo evidencia que, naquele processo, o tempo para servir o lanche era uma necessidade do cliente, sendo assim, foi estabelecido:<br><br>
                                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> <strong>Objetivo:</strong> tempo para o lanche ser servido ao cliente.<br>
                                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> <strong>Meta:</strong> 20 minutos.<br>
                                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> <strong>Prazo:</strong> imediato.<br>
                                </p>
                                </div>
                            </div>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Nesse caso, o prazo é imediato, ou seja, sempre todos os lanches devem ser servidos em 20 minutos.</strong> Em algumas situações, pode ser dado um prazo para a meta ser alcançada. Por exemplo, a lanchonete poderia ter determinado que até dezembro todos os lanches deveriam ser servidos em vinte minutos. Ou seja, estaria sendo determinado um prazo até dezembro para a meta ser alcançada.<br><br>

                            <strong>Por fim, estabelecidos o objetivo e a meta, é necessário definir um indicador para medir se a meta está sendo cumprida.</strong><br><br>

                            <strong>Indicador é instrumento de gestão essencial para o monitoramento e avaliação do desempenho dos objetivos.</strong> Descreve o que será medido, contemplando as dimensões eficiência, eficácia e efetividade.<br><br>

                            Um indicador bem definido precisa ser:</p>

                            <!-- Lista  -->
                            <ul class="list">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i style="color: #44833d;" class="fa fa-check"></i> Relevante: trata-se da importância do indicador;
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i style="color: #44833d;" class="fa fa-check"></i> Confiável: refere-se à qualidade do levantamento dos dados usados no seu cálculo;
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i style="color: #44833d;" class="fa fa-check"></i> Abrangente: amplitude da representatividade do objetivo;
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i style="color: #44833d;" class="fa fa-check"></i> Compreensível: transparência na metodologia de construção do indicador;
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i style="color: #44833d;" class="fa fa-check"></i> Disponível: facilidade de acesso para coleta, estando disponível a tempo;
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                    <i style="color: #44833d;" class="fa fa-check"></i> Rastreável: facilidade de identificação da origem dos dados, seu registro e manutenção.
                                </li>
                            </ul>

                            <!-- Subsubtopico  -->
                            <h4 class="subsubtopico wow fadeIn">Padronização do Processo</h4>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Padronizar o processo significa estabelecer a melhor maneira de executar as atividades e tarefas do processo</strong>, de forma a alcançar os resultados, otimizando os recursos e eliminando aquilo que não agrega valor.<br><br>

                            A padronização dos processos se dá por meio dos fluxogramas de atividades e documentos de descrição de tarefas, também denominados de procedimento operacional ou instrução de trabalho.
                            </p>

                            <!-- Subsubtopico  -->
                            <h4 class="subsubtopico wow fadeIn">Identificação dos Riscos do Processo</h4>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Todo processo possui riscos, um risco refere-se a algo que pode acontecer e, caso aconteça, trará um impacto negativo ou positivo para o processo.</strong> Nesse contexto, quando se tem um problema durante o processo, estamos diante do algo (risco) que aconteceu e que trouxe um impacto negativo.<br><br>

                            Voltando ao exemplo da lanchonete, o primeiro pedido era um suco de laranja e o garçom informou que não tinha laranja e, em seguida, o pedido foi alterado para um suco de limão. Nesse caso, faltar insumos para preparação dos lanches é um risco que pode ou não ocorrer. <strong>Quando ocorre, e o impacto é negativo, tem-se um problema.</strong> A falta da laranja fez com que a necessidade do cliente não fosse atendida em sua plenitude.
                            </p>

                            <!-- CAIXA DE TEXTO IMPORTANTE -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_importante">
                                    <i class="fa-solid fa-triangle-exclamation"></i> 
                                        IMPORTANTE
                                </div>
                                <div class="content_box" id="conteudo_importante">
                                    <p><strong>Os riscos devem ser identificados, classificados e gerenciados para evitar que problemas venham a acontecer.</strong> Ainda no exemplo da lanchonete, tem-se um risco que foi identificado e uma ação de controle foi realizada para evitar um problema. Observe que o garçom quando foi limpar a mesa identificou que havia uma irregularidade no piso, o que poderia ocasionar a queda de um cliente (risco), para evitar que o risco ocorresse e se tornasse um problema, o garçom e o gerente retiraram a mesa e as cadeiras daquele lugar. Ou seja, atuaram de forma a controlar o risco.</p>
                                </div>
                            </div>

                            <!-- Subsubtopico  -->
                            <h4 class="subsubtopico wow fadeIn">Monitoramento do processo</h4>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Os processos precisam ser monitorados para verificar se as metas estão sendo alcançadas.</strong> O monitoramento é realizado por meio dos indicadores, que devem ter uma frequência de medição, e reuniões periódicas devem ser realizadas para tomada de decisão acerca dos processos.<br><br>

                            Observe o exemplo da lanchonete que o gerente questiona o motivo do lanche ter sido servido em trinta e cinco minutos com o garçom, uma vez que a meta é servir os lanches em vinte minutos. O garçom explicou o motivo.<br><br>

                            <strong> Nas situações em que as metas não são alcançadas, deve ser realizada uma análise, buscando identificar a causa do problema e, uma vez identificada, correções e a ações corretivas devem ser implementadas.</strong> Correção diz respeito a corrigir o problema, sem atuar na causa, ou seja, sem evitar que o problema volte a acontecer. No exemplo da lanchonete, a correção foi substituir a fruta do suco pelo limão, mas isso não garante que no futuro não falte novamente a laranja.<strong> Por outro lado, a ação corretiva tem por finalidade corrigir o problema de forma que ele não volte a acontecer pela mesma causa.</strong>
                            </p>

                            <br id="subtopico2.2">

                            <!-- Título Pricipal -->
                         <h2 class="Titulo wow fadeIn">02.2 - Gerenciamento para melhorar processos</h2>

<p class="wow fadeIn" data-wow-delay="0.3s">
<strong>A melhoria contínua é algo inerente à gestão de processos.</strong> Nesse contexto, as organizações devem identificar quais processos precisam ser melhorados, buscando obter um salto de qualidade que mude o patamar dos resultados até então obtidos.<br><br>

Desse modo, o redesenho de processos apresenta-se como um método eficaz para obtenção de melhorias nos processos. A implantação de redesenhos de processos deve seguir uma metodologia composta pelas seguintes fases: <strong>elaboração do projeto de redesenho; mapeamento do processo atual; análise do processo; redesenho do processo; e detalhamento de tarefas.</strong>
</p>

<!-- Subsubtopico  -->
<h4 class="subsubtopico wow fadeIn">Elaboração do Projeto de Redesenho</h4>

<p class="wow fadeIn" data-wow-delay="0.3s">
<strong>Essa fase caracteriza-se pela escolha do processo que precisa ser aperfeiçoado.</strong> Após a definição do projeto, forma-se a equipe responsável pelo redesenho, que deve ser multidisciplinar. O procedimento seguinte é o levantamento das informações para elaboração do plano do projeto, que são: <strong>objetivo; alinhamento estratégico; premissas; diretrizes; papéis e responsabilidades; e cronograma.</strong><br><br>
</p>
<!-- CITAÇÃO -->
<div class="citacao_texto wow fadeIn">
    <p>
    <i class="bi bi-check-circle-fill text-success"></i> O objetivo diz respeito à motivação para realização do redesenho, geralmente é algo bem genérico, sobretudo porque ainda não houve análise para identificar aquilo que de fato é problema a ser solucionado.<br><br>

    <i class="bi bi-check-circle-fill text-success"></i> O alinhamento estratégico evidencia o trabalho de redesenho a ser realizado com as diretrizes estratégicas do Governo. Convêm ressaltar a importância dessa etapa, visto que é a ligação existente entre a operação (processo) e os resultados (serviços) a serem entregues ao cidadão.<br><br>

    <i class="bi bi-check-circle-fill text-success"></i> As premissas são situações assumidas como verdadeiras e que serão levadas em consideração para proposições de melhorias no decorrer do redesenho.<br><br>

    <i class="bi bi-check-circle-fill text-success"></i> As diretrizes correspondem àquilo que deve nortear todas as proposições de melhoria nos processos. Dependendo dos resultados a serem alcançados, as diretrizes podem variar de um redesenho para outro.<br><br> 

    <i class="bi bi-check-circle-fill text-success"></i> Os papéis e responsabilidades dos membros da equipe de redesenho estão descritos no quadro a seguir.</p>
    <p class="citacao blockquote-footer"><strong>(Santos; Arraes e Mendonça (2013, p. 10-11))</strong></p>
</div>
<br>

<div class="informativo_btn">
        <div>
            <div class="wow fadeIn balao_informativo2" data-wow-delay="0.3s">
                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
            </div>                  
        </div>
</div>
        <br>

         <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
<div class="accordion destaques wow fadeIn" id="accordionExample">
    <div>
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Patrocinador de Redesenho
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
                <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> Estabelecer o direcionamento estratégico do projeto;<br>
                <i style="color: #44833d;" class="fa fa-arrow-right"></i> Apoiar o gerente do projeto nas ações necessárias ao redesenho;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Participar das reuniões de validação do processo;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Promover e assegurar o redesenho do processo.</p>
            </div>
        </div>
    </div>

    <div>
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Gerente de Projeto
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> Atuar como ponto central de contato para toda a comunicação relacionada ao projeto;<br>
                <i style="color: #44833d;" class="fa fa-arrow-right"></i> Garantir a execução do plano do projeto;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Garantir a coleta e disponibilização das informações necessárias;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Monitorar o progresso do trabalho e articular as ações necessárias.</p>
            </div>
        </div>
    </div>

    <div>
        <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Gestor de Processo
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
                <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> Participar das reuniões de redesenho e de validação;<br>
                <i style="color: #44833d;" class="fa fa-arrow-right"></i> Fornecer informações necessárias ao redesenho do processo;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Conduzir a implantação do redesenho do processo.</p>
            </div> 
        </div>
    </div>

    <div>
        <h2 class="accordion-header" id="headingFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Equipe Redesenho
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
        <div class="accordion-body">
                <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> Realizar mapeamento e análise do processo atual;<br>
                <i style="color: #44833d;" class="fa fa-arrow-right"></i> Identificar e analisar pontos críticos, identificando soluções e propondo a melhoria do processo;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Elaborar a documentação do projeto e a revisão da legislação;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Identificar as condições necessárias para implementar o novo processo.</p>
            </div>
        </div>
    </div>

    <div>
        <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                facilitador das Oficinas de Redesenho
            </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
        <div class="accordion-body">
                <p><i style="color: #44833d;" class="fa fa-arrow-right"></i> Elaborar o plano do projeto;<br>
                <i style="color: #44833d;" class="fa fa-arrow-right"></i> Conduzir as reuniões de redesenho;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Coordenar a elaboração da documentação do projeto;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Elaborar e disponibilizar as atas das reuniões;<br>
                    <i style="color: #44833d;" class="fa fa-arrow-right"></i> Manter a documentação do projeto atualizada.</p>
            </div>
        </div>
    </div>
</div>

<p class="wow fadeIn" data-wow-delay="0.3s">
O cronograma, por sua vez, contém o planejamento das atividades do redesenho ao longo do tempo. Em média, leva-se de três a quatro meses para conclusão do projeto de redesenho de um processo.<br><br>

<strong>Concluído o plano do projeto de redesenho, este é apresentado e validado para desenvolvimento.</strong></p><br>

<!-- Subsubtopico  -->
<h4 class="subsubtopico wow fadeIn">Mapeamento do Processo Atual</h4>
<p class="wow fadeIn" data-wow-delay="0.3s">
<strong>O objetivo do mapeamento do processo atual é fazer um levantamento de como o processo é executado atualmente.</strong> Essa fase também é conhecida com “AS IS”, ou seja, "como é". Nessa fase do redesenho, também é feito o levantamento de toda a legislação aplicável ao processo e o levantamento dos indicadores que são utilizados atualmente para medir o processo.
</p>

<!-- Subsubtopico  -->
<h4 class="subsubtopico wow fadeIn">Análise do Processo Atual</h4>
<p class="wow fadeIn" data-wow-delay="0.3s">
Essa fase consiste no levantamento dos riscos e dos problemas existentes no processo, para em seguida analisá-los no sentido de propor ações para controle ou correção que farão parte das proposições de melhoria que serão consolidadas na fase seguinte do redesenho.
</p>

<!-- Subsubtopico  -->
<h4 class="subsubtopico wow fadeIn">Redesenho do Processo</h4>
<p class="wow fadeIn" data-wow-delay="0.3s">
<strong>O redesenho do processo é o momento em que as proposições de melhoria são propostas em um novo fluxograma de processo. Aqui, as correções de problemas e os controles são apresentados.</strong> Ainda nessa fase, são propostos novos indicadores para monitoramento do processo e é elaborado um plano de implantação, contendo as ações que devem ser realizadas para implementar o processo redesenhado.
</p>

<!-- Subsubtopico  -->
<h4 class="subsubtopico wow fadeIn">Detalhamento de Tarefas</h4>
<p class="wow fadeIn" data-wow-delay="0.3s">
Por fim, é realizado o detalhamento das atividades em tarefas, de forma a explicar a execução das tarefas e deixar o processo totalmente padronizado. O detalhamento pode ser realizado por meio de procedimento operacional ou instrução de trabalho, como também de forma descritiva associada a desenhos de fluxogramas.
</p>

<!-- CAIXA DE TEXTO SAIBA MAIS -->
<div class="destaques wow fadeIn" data-wow-delay="0.3s">
    <div class="caixaprincipal" id="titulo_saibamais">
        <i class="fa-solid fa-plus"></i> 
            SAIBA MAIS 
        </div>
    <div class="content_box" id="conteudo_saibamais">
        <p>Para complementar seu estudo sobre a metodologia para a implantação de redesenhos de processos e suas quatro fases, acesse o artigo <a target="_blank" href="https://cursos.egp.ce.gov.br/enrol/index.php?id=255">"Redesenho de processos: a experiência do estado do Ceará em prover melhoria na gestão"</a>, escrito por Ricardo Ribeiro Santos; Vanessa Machado Arraes e Aline Barbosa Mendonça, na Biblioteca do curso.</p>
    </div>
</div>

<br>

<!-- Destaque verde -->
<div class="content_box_padrao wow fadeInLeftBig"><h2 class="Titulo" style="color: white"><strong> Considerações Finais </strong></h2>
    <p class="wow fadeIn" data-wow-delay="0.3s">
    Nesta aula, foi possível evidenciar um modelo de gestão de processos que busca, a partir das necessidades dos clientes, desenvolver as atividades dos processos de forma que o produto ou serviço entregue ao cliente, seja capaz de satisfazer tais necessidades.<br>
    As rotinas de manter processos controlados e melhorá-los, quando oportuno, fazem com que a organização esteja sempre num movimento de melhoria contínua, obtendo resultados que consolidam o atendimento às necessidades dos clientes.</p>
</div>












                            <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="./topico 01.php" class="btn btn-outline-success" role="button" aria-pressed="true">
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

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
        <span class="txt" style="font-size: 90%;">Apresentação</i></span>
        </a>
    </li>

    <!-- Tópicos com subtópicos -->
    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#" class="ativo">
            <span class="icon space"><i class="bi bi-1-circle"></i></span>
            <span class="txt" style="font-size: 90%;">Gestão por Processos: Contextualizaçãos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="../topico 01/topico 01.php">
            <i class="bi bi-journals circulo"></i>01 Inicio</a>
        <a href="../topico 01/topico 01.php#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 principais Conceitos Associados à Gestão de Processos</a>
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
        <a href="../topico 02/topico 02.php">
            <i class="bi bi-journals circulo"></i>02 Inicio</a>
        <a href="../topico 02/topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 Gerenciamento para melhorar Processos</a>
    </div>

    <li class="menu">
        <a href="../referencias.php">
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
        <a href="../index.php">
        <span class="icon "><i class="bi bi-person-workspace"></i>
        </span>
        <span class="txt">Apresentação</i></span>
        </a>
    </li>

    <!-- Tópicos com subtópicos -->
    <button class="dropdown-btn">
        <li class="menu">
            <a data-valor="#" class="ativo">
            <span class="icon space"><i class="bi bi-1-circle"></i></span>
            <span class="txt">Gestão por Processos: Contextualizaçãos</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="../topico 01/topico 01.php">
            <i class="bi bi-journals circulo"></i>01 Inicio</a>
        <a href="../topico 01/topico 01.php#subtopico1.2">
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
        <a href="../topico 02/topico 02.php">
            <i class="bi bi-journals circulo"></i>02 Inicio</a>
        <a href="../topico 02/topico 02.php#subtopico2.2">
            <i class="bi bi-journals circulo"></i>02.2 Gerenciamento para melhorar Processos</a>
    </div>

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
                         <h2 class="Titulo wow fadeIn">01 - Gestão por Processos: Contextualização</h2>

                        <!-- Destaque verde -->
                        <div class="content_box_padrao wow fadeInLeftBig">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    <strong>Objetivo:</strong> Apresentar por meio de um exemplo do cotidiano o link com a gestão de processos e evidenciar os principais conceitos que são utilizados na gestão de processos.
                                </p>
                            </div>

                            <!-- CAIXA DE TEXTO EXEMPLO -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_exemplo">
                                    <i class="fa-regular fa-pen-to-square"></i> 
                                        EXEMPLO 
                                </div>
                                <div class="content_box" id="conteudo_exemplo">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                            Antes de iniciar a discussão sobre o gerenciamento de processos, imagine que ontem foi um domingo e você, no início da noite, foi fazer um lanche em uma lanchonete. Ao chegar lá, você escolheu um local e sentou. Logo em seguida, um garçom foi até você e mostrou o cardápio, para que fizesse a escolha do pedido. Após analisar as opções, você fez a escolha por um hambúrguer e um suco de laranja. O garçom anotou seu pedido e entregou na cozinha da lanchonete. Passados cinco minutos, o garçom retornou e informou que não seria possível fazer o suco, porque não tinha laranja, você então pediu um suco de limão. Após trinta minutos, o garçom retornou à sua mesa e serviu o lanche que você pediu. Você fez a refeição, chamou o garçom e pediu a conta. O garçom se dirigiu ao caixa da lanchonete, fechou a conta, entregou a você, que realizou o pagamento e, em seguida, foi para casa. Após sua saída da lanchonete, o garçom foi limpar a mesa para o próximo cliente e percebeu que no local em que você estava sentado havia uma irregularidade no piso, que poderia ter ocasionado sua queda da cadeira ou poderia ter vindo a gerar a queda de um outro cliente. Ele chamou então o gerente da lanchonete e juntos tiraram aquela mesa e as cadeiras, a fim de que não ocorresse nenhum acidente. Em seguida, o gerente questionou com o garçom o motivo do pedido ter demorado trinta e cinco minutos, uma vez que o tempo padrão é de vinte minutos para o preparo dos lanches. O garçom explicou que o atraso ocorreu, devido à falta de laranjas que o levou a refazer o pedido.
                            </p>
                                </div>
                            </div>

                            <!-- CAIXA DE TEXTO FIQUE ATENTO -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s" id="subtopico1.2">
                                <div class="caixaprincipal" id="titulo_fiqueatento">
                                    <i class="fa-solid fa-person-circle-exclamation"></i> 
                                        FIQUE ATENTO 
                                </div>
                                <div class="content_box" id="conteudo_fiqueatento">
                                    <p>Observe que para você fazer a refeição na lanchonete, várias pessoas precisaram realizar diversas atividades antes da sua chegada, durante sua permanência na lanchonete e após sua saída. Foi a partir do conjunto de atividades que foram realizadas que você conseguiu satisfazer sua necessidade de fazer um lanche. Essa situação é um excelente exemplo de processos e a partir dele o tema gestão de processos será desenvolvido.</p>
                                </div>
                            </div>
                            <br>

                             <!-- Título Pricipal -->
                         <h2 class="Titulo wow fadeIn">01.2 - Principais Conceitos Associados à Gestão de Processos</h2><br>
                            <div>
                                <p class="wow fadeIn"><strong>Antes de abordar a gestão de processos, é preciso conhecer alguns conceitos que serão expostos a seguir.</strong></p>
                            </div>


                            <!-- Subtopico -->
                            <h3 class="Subtopico wow fadeIn">Processo</h3>
                            <!-- IMAGEM COM CAIXAS -->
                            <div class="apresentacao_inicial">
                                <div class="img_resp wow zoomIn" data-wow-delay="0.3s">
                                    <img src="../imgs/group_15.png" style="width: 25rem;" alt="">
                                    <p class="apresentacao_descricao">Fonte: <a target="_blank" href="https://www.freepik.com/free-vector/sales-plan-business-abstract-concept-vector-illustration-marketing-plan-presentation-business-strategy-profit-forecast-commercial-goal-sales-management-target-group-abstract-metaphor_12083673.htm">Imagem retirada do Freepik</a></p>
                                </div>
                                <div>
                                    <ul class="box_list wow fadeIn" data-wow-delay="0.3s">
                                        <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.3s">
                                            <i class="bi bi-1-circle"></i> O Guia BPM CBOK conceitua processo como uma agregação de atividades e comportamentos executados por humanos ou máquinas para alcançar um ou mais resultados.
                                        </li>
                                        <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.5s">
                                            <i class="bi bi-2-circle"></i> Outro conceito de processo é o apresentado na NBR ISO 9000, o qual apresenta processo como qualquer atividade, ou conjunto de atividades inter-relacionadas, que usam recursos para transformar insumos (entradas) em produtos (saídas). (NBR ISO 9000:2000, p.3).</li>
                                    </ul>
                                </div>
                            </div>            
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Aqui foram expostos dois de vários conceitos existentes para processos. <strong>O objetivo não é se estender em evidenciar suas sutis diferenças, mas chamar à atenção para a convergência existente entre eles.</strong> Observe que ambos falam em atividades executadas para gerar um resultado ou produto. Nesse contexto, pode-se colocar um conceito genérico de processo como sendo um conjunto de atividades que são realizadas em uma sequência lógica para transformar insumos em um produto ou serviço que satisfaça uma necessidade, manifestada ou não.<br><br>

                            Voltando ao exemplo da lanchonete, por meio da Figura 01, evidencia-se o conceito de processo.
                            </p>

                            <div>
                            <!-- IMAGEM NO SITE  -->
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                Ilustração do conceito de processo</p>
                                    <div class="zoom">
                                        <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem1">
                                            <img src="../imgs/Figura01.png" alt="Figura01" id="img-1">
                                        </a>
                                    </div>
                            </div>

                            <!-- Imagem - MODAL-->
                            <div class="modal fade text-center" id="Imagem1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="../imgs/Figura01.png" alt="Figura01">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 1:</strong>
                                Ilustração do conceito de processo</p>
                                </div>
                                </div>
                            </div>
                            <!-- Imagem - End-->
                            <!-- FIM DA IMAGEM NO SITE  -->
                            </div><br><br>

                            <!-- CAIXA DE TEXTO FIQUE ATENTO -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_fiqueatento">
                                    <i class="fa-solid fa-person-circle-exclamation"></i> 
                                        FIQUE ATENTO 
                                </div>
                                <div class="content_box" id="conteudo_fiqueatento">
                                    <p> Observe que ao chegar à lanchonete um garçom executou um conjunto de atividades e, em seguida, levou seu pedido para cozinha, momento em que outro conjunto de atividades foi realizado e, assim, sucessivamente. Em uma sequência lógica definida, atividades foram sendo realizadas até o pagamento da conta. Observe ainda que, mesmo após sua saída da lanchonete, outras atividades foram realizadas. Da mesma maneira, antes da sua chegada à lanchonete, atividades também já haviam sido realizadas, como, por exemplo, a organização das mesas e das cadeiras para receber os clientes.</p>
                                </div>
                            </div>

                            <div>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                           
                            Dessa forma, fica fácil entender que algumas atividades estão diretamente ligadas ao serviço ou ao produto que está sendo ofertado. <strong>No entanto, existem outras atividades que, embora não estejam diretamente ligadas ao serviço ou produto que está sendo ofertado, são importantes e precisam ser realizadas.</strong><br><br>

                            Nesse contexto, de acordo com Ferreira (2013, p.18), os processos são classificados em três tipos:
                            </p>
                            </div>

                            <!-- TIMELINE -->
                            <div class="timelinemae">
                                <div class="timeline01">
                                    <div class="outer">
                                        <div class="card01">
                                            <div class="info wow animate__backInRight">
                                                <h3 class="title01"> Processos Finalísticos</h3>
                                                <p> Contribuem diretamente para o cumprimento do propósito da instituição e agregam valor diretamente para o cliente, podendo ter interface direta com os mesmos, de maneira que qualquer problema no processo será percebido pelo usuário imediatamente.</p>
                                            </div>
                                        </div>
                                        <div class="card01">
                                            <div class="info wow animate__backInLeft">
                                                <h3 class="title01"> Processos Gerenciais</h3>
                                                <p>Coordenam os processos finalísticos e de apoio. São os processos cuja finalidade é promover a estruturação, avaliação e melhoria do funcionamento da organização, hoje e no futuro. Estes processos, assim como os de apoio, não agregam valor diretamente para os clientes, mas são necessários para assegurar que a instituição opere de acordo com seus objetivos e metas de desempenho.</p>
                                            </div>
                                        </div>
                                        <div class="card01">
                                            <div class="info wow animate__backInRight">
                                                <h3 class="title01"> Processos de Apoio</h3>
                                                <p> Como o próprio nome sugere, dão suporte aos finalísticos, sendo necessários para subsidiar a execução dos mesmos. Nesse caso, a ocorrência de falhas não é percebida imediatamente pelo cliente, mas podem impactar no produto ou serviço final. Em outras palavras, são aqueles que prestam apoio ou são provedores de recursos aos demais processos da organização.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Os processos são ainda classificados por níveis. Ferreira (2013, p.17-18) mostra que, conforme o nível, os processos são classificados em:
                            </p>

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
                                            Macroprocessos
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>Segundo Brasil (2007), macroprocessos são conjuntos de macroatividades, que podem ser desdobrados em grupos de processos, pelos quais a instituição cumpre o seu propósito, que devem estar alinhados aos objetivos de suas unidades organizacionais.<br><br>

                                        <i style="color: #44833d;" class="fa fa-cog"></i> <strong>Fornecedor:</strong> Indivíduo ou organização que fornece insumos para os processos de uma organização, que podem ser tanto informações ou orientações quanto prestação ou fornecimento de serviços e produtos.<br><br>

                                        <i style="color: #44833d;" class="fa fa-cog"></i> <strong>Cliente:</strong> Pessoas físicas e/ou jurídicas (públicas ou privadas) que demandam ou utilizam diretamente serviços ou produtos fornecidos por uma organização.<br><br>

                                            No caso das organizações públicas, os clientes são geralmente conhecidos ou denominados como usuários. Os clientes ou usuários que demandam ou utilizam serviços finalísticos da organização são denominados <strong>clientes externos</strong>, ao passo que os membros ou segmentos da organização que utilizam os resultados parciais de processos internos (subprodutos ou serviços intermediários) como insumo em outro processo de natureza interna são chamados <strong>clientes internos.</strong> Em se tratando de uma unidade prestadora de serviços dentro da organização, aquelas que recorrem aos seus serviços/produtos também são chamadas de clientes internos.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Processos
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Os processos, como já explicitado, podem ser definidos como conjuntos de atividades inter-relacionadas ou interativas que transformam insumos (entradas) em produtos ou serviços (saídas), que têm valor para um grupo específico de clientes ou usuários.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Subprocessos
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Os subprocessos são conjuntos de atividades necessárias e suficientes para a execução dos processos. A quantidade de subprocessos depende da complexidade de cada processo.<br><br>

                                                Em um nível mais detalhado, as atividades de um subprocesso são desmembradas em tarefas.<br><br>

                                                <i style="color: #44833d;" class="fa fa-cube"></i> <strong>Atividades:</strong> As atividades são conjuntos de tarefas, com início e fim identificável, orientadas para a consecução dos objetivos definidos em cada etapa. O enfoque nesse caso é o que fazer como condição necessária para se alcançar o objetivo.<br><br>

                                                <i style="color: #44833d;" class="fa fa-cube"></i> <strong>Tarefas:</strong> Compreendem a sequência de passos para realizar uma atividade. Os passos geralmente envolvem explicações detalhadas sobre o como fazer, que fundamentam a construção ou definição de procedimentos.<br><br>

                                                Ao fazer uma análise da classificação dos processos por nível, <strong>observa-se que um conjunto de tarefas gera uma atividade, um conjunto de atividades gera um processo, um conjunto de processos gera um macroprocesso.</strong><br><br>

                                                Apresentadas essas definições e classificações, é importante compreender que um processo é diferente de um setor da organização.<br><br>

                                                O setor é uma parte da estrutura organizacional responsável por executar um ou mais processos. Dessa forma, um setor pode executar um processo em sua totalidade ou apenas uma parte do processo. <strong>Nesse sentido, ressalta-se que os processos são transversais, ou seja, eles passam por um ou mais setores até que tenham seu resultado (produto ou serviço) concluído.</strong><br><br>

                                                <strong>Observe que no exemplo da lanchonete, da sua chegada até sua saída, vários setores trabalharam para que você tivesse sua necessidade atendida.</strong> Ao chegar la, o garçom (setor atendimento) anotou seu pedido. Em seguida, o cozinheiro (setor produção) preparou seu lanche. Após realizar a refeição, foi realizado o pagamento (setor contas a receber). Rapidamente, consegue-se identificar três setores que executaram atividades de um mesmo processo.</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>





                            <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="../index.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="../topico 02/topico 02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
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
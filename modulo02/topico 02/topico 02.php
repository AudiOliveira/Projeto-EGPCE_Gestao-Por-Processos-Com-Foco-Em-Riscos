
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
                         <h2 class="Titulo wow fadeIn">02 - Gerenciamento de Riscos</h2>
                        
                         <!-- Destaque verde -->
                         <div class="content_box_padrao wow fadeInLeftBig">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    <strong>Objetivo:</strong> Proporcionar aos alunos conhecimentos básicos sobre as razões pelas quais os riscos devem ser gerenciados, o significado do processo de gerenciamento de riscos e as principais formas de como proceder a esse gerenciamento.
                                </p>
                            </div>

                            <!-- Subtopico -->
                            <h3 class="Subtopico wow fadeIn">Por que gerenciar riscos?</h3>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Tendo em vista o que até aqui foi exposto, especialmente em relação ao escopo dos riscos que devem ser de interesse em uma organização, na seção precedente, pode-se inferir, naturalmente, que tais situações merecem e devem ser objeto de atenção específica por parte dos gestores e técnicos em uma organização.<br><br>

                            Tanto assim que entidades, como, por exemplo, a <strong><a style="color: #44833d;" class="mouseover" href="" title="The International Organisation of Supreme Audit Institutions" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content=" Organização Internacional de Entidades Fiscalizadoras Superiores"> <em> The International Organization of Supreme Audit Institutions </em><i class="fa fa-search-plus" aria-hidden="true"></i></a> (Organização Internacional de Entidades Fiscalizadoras Superiores)</strong>, prescrevem que <strong>quaisquer entidades públicas ou privadas</strong> estão condicionadas a eventos, incidentes ou ocorrências provocados por origens internas ou externas e que acarretam conseqüências positivas ou negativas aos seus correspondentes desempenhos (INTOSAI, 2007).<br><br>

                            Já o Ministério da Economia e Finanças do Reino Unido afirma que</p>
                           <br>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"qualquer que seja o propósito de uma organização, o alcance de seus objetivos está cercado pela incerteza que tanto apresenta ameaça como oferece oportunidades para seu sucesso"</p>
                                <p class="citacao blockquote-footer"><strong>(HM TREASURY, 2004).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            No âmbito da abordagem de Hill (2006, p. 38), como o risco faz parte das rotinas pessoal e profissional de cada um, sua gestão requer
                                </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"mais que decisões intuitivas e implícitas em relação a eles; exige uma gestão ativa de riscos em bases sistemáticas, holísticas e integradas"</p>
                                <p class="citacao blockquote-footer"><strong>(HILL, 2006, p. 38).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Já a CGU e o MPOG, no âmbito da IN no 01/2016, consideram como objetivos da gestão de riscos:
                                </p>
                            
                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"Art. 15. São objetivos da gestão de riscos:<br>
                                    I – assegurar que os responsáveis pela tomada de decisão, em todos os níveis do órgão ou entidade, tenham acesso tempestivo a informações suficientes quanto aos riscos aos quais está exposta a organização, inclusive para determinar questões relativas à delegação, se for o caso;<br>
                                    II – aumentar a probabilidade de alcance dos objetivos da organização, reduzindo os riscos a níveis aceitáveis;<br> e<br>
                                    III – agregar valor à organização por meio da melhoria dos processos de tomada de decisão e do tratamento adequado dos riscos e dos impactos negativos decorrentes de sua materialização"</p>
                                <p class="citacao blockquote-footer"><strong>(GGU, 2016).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Retornando ao Decreto nº 29.388/2008 (CGE, 2016), que institui a auditoria preventiva com foco em riscos no Poder Executivo do Estado do Ceará, observa-se que a instituição dessa abordagem de Auditoria prevista em seu art. 1º está associada ao correspondente conceito, o qual traz em seu conteúdo o objetivo para gerenciamento de risco, como a seguir indicado:
                                </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"Art. 15. São objetivos da gestão de riscos:<br>
                                "Art.2º Considera-se Auditoria Preventiva o conjunto de abordagens de auditoria exercidas sob a forma de orientação aos gestores públicos, buscando <strong>contribuir para assegurar condições que viabilizem o cumprimento dos objetivos institucionais de um Órgão ou Entidade, no âmbito de sua função de controle interno</strong>, integrante do correspondente processo de gestão".</p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Diante do exposto, entende-se que as razões pelas quais os riscos devem ser gerenciados passam pelo fato de que a adoção de práticas e instrumentos de gestão de riscos contribuem para a melhoria do processo de tomada de decisões e, consequentemente, elevam as chances de alcance de melhores resultados, considerando-se que as situações caracterizadoras de riscos são inerentes e estão presentes em qualquer tipo de organização (pública, privada e do terceiro setor).
                                </p>

                            <!-- CAIXA DE TEXTO SAIBA MAIS -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s" id="subtopico2.2">
                                <div class="caixaprincipal" id="titulo_saibamais">
                                    <i class="fa-solid fa-plus"></i> 
                                        SAIBA MAIS 
                                    </div>
                                <div class="content_box" id="conteudo_saibamais">
                                <p>Assista ao vídeo “<a target="_blank" href="https://www.youtube.com/watch?v=bupdTphdB48">Até os ratos precisam gerenciar os riscos</a>”.</p>
                                </div>
                            </div>
<br>
                            <!-- Título Pricipal -->
                         <h2 class="Titulo wow fadeIn">02.2 - O que é gerenciamento de riscos?</h2>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Tendo já discutido aspectos relacionados ao que são e o que não são riscos, quais os riscos que devem ser objeto de atenção em uma organização e quais os motivos que gestores e técnicos têm para gerenciá-los, partimos agora para evidenciar o que é o gerenciamento de riscos.<br><br>

                            O ponto de partida relativamente ao gerenciamento de riscos corporativos está relacionado ao fato de que qualquer organização existe para proporcionar valor às partes interessadas, sob situações de incertezas, e desafiadoras, em que seus administradores devem decidir até que ponto admitem esses estados de coisas incertas, bem como estabelecem como interferir na busca de produção de valor às partes interessadas (COSO, 2007).<br><br>

                            Nesse contexto, e como as incertezas podem se referir a riscos e a oportunidades, potencialmente destruidores ou agregadores de valor, o gerenciamento de riscos permite aos gestores tratar as incertezas, bem como os riscos e as oportunidades decorrentes, com a finalidade de melhorar a capacidade de agregar valor (COSO, 2007).<br><br>

                            Ainda de acordo com COSO (2007, p. 4) gerenciamento de riscos nas organizações se refere a
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"[...] um processo conduzido [...] pelo conselho de administração, diretoria e demais empregados, aplicado no estabelecimento de estratégias, formuladas para identificar em toda a organização eventos em potencial, capazes de afetá-la, e administrar os riscos de modo a mantê-los compatível com o "apetite a risco" da organização e possibilitar garantia razoável do cumprimento dos seus objetivos"</p>
                                <p class="citacao blockquote-footer"><strong>(COSO 2007, p. 4).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            A definição para gerenciamento de riscos proposta por COSO (2007, p.4) reflete alguns conceitos importantes e essenciais tais como:<br>
                            </p>
                            <ul class="fa-ul list">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> um processo contínuo e que flui através da organização;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> conduzido pelos profissionais em todos os níveis da organização;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> aplicado à definição das estratégias;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> aplicado em toda a organização, em todos os níveis e unidades, e inclui a formação de uma visão de portfólio de todos os riscos a que ela está exposta;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> formulado para identificar eventos em potencial, cuja ocorrência poderá afetar a organização, e para administrar os riscos de acordo com seu "apetite a risco";</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> capaz de propiciar garantia razoável para o conselho de administração e a diretoria executiva de uma organização;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> orientado para a realização de objetivos em uma ou mais categorias distintas, mas dependentes.</li>
                            </ul>
                            <br>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Antes de seguirmos adiante, faz-se necessário compreender o sentido da expressão “apetite a risco” mencionada na definição para gerenciamento de riscos apresentada por COSO (2007).
                            <br><br>
                            Com efeito, o "apetite a risco"<br>
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"[...] é a quantidade de riscos, no sentido mais amplo, que uma organização está disposta a aceitar em sua busca para agregar valor. O "apetite a risco" reflete toda a filosofia administrativa de uma organização e, por sua vez, influencia a cultura e o estilo operacional desta"</p>
                                <p class="citacao blockquote-footer"><strong>(COSO, 2007, p. 20).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            As organizações podem adotar indicadores qualitativos (elevado, moderado ou baixo) ou quantitativos (metas de crescimento, retorno e risco) para medir o apetite ao risco, sendo que uma organização com maior "apetite a risco" poderá investir grande parcela de seus recursos para áreas de alto risco, como é o caso dos mercados emergentes há menos tempo, e uma organização com pequeno "apetite a risco" poderá restringir sua atuação no curto prazo, alocando recursos em mercados consolidados (COSO, 2007).<br><br>

                            COSO (2007) observa ainda que o "apetite a risco" está diretamente associado à estratégia organizacional e é ponderado por ocasião do estabelecimento das estratégias, as quais expõem a organização a níveis diferenciados de riscos. Assim, o gerenciamento de riscos auxilia a gestão da organização a escolher uma estratégia alinhando a criação de valor com o "apetite a risco", orientando a alocação de recursos entre as divisões de negócios e iniciativas, de acordo com os riscos e o planejamento de retorno dos recursos investidos.<br><br>

                            Ainda nesse sentido, COSO (2007) afirma que, em qualquer entidade, sua organização interna, suas equipes de profissionais, seus diversos processos organizacionais e sua infraestrutura para responder e monitorar riscos eficazmente são ponderados pelo correspondente "apetite a risco".<br><br>

                            Retornando à busca das respostas para o que é gerenciamento de riscos, registramos que, no Reino Unido, o Ministério da Economia e Finanças (HM Treasury, 2004) estabelece que:<br>
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"gerenciamento de riscos inclui identificar e avaliar riscos (os riscos inerentes) para, então, construir respostas para eles.<br><br>
                                    Os recursos disponíveis para gerenciar riscos são finitos e, assim, o objetivo é alcançar uma resposta ótima aos riscos. Risco é algo que não se evita, e toda a organização precisa agir para gerenciar riscos de maneira a colocá-los em um nível que seja tolerável, coerente com o "apetite a riscos"</p>
                                <p class="citacao blockquote-footer"><strong>(HM TREASURY, 2004).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Hill (2006, p. 38), por sua vez, informa que a Secretaria do Tesouro do Canadá, em sua publicação Integrated risk management framework, define o gerenciamento de riscos como:<br>
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"uma abordagem sistemática que permite a definição da melhor linha de ação diante de incertezas mediante a identificação, a compreensão, a atuação e a comunicação de questões que envolvem riscos"</p>
                                <p class="citacao blockquote-footer"><strong>(HILL, 2006, p. 38).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Com isso, visa-se auxiliar os servidores a:<br>
                            </p>
                            <ul class="fa-ul list">
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> reconhecer e atacar riscos importantes;</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> facilitar decisões sobre como riscos dessa natureza devem ser administrados; </li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> monitorar o progresso alcançado na gestão desses riscos; e</li>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> aprender a melhorar a maneira pela qual lidamos com riscos.</li>
                            </ul>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            De sua parte, Hill (2006, p. 38) acrescenta que a finalidade da gestão de riscos “é aumentar os benefícios e diminuir os custos de atividades incertas” quanto às diversas funções, que integram o objeto de lida por parte do governo, como, por exemplo: proteção de direitos, criação de condições para a melhoria do bem-estar econômico e social, manutenção da integridade do meio ambiente, melhoria da saúde humana ou da prestação de serviços governamentais.<br><br>

                            A definição estabelecida pela CGU e MPOG, na IN nº 01/2016, por seu turno, considera como gerenciamento de riscos o<br>
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto  wow fadeIn">
                                <p>"processo para identificar, avaliar, administrar e controlar potenciais eventos ou situações, para fornecer razoável certeza quanto ao alcance dos objetivos da organização"</p>
                                <p class="citacao blockquote-footer"><strong>(GGU, 2016).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s" id="subtopico2.3">
                            Nesse sentido, e diante das definições e conceitos apresentados, entende-se que o gerenciamento de riscos pode ser visto como um processo em que se busca transformar situações de incertezas ou de dúvidas que podem prejudicar as operações e os resultados de uma organização em possibilidades de melhoria das atividades e dos processos ou de alavancagem dos resultados, sejam eles econômicos ou sociais.<br>
                            </p>
                            <br>

                            <!-- Título Pricipal -->
                         <h2 class="Titulo wow fadeIn">02.3 - Como gerenciar riscos?</h2>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                        Após o que até aqui foi apresentado em termos de riscos, inclusive o que são e o que não são riscos, aqueles que interessam, os motivos para que sejam gerenciados e o que esse gerenciamento significa, serão agora apresentadas algumas formas de se efetuarem os procedimentos de gestão de riscos.<br><br>

                        Nesse sentido, registre-se a existência de alguns modelos ou abordagens de referência que apresentam metodologias e padrões a serem utilizados para a gestão de riscos, destacando-se, dentre os mais utilizados, o que se refere à <strong>Norma ISO 31000-2009 (AS/NZS 4360)</strong> e à norma concebida pelo Committee of Sponsoring Organizations of the Treadway Commission ou simplesmente <strong>COSO</strong>, em sua versão <strong>II</strong>, dedicados à melhoria dos relatórios financeiros por meio da ética, efetividade dos controles internos e governança corporativa.<br><br>

                        Acerca do modelo previsto na Norma ISO 31000-2009 (AS/NZS 4360), registre-se que se refere a uma série de padrões relacionados ao gerenciamento de riscos, codificados pela International Organizations for Standadization, tendo surgido da necessidade de harmonizar padrões e regulamentações publicados anteriormente, relacionados com a gestão de riscos.<br><br>

                        Tal norma pode ser aplicada aos vários tipos de riscos, ligados aos diferentes setores de uma entidade, incluindo a visão de que risco também é oportunidade. O escopo dessa abordagem é permitir que todas as tarefas estratégicas, gerenciais e operacionais de uma organização estejam alinhadas com objetivos próprios da gestão de riscos, por meio de tarefas e processos.<br><br>

                        A aplicação do modelo da Norma ISO trata de formalizar e de desenvolver processos dentro de Sistemas de Gerenciamento de Riscos. A maioria das implicações, por adotar o novo padrão, está relacionada à reengenharia de práticas gerenciais, para entrar em conformidade com a documentação, comunicação e socialização do novo padrão de operação de Gestão de Riscos.
                        </p>

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-03">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 3:</strong>
                            Norma ISO 3100-2009 (AS/NZS 4360)</p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem3">
                                        <img src="../imgs/Figura03.jpg" alt="Figura03" id="img-3">
                                    </a>
                                </div>
                        </div>

                        <!-- Imagem03 - MODAL-->
                        <div class="modal fade text-center" id="Imagem3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                                <img class="img-fluid" src="../imgs/Figura03.jpg" alt="Figura03">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                                <p class="text-secondary"><strong>Figura 3:</strong>
                                Norma ISO 3100-2009 (AS/NZS 4360)</p>
                            </div>
                            </div>
                        </div>
                        <!-- Imagem03 - End-->

                        <p class="wow fadeIn">Comparando as duas versões podemos elencar alguns pontos: </p>

                        <ol>
                            <li class="wow fadeInLeft" data-wow-delay="0.3s"><strong> A introdução da norma ficou mais sucinta e objetiva;</strong></li><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.6s"><strong> Termos e definições houve uma redução, pois na versão 2009 haviam 29 itens enquanto que na versão 2018 restaram apenas 8;</strong></li><br>
                            <li class="wow fadeInLeft" data-wow-delay="0.9s"><strong> Os princípios também houve redução de 11, na versão 2009, para 8 na versão 2018;</strong> </li><br>
                            <li class="wow fadeInLeft" data-wow-delay="1.2s"><strong> A estrutura sofreu diversas mudanças, mas sem sem muitas alterações de sentido.</strong> </li><br>
                        </ol>


                        <!-- Destaque verde -->
                        <div class="content_box_padrao">
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Algumas ideias ganharam mais destaque do que na versão anterior, sendo:</strong>
                            </p>
                            <!-- LISTA EM MOVIMENTO-->
                            <ol type="a">
                                <li class="wow fadeInLeft" data-wow-delay="0.3s"> Posicionamento da liderança: Assim como em outras normas ISO mais recentes, a liderança, ou Alta Direção, vem sendo posicionada como essencial para a condução das atividades de definição de responsabilidade e, especialmente, mudança de cultura por meio da demonstração de comprometimento.</li><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.6s"> Monitoramento sistêmico: Na nova versão é pontuado sobre a necessidade de assegurar que sistemas para gerenciar riscos estejam implementados e operem eficazmente, lembrando que sistemas podem ser informatizados ou não.</li><br>
                                <li class="wow fadeInLeft" data-wow-delay="0.9s"> Contexto da organização: Ao se analisar o contexto da organização, foi incluído um ponto sobre considerar a complexidade das redes de relacionamento e dependências, de partes interessadas. </li><br>
                                <li class="wow fadeInLeft" data-wow-delay="1.2s"> Comunicação e consulta: É ressaltada a importância da comunicação e consulta com as partes interessadas de forma mais genérica, porém destacando a relevância de desenvolver melhorias a partir das informações coletadas com a consulta. </li><br>
                                <li class="wow fadeInLeft" data-wow-delay="1.5s"> Implementação: A nova redação tem mais foco em planejamento da estrutura, retirando citações objetivas referentes a manutenção de registros e atendimento a requisitos legais, que estavam presentes na versão anterior.
                                </li><br>
                            </ol>
                            <!-- FIM LISTA EM MOVIMENTO-->
                        </div><br>

                        <p class="wow fadeIn"> Na versão 2018 foi dada ênfase do caráter dinâmico e iterativo da gestão de riscos; assim como as orientações para identificação, análise e avaliação de riscos ficaram mais claras e didáticas; também a abordagem sobre documentação do processo de gestão de riscos e seus resultados ficou mais flexível; não há mais a presença do anexo que explicava os atributos de uma gestão de riscos avançada; empregou um discurso mais gerencial, ou estratégico; e foi reforçada a ideia de que a gestão de riscos é algo que deva ser intrínseca à organização.</p>

                        <p class="wow fadeIn">Já o modelo COSO II aborda o paradigma de gestão de riscos por meio de um modelo integrado composto pelas dimensões: ambiente interno; definição de objetivos; identificação de eventos; avaliação de riscos; resposta ao risco; atividades de controle; informação e comunicação; e monitoramento (COSO, 2007). As especificações, alcances e significados desse modelo integrado serão apresentados na próxima seção desta aula. </p>

                        <p class="wow fadeIn">Por outro lado, Hill (2006) lembra que foram desenvolvidas várias outras estruturas de gestão de riscos com a finalidade de auxiliar os gestores a tratar os riscos de forma sistemática, citando, a título de exemplo: a gestão de riscos da Associação Canadense de Padrões (CAN/CSAQ850-97); o modelo de Critérios de Controle desenvolvido pelo <strong><a style="color: #44833d;" class="mouseover" href="" title="Instituto Canadense de Auditores Juramentados" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content=" Canadian Institute of Chartered Accountants"> Instituto Canadense de Auditores Juramentados <i class="fa fa-search-plus" aria-hidden="true"></i></a> (Canadian Institute of Chartered Accountants)</strong>; a Estrutura de Gestão de Riscos em Políticas Públicas, do Grupo de Trabalho de Secretários Executivos Adjuntos para a Gestão de Riscos; e a estrutura para a Gestão Integrada de Riscos, do Conselho do Tesouro canadense. </p>

                        <p class="wow fadeIn">Hill (2006) destaca ainda que essas estruturas de gestão de risos desenvolvidas estão suportadas por uma base comum referente às principais etapas de um ciclo de processo decisório em gestão de riscos: identificação; avaliação; resposta; comunicação; e monitoramento e aprendizagem. </p>


                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center img-04">
                            <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 4:</strong>
                            Ciclo de Processo Decisório em Gestão de Riscos</p>
                                <div class="zoom">
                                    <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem4">
                                        <img src="../imgs/Figura04.png" alt="Figura04" id="img-4">
                                    </a>
                                </div>
                        </div>

                        <!-- Imagem04 - MODAL-->
                        <div class="modal fade text-center" id="Imagem4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                            <div class="modal-content w-75">
                                <img class="img-fluid" src="../imgs/Figura04.png" alt="Figura04">
                            </div>
                            <div class="modal-footer w-75 bg-light justify-content-center">
                                <p class="text-secondary"><strong>Figura 4:</strong>
                                Ciclo de Processo Decisório em Gestão de Riscos</p>
                            </div>
                            </div>
                        </div>
                        <!-- Imagem04 - End-->
                        <br>

                        <p class="wow fadeIn">Ademais, registre-se que a CGU e o MPOG (CGU, 2016) estabeleceram, no âmbito da IN nº 01/2016, que na implementação e na atualização do modelo de gestão de riscos, a alta administração, bem como seus servidores ou funcionários, deverá observar os componentes da estrutura de gestão de riscos: </p>
                        <ul class="fa-ul list">
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> Ambiente interno;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> Fixação de objetivos;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> Identificação de eventos;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> Avaliação de riscos;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> Resposta a riscos;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> Atividades de controles internos;</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> Informação e comunicação; e</li>
                        <li class="wow fadeInLeft" data-wow-delay="0.3s"><i style="color: #44833d;" class="fa fa-arrow-right"></i> Monitoramento.</li>
                        </ul>
                        <br>

                        <p class="wow fadeIn">Diante do exposto, conclui-se que há diversas e variadas proposições e modelos destinados a viabilizar a gestão de riscos em uma organização e que a adoção de um modelo pode basear-se inclusive em uma estrutura concebida, modelada e definida pela própria organização, observando suas realidades institucionais e suas necessidades de decisões relacionadas a riscos. </p>
                        <br>

                        <!-- CAIXA DE TEXTO SAIBA MAIS -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_saibamais">
                                <i class="fa-solid fa-plus"></i> 
                                    SAIBA MAIS 
                                </div>
                            <div class="content_box" id="conteudo_saibamais">
                            <p>Para uma leitura complementar, acesse a biblioteca do curso e leia o "<a class="font-vermelho1" target="_blank" href="https://drive.google.com/open?id=0B5moywX9O3sQSDBkSDlKNUdRemc">Guia sobre a gestão de riscos no serviço público</a>", de Stephem Hill.</p>
                            </div>
                        </div>

                                                    


                            <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="../topico 01/topico 01.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="../topico 03/topico 03.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
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
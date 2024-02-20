
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
            <a data-valor="#" class="ativo">
            <span class="icon space"><i class="bi bi-1-circle"></i></span>
            <span class="txt" style="font-size: 18px;">Riscos: O que são e os que nos interessam</span>
            <i class="bi bi-caret-down-fill barra-sub"></i>
            </a>
        </li>
    </button>
    <!-- Sub tópicos -->
    <div class="dropdown-container">
        <a href="./topico 01.php">
            <i class="bi bi-journals circulo"></i>01 - Riscos: O que são e os que nos interessam</a>
        <a href="#subtopico1.2">
            <i class="bi bi-journals circulo"></i>01.2 - Quais os riscos que nos interessam?</a>
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
        <span class="txt" style="font-size: 18px;">O modelo de estrutura integrada de gestão de riscos COSO II</i></span>
        </a>
    </li>
    <!-- Tópico -->
    <li class="menu">
        <a href="./topico 04.php"">
        <span class="icon "><i class="bi bi-4-circle"></i>
        </span>
        <span class="txt" style="font-size: 18px;">Gerenciamento de riscos na Controladoria e Ouvidoria Geral do Estado do Ceará (CGE/CE)</i></span>
        </a>
    </li>

    <li class="menu">
        <a href="./referencias.php">
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
            <a data-valor="#" class="ativo">
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
        <a href="#subtopico1.2">
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
        <a href="./topico 04.php"">
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
                         <h2 class="Titulo wow fadeIn">01 - Riscos: O que são e os que nos interessam</h2>

                        <!-- Destaque verde -->
                        <div class="content_box_padrao wow fadeInLeftBig">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    <strong>Objetivo:</strong> Apresentar informações que permitam a compreensão das características dos riscos em geral e daqueles que interessam às organizações.
                                </p>
                            </div>

                            <!-- Subtopico -->
                            <h3 class="Subtopico wow fadeIn">O que são e o que não são riscos?</h3>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            A definição para risco pode ser considerada circunstancial e dependente de quem ou qual organização a apresenta ou a considera em sua vida, pessoal ou organizacional. Nada obstante, indubitavelmente, o risco traz em sua essência uma imagem de algo sobre o qual não se pode prever ou evitar, algo incerto, um evento que pode ou não ocorrer, normalmente acarretando certa perda, em caso de se tornar realidade.
                            </p><br>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto wow fadeIn">
                                <p>"O risco é parte de qualquer empreitada humana. Desde o instante em que despertamos pela manhã, que entramos em nosso carro ou usamos o transporte público para a escola ou trabalho, até voltarmos para a cama (e talvez mesmo depois), estamos expostos a riscos de diferentes intensidades"</p>
                                <p class="citacao blockquote-footer"><strong>(DAMODARAN, 2009, p. 21).</strong></p>
                            </div>
                            
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Complementando essa visão relativa a uma abordagem humana sobre risco, Hill afirma que:
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto wow fadeIn">
                                <p>"O risco reflete coisas futuras com as quais estamos preocupados, como nossa situação financeira, nossa saúde, nossos empregos, nossos filhos, o meio ambiente, os outros países, as leis e as regulações e os futuros políticos"</p>
                                <p class="citacao blockquote-footer"><strong>(HILL, 2006, p. 37).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Nesse contexto, faz-se necessário demarcar um ponto de partida, sendo razoável supor que inicialmente seja interessante definir o que é incerto, incerteza e evento, para na seqüência tratar-se especificamente o risco e seu gerenciamento.<br><br>

                            Com efeito, dentre inúmeras definições, pode-se considerar incerto como algo que não é certo ou que é duvidoso, que transmite dúvidas, que não é seguro, algo contingente ou aleatório, e a incerteza como a falta de certeza ou a dúvida, ou o estado de coisa incerta (AURÉLIO, 2017).<br><br>

                            Já evento está associado a um acontecimento, a algo que acontece (PRIBERAM, 2017), um incidente ou ocorrência, a partir de fontes internas ou externas a uma entidade, podendo afetar a realização dos objetivos (COSO, 2007).<br><br>

                            Assim, pode-se presumir que o risco está relacionado a situações, a estados ou a eventos em que não se pode assegurar que algo ocorra com certeza, sobre o que restam dúvidas ou não se está seguro, de forma imprevisível, contingencial, aleatória.<br><br>

                            Nesse sentido, de acordo com o Ministério da Economia e Finanças do Reino Unido,
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto wow fadeIn">
                                <p>"Risco é definido como incerteza do resultado, seja em forma de uma oportunidade (positiva) ou de uma ameaça (negativa), de ações e eventos"</p>
                                <p class="citacao blockquote-footer"><strong>(HM TREASURY, 2004).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            De outra parte, o <strong><a style="color: #44833d;" class= mouseover" href="" title="Committee of Sponsoring Organizations of the Treadway Commission" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content=" Comitê das Organizações Patrocinadoras da Comissão Treadway"> Committee of Sponsoring Organizations of the Treadway Commission <i style="color: #44833d;" class="fa fa-search-plus" aria-hidden="true"></i></a></strong>  (Comitê das Organizações Patrocinadoras da Comissão Treadway) definiu que
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto wow fadeIn">
                                <p>"Incertezas representam riscos e oportunidades, com potencial para destruir ou agregar valor às organizações, as quais só existem para gerar valor para os <strong><a style="color: #44833d;" class="mouseover" href="" title="stakeholders" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content=" Comitê das Organizações Patrocinadoras da Comissão Treadway"> stakeholders <i style="color: #44833d;" class="fa fa-search-plus" aria-hidden="true"></i></a></strong>  (partes interessadas)"</p>
                                <p class="citacao blockquote-footer"><strong>(COSO, 2007, p. 3).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            De acordo com IFAC (2001, p. 57), os stakeholders (partes interessadas) abrangem:
                            </p>
                            <ul class="fa-ul list">
                                            <li class="wow fadeInLeft"><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Os representantes eleitos pela sociedade (parlamentares); </li>
                                            <li class="wow fadeInLeft"><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Os provedores de recursos (contribuintes, credores financeiros, proprietários de títulos do governo e credores em geral); </li>
                                            <li class="wow fadeInLeft"><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Os prestadores de serviços e parceiros (funcionários, contratados, parceiros de joint ventures e de outras entidades governamentais); </li>
                                            <li class="wow fadeInLeft"><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Os usuários dos serviços (pessoas físicas e empresas que se beneficiam dos serviços que a entidade proporciona); </li>
                                            <li class="wow fadeInLeft"><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Grupos de interesse como analistas e coletores de estatísticas (analistas políticos, economistas, analistas financeiros, agências de rating);</li>
                                            <li class="wow fadeInLeft"><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> A mídia;</li>
                                            <li class="wow fadeInLeft"><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> e a comunidade em geral.</li>
                                        </ul>
                                        <br>

                            <!-- CAIXA DE TEXTO SAIBA MAIS -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_saibamais">
                                    <i class="fa-solid fa-plus"></i> 
                                        SAIBA MAIS 
                                    </div>
                                <div class="content_box" id="conteudo_saibamais">
                                    <p>O <strong><a style="color: #44833d;" class="mouseover" href="" title="COSO®" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content="Committee of Sponsoring Organizations of the Treadway Commission"> COSO® <i style="color: #44833d;" class="fa fa-search-plus" aria-hidden="true"></i> </a></strong> é uma organização privada criada nos EUA, em 1985, para prevenir e evitar fraudes nos procedimentos e processos internos da empresa.<br><br>

                                        Inicialmente criada como <strong><a style="color: #44833d;" class="mouseover" href="#" title="National Commission on Fraudulent Financial Reporting" data-toggle="popover" data-placement="Top" data-trigger="hover" data-content="Comissão Nacional sobre Fraudes em Relatórios Financeiros"><em>National Commission on Fraudulent Financial Reporting </em><i style="color: #44833d;" class="fa fa-search-plus" aria-hidden="true"></i></a></span></strong>, essa comissão era formada por representantes das principais associações de classes de profissionais ligados à área financeira.<br><br>

                                        O primeiro objeto de estudo da comissão foram os controles internos das empresas. Essa comissão, posteriormente, tornou-se um comitê e passou a se chamar COSO - Committee of Sponsoring Organizations of the Treadway Commission.<br><br>

                                        O COSO é uma organização sem fins lucrativos, dedicada à melhoria dos relatórios financeiros, sobretudo pela aplicação da ética e da efetividade na aplicação e no cumprimento dos controles internos e é patrocinado pelas cinco das principais associações de classe de profissionais ligados à área financeira nos EUA. Em decorrência da globalização e padronização internacional das técnicas de auditoria, as recomendações da COSO, relativas aos controles internos, bem como seu cumprimento e sua observância são amplamente praticados e tidos como modelo e referência no Brasil e na maioria dos países do mundo.<br><br>

                                        Fonte: <a class="font-vermelho1" target="_blank" href="https://pt.wikipedia.org/wiki/COSO">https://pt.wikipedia.org/wiki/COSO</a>, Acesso em 15 ago. 2017.</p>
                                </div>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Ademais, e com a finalidade de demonstrar a relação entre eventos, riscos e oportunidades, COSO (2007, p. 4) indica que
                            </p>

                            <!-- CITAÇÃO -->
                            <div class="citacao_texto wow fadeIn">
                                <p>"Os eventos podem gerar impacto tanto negativo quanto positivo ou ambos. Os que geram impacto negativo representam riscos que podem impedir a criação de valor ou mesmo destruir o valor existente. Os de impacto positivo podem contrabalançar os de impacto negativo ou podem representar oportunidades, que por sua vez representam a possibilidade de um evento ocorrer e influenciar favoravelmente a realização dos objetivos, apoiando a criação ou a preservação de valor"</p>
                                <p class="citacao blockquote-footer"><strong>(COSO 2007, p. 4).</strong></p>
                            </div>

                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Diante de toda a variedade, e não dotada de consenso, de definições expostas, pode-se inferir que a incerteza (algo que qualifica o risco), o risco e a oportunidade mantêm entre si relação de complementaridade em seus significados, e que o risco pode ser categorizado em termos das consequências positivas (oportunidades) e negativas (aqui entendidas como ameaças) decorrentes de sua ocorrência, por meio de um evento.<br><br>

                            Finalmente, <strong>algo é certo e indiscutível: problemas, fatos ou eventos passados, que já ocorreram, não são riscos</strong>, justamente porque, em virtude de já terem ocorrido, não são mais detentores de característica ou atributo desconhecido, em si mesmo e em termos de seus efeitos, sejam eles positivos ou negativos.
                            </p>

                            <!-- CAIXA DE TEXTO SAIBA MAIS -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s" id="subtopico1.2">
                                <div class="caixaprincipal" id="titulo_saibamais">
                                    <i class="fa-solid fa-plus"></i> 
                                        SAIBA MAIS 
                                    </div>
                                <div class="content_box" id="conteudo_saibamais">
                                    <p>Sugestão de leitura complementar: Capítulo 1 - “O que é risco?”, do livro de Damadoran (2009), p. 21-24.</p>
                                </div>
                            </div>
                            <br>


                            <!-- Título Pricipal -->
                         <h2 class="Titulo wow fadeIn">01.2 - Quais os riscos que nos interessam?</h2><br>
                            <div>
                                <p class="wow fadeIn">O interesse deste curso está voltado para os <strong>riscos</strong> relacionados à gestão das organizações, das <strong>instituições</strong>, cuja existência atual e futura depende de como são administradas e dos resultados que alcançam. Assim, o foco está relacionado aos riscos associados às <strong>metas</strong>, aos <strong>objetivos</strong> e aos <strong>resultados</strong> estabelecidos pelas organizações e de como eles se relacionam com os recursos alocados, com a comunicação empreendida, com a visibilidade alcançada e com o desempenho ao longo do tempo, por exemplo.</p>
                            </div>
                            <br>
                            <!-- IMAGEM NO SITE  -->
                            <div class="text-center img-01">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 1:</strong>
                                Relacionamento das metas, objetivos e resultados com os recursos</p>
                                    <div class="zoom">
                                        <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem1">
                                            <img src="./imgs/Figura01.png" style="max-width: 50rem; width: 30rem;" alt="Figura 1" id="img-1">
                                        </a>
                                    </div>
                            </div>
                            <br>
                                <p class="wow fadeIn">Mesmo assim, faz-se necessário focar um pouco mais esse universo tão abrangente de riscos. Dessa forma, pode-se considerar que os riscos relativos à gestão das organizações que mais interessam aos gestores e a tantos quantos tratem da missão de gerenciá-las são os que se referem às <strong>dimensões estratégica</strong>, <strong>financeira</strong>, <strong>operacional</strong> e de <strong>conformidade</strong>.</p>
    
    

                            <!-- Imagem01 - MODAL-->
                            <div class="modal fade text-center" id="Imagem1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="./imgs/Figura01.png" alt="Figura01">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 1:</strong>
                                    Relacionamento das metas, objetivos e resultados com os recursos</p>
                                </div>
                                </div>
                            </div>
                            <!-- Imagem01 - End-->

                            <br>
                            <!-- IMAGEM NO SITE  -->
                            <div class="text-center img-02">
                                <p class="TituloFigura FonteMenor text-secondary p-2"><strong>Figura 2:</strong>
                                Universo de Riscos</p>
                                    <div class="zoom">
                                        <a href="..." data-bs-toggle="modal" data-bs-target="#Imagem2">
                                            <img src="./imgs/Figura02.png" alt="Figura02" id="img-2">
                                        </a>
                                    </div>
                            </div>

                            <!-- Imagem02 - MODAL-->
                            <div class="modal fade text-center" id="Imagem2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="./imgs/Figura02.png" alt="Figura02">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 2:</strong>
                                    Universo de Riscos</p>
                                </div>
                                </div>
                            </div>
                            <!-- Imagem02 - End-->
                            <br>

                            <p class="wow fadeIn">Nesse sentido, por exemplo, podem-se indicar, a seguir, algumas características organizacionais inerentes à <strong>dimensão estratégica</strong>, cujos riscos associados são objeto de interesse:</p>

                             <!-- Balão informativo -->
                             <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                            </div>

                            <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                            <div class="accordion destaques wow fadeIn" id="accordionExample">
                                <div>
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Objetos Estratégicos
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>Projeções quantitativas ou qualitativas para o futuro de uma organização, normalmente estabelecidas de forma participativa entre representantes das partes relacionadas e que têm interesse na organização, observados requisitos de exequibilidade.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Iniciativas
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Ações que marcam o início de qualquer atividade, projeto, processo organizacional, vinculadas a objetivos definidos previamente.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Aquisições
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Ações de incorporação de insumos para o processo operacional de uma organização.</p>
                                        </div>  
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                            Planejamento e Aquisição de Recursos
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Ações de preparo, organização e controle para viabilizar a estruturação de recursos de toda ordem e o processo operacional de uma organização.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                            Governança
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Estrutura que visa suprir a necessidade de assegurar que as empresas proporcionem retornos aos seus financiadores, investidores e fornecedores de recursos, inclusive acionistas, acrescentando valor às empresas, a longo prazo.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
                                            Comunicação e Relação com o Público
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Ações de transmissão e recepção de mensagens com todas as partes relacionadas e que têm algum interesse com e nas organizações.</p>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>

                            <p class="wow fadeIn">No que se refere à <strong>dimensão financeira</strong>, algumas das características organizacionais cujos riscos estão associados estão, a seguir, exemplificadas:</p>

                            <!-- Balão informativo -->
                            <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                            </div>

                            <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                            <div class="accordion destaques wow fadeIn" id="accordionExample2">
                                <div>
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                            Gestão Contábil e Reporte
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                        <p>Ações que assegurem a consistência e a integridade dos registros e relatórios contábeis, de acordo com a estrutura patrimonial, econômica e financeira de uma organização.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                            Gestão liquidez e Crédito
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Ações que assegurem eficiência e eficácia na gestão financeira de bens, direitos e obrigações de uma organização.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            Apresentação ao Público
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Modelo que proporciona oportuno, tempestivo e adequado conjunto de relatórios que comunicam a situação patrimonial, econômica e financeira às diversas partes relacionadas com os interesses de uma organização.</p>
                                        </div>  
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                            Fontes de Recursos
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Estrutura que viabiliza oportuna, tempestiva e adequada alocação de recursos financeiros, viabilizando a eficiência do processo operacional de uma organização.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingEleven">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                            Variação Cambial
                                        </button>
                                    </h2>
                                    <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample2">
                                        <div class="accordion-body">
                                            <p>Ações que assegurem proteção às dívidas e a outras obrigações de uma organização que estejam atreladas a alteração de cotação de moeda estrangeira.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <p class="wow fadeIn">Em relação à <strong>dimensão operacional</strong> ou das <strong>operações</strong>, são apresentadas, a seguir, algumas características organizacionais para os quais estão relacionados riscos:</p>

                            
                            <!-- Balão informativo -->
                            <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                            </div>

                            <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                            <div class="accordion destaques wow fadeIn" id="accordionExample3">
                                <div>
                                    <h2 class="accordion-header" id="headingTwelve">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                                            Gestão de Patrimônio
                                        </button>
                                    </h2>
                                    <div id="collapseTwelve" class="accordion-collapse collapse show" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                        <p>Modelo e estrutura que assegura as melhores condições de uso e de retorno aos recursos de uma organização e aos correspondentes investimentos realizados.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingThirteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                            Gestão de Contigências
                                        </button>
                                    </h2>
                                    <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p>Modelo e estrutura que definem o que deve ser feito por uma organização ante a possibilidade de ocorrência de situações operacionais indesejadas.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFourteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                            Gestão de Pessoas e de Recursos humanos
                                        </button>
                                    </h2>
                                    <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p>Modelo e estrutura definidos para gestão dos que atuam em uma organização, independente de seu vínculo profissional ou empresarial, sob a ótica dos processos de seleção, contratação, manutenção, desenvolvimento, sucessão e desligamento.</p>
                                        </div>  
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFifteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                            Tecnologia da Informação e Comunicação
                                        </button>
                                    </h2>
                                    <div id="collapseFifteen" class="accordion-collapse collapse" aria-labelledby="headingFifteen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p>Estrutura de recursos de natureza tecnológica, em termos de hardware e software, que proporcionam a melhor especificação, desenvolvimento, aplicação e manutenção de sistemas de informação e de comunicação.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingSixteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                                            Compras e Gestão de Estoques
                                        </button>
                                    </h2>
                                    <div id="collapseSixteen" class="accordion-collapse collapse" aria-labelledby="headingSixteen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p>Modelo e estrutura organizacional que proporciona adequada eficiência no processo de aquisição e conseqüente gestão dos estoques de insumos a serem utilizados no processo operacional de uma organização.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingSeventeen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                            Serviços
                                        </button>
                                    </h2>
                                    <div id="collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="headingSeventeen" data-bs-parent="#accordionExample3">
                                        <div class="accordion-body">
                                            <p>Modelo e estrutura organizacional que viabiliza a prestação de serviços internos de apoio e suporte a todas as áreas e unidades que compõem a organização.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <p class="wow fadeIn">Finalmente, quanto à <strong>dimensão conformidade</strong>, algumas das características organizacionais para as quais os riscos devem ser observados estão apresentadas abaixo:</p>

                            <!-- Balão informativo -->
                            <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                                <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                            </div>

                            <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                            <div class="accordion destaques wow fadeIn" id="accordionExample4">
                                <div>
                                    <h2 class="accordion-header" id="headingEighteen">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                                            Ambiente Regulatório
                                        </button>
                                    </h2>
                                    <div id="collapseEighteen" class="accordion-collapse collapse show" aria-labelledby="headingEighteen" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                        <p>Estrutura institucional que submete uma organização a critérios de natureza econômica e social definidos pelo Estado em relação a determinados serviços públicos que lhe são delegados.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingNineteen">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                            Jurídico e Legal
                                        </button>
                                    </h2>
                                    <div id="collapseNineteen" class="accordion-collapse collapse" aria-labelledby="headingNineteen" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            <p>Ações que assegurem eficiência e eficácia na gestão financeira de bens, direitos e obrigações de uma organização.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTwenty">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                            Código de Conduta
                                        </button>
                                    </h2>
                                    <div id="collapseTwenty" class="accordion-collapse collapse" aria-labelledby="headingTwenty" data-bs-parent="#accordionExample4">
                                        <div class="accordion-body">
                                            <p>Conjunto de requisitos de natureza ética e moral que devem ser seguidos por todos os que atuam em uma organização.</p>
                                        </div>  
                                    </div>
                                </div>

                            </div>

                            <p class="wow fadeIn">Enfim, os riscos que interessam neste curso são os relativos à dinâmica de gestão de uma organização no contexto de sua perspectiva estratégica, financeira, operacional e de regulação, considerando ainda sua razão de ser e os interesses das diversas partes relacionadas.</p>

                            <!-- CAIXA DE TEXTO CURIOSIDADE -->
                            <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                                <div class="caixaprincipal" id="titulo_curiosidade">
                                    <i class="fa-solid fa-magnifying-glass"></i> 
                                    CURIOSIDADE 
                                </div>
                                <div class="content_box" id="conteudo_curiosidade">
                                    <p>A Secretaria Estadual de Saúde do Estado XZPTO em seu planejamento estratégico para o quadriênio 2016 a 2019 definiu os seguintes objetivos:<br><br>

                                    <div>
                                        <ul class="fa-ul listas">
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Fornecer serviços de saúde para a população do estado, priorizando os indivíduos de menor renda. </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Contribuir para a redução da morte infantil por falta de atendimento aos recém-nascidos. </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Contribuir para a redução de nascimento não desejado, principalmente entre as adolescentes, na faixa dos 12 aos 18 anos. </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Fornecer medicamentos essenciais à vida gratuitamente ou a preços condizentes com a renda dos beneficiários envolvidos em situação de doença grave ou terminal. </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-check"></i></span> Zelar pela qualidade do serviço médico oferecido pelos hospitais e pelos postos de saúde do Estado.</li>
                                        </ul>
                                    </div>
                                    <p>
                                        Durante esse quadriênio, a Secretaria resolveu avaliar o Departamento de Aquisição e Logística, responsável por adquirir e distribuir material hospitalar, médico e farmacêutico para os Hospitais e postos de saúde do Estado XZPTO. Nesse departamento temos dois setores: o de compras e o de almoxarifado.<br><br>

                                        O setor de compras é responsável por adquirir:<br><br>

                                        <div>
                                        <ul class="fa-ul listas">
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-arrow-right"></i></span> Material hospitalar para cirurgias programadas e emergenciais; </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-arrow-right"></i></span> Bens e equipamentos para as instalações dos hospitais; </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-arrow-right"></i></span> Remédios essenciais à vida, direcionados a doenças graves e terminais; e </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-arrow-right"></i></span> Fornecer medicamentos essenciais à vida gratuitamente ou a preços condizentes com a renda dos beneficiários envolvidos em situação de doença grave ou terminal. </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-arrow-right"></i></span> Preservativos para distribuição gratuita nos postos de saúde.</li>
                                        </ul>
                                    </div>
                                    <p>

                                        Considerando as competências do departamento e dos setores, reflita sobre o gerenciamento dos riscos e responda às perguntas a seguir:<br><br>

                                        <div>
                                        <ul class="fa-ul listas">
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-bullseye"></i></span> Como você categorizaria os riscos que podem afetar esse departamento? </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-bullseye"></i></span> Quais os eventos relevantes que podem representar riscos para o cumprimento das competências do departamento? </li>
                                            <li><span class="fa-li"><i style="color: #44833d;" class="fa fa-bullseye"></i></span> Relacione no mínimo 10 riscos que decorrem dos possíveis eventos. A partir dos eventos relacionados que revisão você faria na categorização? </li>
                                        </ul>
                                    </div>
                                </div></p>
                                </div>




                            <br><br>

                            <!-- BOTÕES DE NAVEGAÇÃO -->
                            <div class="text-center">
                                <a href="./index.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                                <a href="./topico 02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
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
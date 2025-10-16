<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daniel Informática</title>

    <!-- meta seo --> 
     <meta name="description" content="Daniel Informática, Serviços em Informática, Atendimento em Brasilândia de Minas-MG">
     <meta name="keywords" content="Daniel Informática, Brasilândia de Minas-MG, Serviços em Informática, Desenvolvimento Web, Programação Web, Manutenção, Formatação, Limpeza, Computadores, Impressoras, Notebooks">

     <!-- link css --> 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- link google fonts --> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <div class="center">
            <div class="logo left"><a href="index.php">Daniel</a><br><div class="sublogo left"><a href="index.php">Informática</a></div></div>
            <nav class="desktop right">
                <ul>
                    <li><a href="index.php">Principal</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>                
                <ul>
                    <li><a href="index.php">Principal</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!-- center -->
    </header><!-- menu desktop e mobile -->


    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form>
                <h2>Qual o seu melhor e-mail ?</h2>
                <input type="email" name="email" required />
                <input type="submit" name="acao" value="Cadastrar!">
            </form>
        </div><!-- center -->
    </section><!-- banner-principal -->


    <section class="nossos-serviços">
        <div class="center">
            <h2 class="titulo-nossos-serviços">Nossos Serviços</h2>
            <!-- <p class="descricao-nossos-serviços">Trabalhamos com Informática há 15 anos.<br>Sempre prezando pela Qualidade, Compromisso e Respeito com os nossos clientes.</p> -->
            <div class="w25 left">
                <h3 class="item-nossos-serviços">Desenvolvimento de Sistemas</h3>
            </div>
            <div class="w25 left">
                <h3 class="item-nossos-serviços">Loja de Informática</h3>
            </div>
            <div class="w25 left">
                <h3 class="item-nossos-serviços">Assistência Técnica de Informática</h3>
            </div>
            <div class="w25 left">
                <h3 class="item-nossos-serviços">Assistência Técnica de Eletrônicos em Geral</h3>
                <!-- <button class="btn-saiba-mais-nossos-serviços">Saiba mais</button> -->
            </div>
            <div class="clear"></div>
        </div>
    </section>


    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3 class="icone"><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h3 class="tech-skill">CSS3</h3>
            </div><!-- box-especialidade -->
            <div class="w33 left box-especialidade">
                <h3 class="icone"><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h3 class="tech-skill">HTML5</h3>
            </div><!-- box-especialidade -->
            <div class="w33 left box-especialidade">
                <h3 class="icone"><i class="fa fa-code" aria-hidden="true"></i></h3>
                <h3 class="tech-skill">JavaScript</h3>
            </div><!-- box-especialidade -->
            <div class="w33 left box-especialidade">
                <h3 class="icone"><i class="fa fa-code" aria-hidden="true"></i></h3>
                <h3 class="tech-skill">PHP</h3>
            </div><!-- box-especialidade -->
            <div class="w33 left box-especialidade">
                <h3 class="icone"><i class="fa fa-code" aria-hidden="true"></i></h3>
                <h3 class="tech-skill">Laravel</h3>
            </div><!-- box-especialidade -->
            <div class="w33 left box-especialidade">
                <h3 class="icone"><i class="fa fa-code" aria-hidden="true"></i></h3>
                <h3 class="tech-skill">JQuery</h3>
            </div><!-- box-especialidade -->
            <div class="clear"></div><!-- uso do "clear" pq tem flutuação -->
        </div><!-- center -->
    </section><!-- especialidades -->


    <section class="extras">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="depoimentos-title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                    <p class="nome-autor">Nome do Autor</p>
                </div><!-- depoimento-single -->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                    <p class="nome-autor">Lorem Ipsum.</p>
                </div><!-- depoimento-single -->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                    <p class="nome-autor">Lorem Ipsum.</p>
                </div><!-- depoimento-single -->
            </div><!-- w50 -->

            <div class="w50 left servicos-container">
                <h2 class="servicos-title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Desenvolvimento de Sites.</li>
                        <li>Manutenção Avançada de Eletrônicos e Eletrodomésticos (Smartphones, Computadores, Notebooks, Consoles, Impressoras, etc).</li>
                        <li>Consultoria especializada em Infraestrutura de Redes cabeadas e Wi-Fi.</li>
                    </ul>
                </div>

            </div><!-- w50 -->
            <div class="clear"></div>
        </div><!-- center -->
    </section><!-- extras -->



        <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Sobre nós</h2>
                <p>Opa, jóia? Sou o Daniel.</p>
                <p>Venho trabalhando com Informática e Tecnologia da Informação há 15 anos. Nesse período tive o privilégio de trabalhar em diversos segmentos da Informática.<br>E é com essa experiência e comprometimento que fornecemos nossos serviços a você, cliente amigo.<br>Logo abaixo você encontra nosso Whatsapp e Redes Sociais, aguardo o seu contato.</p>
            </div><!--w50-->

            <div class="w50 left">
                <img class="right" src="assets/images/daniel.jpg" alt="">
            </div><!--w50-->
            <div class="clear"></div>
        </div><!-- center -->
    </section><!-- descricao-autor -->


    <section class="contato">
        <div class="center">
            <h2>Contatos</h2>
            
        </div>
    </section>


    <footer>
        <h3 class="rodape-title">Daniel Informática</h3>
        <p>Todos os Direitos Reservados &copy; <?php echo date('Y'); ?></p>
    </footer>


    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/script.js"></script>


</body>
</html>
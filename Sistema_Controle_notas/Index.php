<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Tiago Henrique, Yasmin Farias, Nyelson Gomes, Renan Oliveira, Ramon Portela, Roberto Souza" /> 
  	<meta name="keywords" content="faculdade, alunos, home" />
  	<meta name="description" content="Sistema de Gestão Acadêmica, Avaliações e Administração de Curso em uma Instituição." />
    <title>Sistema de Controle de Notas - HOME</title>
    <link rel="stylesheet" type="text/css" href="includes/design/estilo.css" />
    
    <script type="text/javascript" src="includes/js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="includes/js/funcoes.js" charset="iso-8859-1"></script>
    
    <style type="text/css">
		#div-imagem-topo {
			width: 960px;
			margin:0 auto;
			padding: 5px 0px 5px 0px;
		}
		
		.div-conteudo-conteiner {
			width: 940px;
			margin:0 auto;
			border-radius:4px;
			background-color: #0E538C;
			height: 200px;
			margin-bottom: 5px;
			padding: 0px 10px 5px 10px;
			border: solid 1px #06233B;
		}
		
		.div-conteudo-titulo {
			padding: 20px 0px 20px 30px;
			color: #B9BFE0;
			margin-bottom: 10px;
			border-radius: 2px;
			box-shadow: 3px 3px 3px 0 #0B0D2E;
		}
		
		.div-conteudo-saibaMais a {
			text-decoration: none;
			color: #6EA6B2;
			float: right;
			padding: 5px 0px 0px 0px;
		}
		
		.div-conteudo-saibaMais a:hover {
			text-decoration: underline;
			color: #B9BFE0;
		}
		
		.div-conteudo-texto {color: white;}
	</style>
</head>

<body>
	<header id="header">
        <div id="div-logo">
            <a title="Irá para a Home do Site" href="index.php"><img src="images/logo1.png" alt="Logo do Sistema de Gestão Acadêmica" width="320" height="116" border="0" /></a>
        </div> <!-- div-titulo -->
        
        <div id="div-container-usuario">
            <div id="div-logarNoSite">
                <span>Bem-Vindo ao SGA:</span>
                <a title="Irá para a Página de Login" href="Login.php">Logar-se no Site</a>
            </div> <!-- div-logarNoSite -->
            <div id="div-cadastrarNoSite">
            	<span>Aluno Novo?</span>
            	<a title="Irá para a Página de Cadastro" href="Cadastro.php">Cadastre-se Aqui</a>
            </div> <!-- div-cadastrarNoSite -->
        </div> <!-- div-container-usuario -->
           
    </header>
    <nav id="nav-principal">
    	<div id="div-menu-principal">
            <ul>
                <li><a href="Index.php" title="Clique Aqui para Acessar a Página Inicial">Home</a></li>
                <li><a href="#" title="Clique Aqui para Conhecer a Graduação">Graduação</a>
                	<ul>
                        <li><a href="#" title="Clique Aqui para Detalhes da Graduação de Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Graduação de Engenharia de Computação, com ênfase em Software">Engenharia de Computação, com ênfase em Software</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Graduação de Gestão da Tecnologia da Informação">Gestão da Tecnologia da Informação</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Graduação de Sistemas de Informação">Sistemas de Informação</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Graduação de Redes de Computadores">Redes de Computadores</a></li>
                    </ul>
                </li>
                <li><a href="#" title="Clique Aqui para Conhecer a Pós-Graduação">Pós-Graduação</a>
                    <ul>
                        <li><a href="#" title="Clique Aqui para Detalhes da Pós-Graduação: MIT em Arquitetura de Software">MIT em Arquitetura de Software</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Pós-Graduação: MIT em Big Data">MIT em Big Data</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Pós-Graduação: MIT em Cloud Computing">MIT em Cloud Computing</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Pós-Graduação: MIT em Desenvolvimento Mobile">MIT em Desenvolvimento Mobile</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Pós-Graduação: MIT em Engenharia de Redes">MIT em Engenharia de Redes</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Pós-Graduação: MIT em Gestão de Bancos de Dados com Oracle">MIT em Gestão de Bancos de Dados com Oracle</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Pós-Graduação: MIT em Engenharia de Software com Java">MIT em Engenharia de Software com Java</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes da Pós-Graduação: MIT em Engenharia de Software com .NET">MIT em Engenharia de Software com .NET</a></li>
                    </ul>
                </li>
                <li><a href="#" title="Clique Aqui para Conhecer os Cursos Intensivos">Intensivo</a>
                	<ul>
                        <li><a href="#" title="Clique Aqui para Detalhes do Curso de WebDesigner">WebDesigner</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes do Curso de Marketing Digital">Marketing Digital</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes do Curso de WebMaster">WebMaster</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes do Curso de Gestor de TI">Gestor de TI</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes do Curso de Desenvolvedor Android">Desenvolvedor Android</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes do Curso de MCSD Web Applications .NET">MCSD Web Applications .NET</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes do Curso de DBA Oracle">DBA Oracle</a></li>
                        <li><a href="#" title="Clique Aqui para Detalhes do Curso de MCSD Web Applications .NET">MCSD Web Applications .NET</a></li>
                    </ul>
                </li>
                <li><a href="Sobre.php" title="Sobre o Sistema de Controle de Notas">Sobre</a></li>
                <li><a href="mailto:tiago.hsilva@al.infnet.edu.br" title="Entre em Contato Conosco">Contato</a></li>
            </ul>
        </div> <!-- div-menu-principal -->
        <div id="div-pesquisa">
        	<label>
                <input type="text" id="campo-pesquisa" name="pesquisa" placeholder="Faça a Sua Busca" />
        		<input type="button" id="btn-pesquisa" value="Pesquisar" />
            </label>
        </div> <!-- div-pesquisa -->
    </nav>
    
    <section id="section-corpo">
		<div id="div-imagem-topo">
        	<a title="Irá para a Home do Site" href="index.php"><img src="conteudo/imagem-topo.jpg" alt="Logo do Sistema de Controle de Notas" width="960" height="400" border="0" /></a>
        </div> <!-- div-imagem-topo -->
        
        <div class="div-conteudo-conteiner">
            <div class="div-conteudo-titulo">
                <span>Graduação em Engenharia de Computação</span>
            </div> <!-- div-conteudo-titulo -->
            <div class="div-conteudo-texto">
            	<span>A Graduação em Engenharia de Computação forma profissionais com uma visão sistêmica das fases do processo de desenvolvimento de software, desde a concepção, passando pela análise, desenho da solução, implementação e testes. O currículo do curso atende aos conteúdos do núcleo básico da Engenharia e foi projetado para permitir que o aluno – mesmo sem experiência profissional – possa ingressar imediatamente no mercado de trabalho em posições valorizadas, sejam elas técnicas ou gerenciais. Isso é possível por meio do desenvolvimento de competências-chave de alta demanda no mercado.</span>
            </div> <!-- div-conteudo-texto -->
            <div class="div-conteudo-saibaMais">
            	<a title="Irá para a Home do Site" href="index.php">Saiba Mais</a>
            </div> <!-- div-conteudo-saibaMais -->
        </div> <!-- div-conteudo-conteiner -->
        
        <div class="div-conteudo-conteiner">
            <div class="div-conteudo-titulo">
                <span>MIT em Engenharia de Software com Java</span>
            </div> <!-- div-conteudo-titulo -->
            <div class="div-conteudo-texto">
            	<span>A Pós-Graduação MIT (Master in Information Technology) em Engenharia de Software com Java capacita os alunos para desenvolver software de qualidade na linguagem Java. Ao final do curso, com seu esforço e dedicação, os alunos estão prontos para fazer as certificações Oracle Certified Associate (OCA) Java SE 7 Programmer, Oracle Certified Professional (OCP) Java SE 7 Programmer, Java EE 6 Web Component Developer Certified Expert Exam (OCE) e Java EE 6 Enterprise JavaBeans Developer Certified Expert Exam (OCE).</span>
            </div> <!-- div-conteudo-texto -->
            <div class="div-conteudo-saibaMais">
            	<a title="Irá para a Home do Site" href="index.php">Saiba Mais</a>
            </div> <!-- div-conteudo-saibaMais -->
        </div> <!-- div-conteudo-conteiner -->
        
    </section>
    
    <footer id="footer">
        <div id="div-footer-logo">
            <a title="Irá para a Home do Site" href="index.php"><img src="images/logo-footer.png" alt="Logo do Sistema de Controle de Notas" width="180" height="116" border="0" /></a>
        </div> <!-- div-footer-logo -->
        
        <div id="div-footer-Institucional">
            <div class="div-footer-titulo">
                <span>Institucional<span>
            </div> <!-- div-footer-titulo -->
            <ul>
                <li><a href="#" title="Clique Aqui para Acessar a Página Inicial">Home</a></li>
                <li><a href="#" title="Clique Aqui para Conhecer a Graduação">Graduação</a></li>
                <li><a href="#" title="Clique Aqui para Conhecer a Pós-Graduação">Pós-Graduação</a></li>
                <li><a href="#" title="Clique Aqui para Conhecer os Cursos Intensivos">Intensivo</a></li>
                <li><a href="#" title="Sobre o Sistema de Controle de Notas">Sobre</a></li>
                <li><a href="mailto:tiago.hsilva@al.infnet.edu.br" title="Entre em Contato Conosco">Contato</a></li>
            </ul>   
        </div> <!-- div-footer-Institucional -->
        
        <div id="div-footer-Siga-nos">
        	<div class="div-footer-titulo">
            	<span>Siga-nos</span>
            </div> <!-- div-footer-titulo -->
            <ul>
                <li><a href="#" title="Siga-nos no Google+">Google</a></li>
                <li><a href="#" title="Siga-nos no Linkedin">Linkedin</a></li>
                <li><a href="#" title="Siga-nos no Twitter">Twitter</a></li>
                <li><a href="#" title="Siga-nos no Facebook">Facebook</a></li>
            </ul>  
        </div> <!-- div-footer-Siga-nos -->
        
        <div id="div-copyRight">
    		<span>Sistema de Controle de Notas | Todos os direitos reservados - © 2015</span>
        </div> <!-- div-copyRight -->
    </footer>
</body>
</html>

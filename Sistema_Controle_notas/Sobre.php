<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Tiago Henrique, Yasmin Farias, Nyelson Gomes, Renan Oliveira, Ramon Portela, Roberto Souza" /> 
  	<meta name="keywords" content="faculdade, alunos, home" />
  	<meta name="description" content="Sistema de Gestão Acadêmica, Avaliações e Administração de Curso em uma Instituição." />
    <title>Sobre o SGA: Sistema de Gestão Acadêmica</title>
    <link rel="stylesheet" type="text/css" href="includes/design/estilo.css" />
    
    <script type="text/javascript" src="includes/js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="includes/js/funcoes.js" charset="iso-8859-1"></script>
    
    <style type="text/css">
		#section-corpo {height: 860px;}
		#section-corpo hr {width: 950px;}
		
		#div-imagem-sobre {
			width: 920px;
			margin:0 auto;
			padding: 10px 0px 0px 0px;
		}
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
		<div class="div-sobre-titulo">
        	<h1>Sobre o SGA - Sistema de Gestão Acadêmica</h1>
        </div> <!-- div-sobre-titulo -->
        <hr>
        <div class="div-sobre-conteudo">
        	<p>O SGA - Sistema de Gestão Acadêmica disponibiliza aos estudantes da Instituição um Ambiente completo para se gerenciar suas notas e realizar avaliações.<br/>Além disso, oferece um sistema completo para os Administradores do curso associar cursos, turmas, professores e afins as determinadas Turmas Acadêmicas.</p>
        </div> <!-- div-sobre-conteudo -->
        <hr>
        <div class="div-sobre-titulo">
        	<h3>Sobre o Instituto</h3>
        </div> <!-- div-sobre-titulo -->
        <div id="div-imagem-sobre">
        	<a title="" href="Sobre.php"><img src="conteudo/imagem-sobre.jpg" alt="Imagem Técnologia - Sobre" width="920" height="350" border="0" /></a>
        </div> <!-- div-imagem-sobre -->
        <hr>
        <div class="div-sobre-conteudo">
        	<p>Em 1994, a internet deixou de ser restrita ao meio acadêmico no Brasil. No mesmo ano, nasceu o Instituto, como  uma escola de tecnologias da internet.<br/>
Com o passar dos anos, as empresas foram progressivamente substituindo tecnologias da informação anteriores pelas tecnologias da internet. As redes locais de computadores, passaram a utilizar como seu protocolo o TCP/IP, o protocolo da rede internet.  Cada vez mais softwares passaram a ser desenvolvidos em arquitetura web, usando um ''browser'' como suporte de interface para o usuário final.<br/>
O crescimento dessas tecnologias foi acompanhado pelo do Instituto de forma natural, que, cada vez mais, formava profissionais de TI (Tecnologia da Informação), e não apenas “profissionais internet”. Paralelamente, docentes empreendiam programas em outras áreas tradicionais da TI, tais como sistemas operacionais, bancos de dados e engenharia de software.<br/>
Em 12 de dezembro de 2006, recebendo aprovação pelo Ministério da Educação com nota máxima tanto para seu corpo docente como para sua infraestrutura, o Instituto fundou a Escola Superior da Tecnologia da Informação.</p> 
        </div> <!-- div-sobre-conteudo -->
        <hr>
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
    		<span>Sistema de Gestão Acadêmica | Todos os direitos reservados - © 2015</span>
    </div> <!-- div-copyRight -->
    </footer>
</body>
</html>

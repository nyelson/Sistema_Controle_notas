<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Tiago Henrique, Yasmin Farias, Nyelson Gomes, Renan Oliveira, Ramon Portela, Roberto Souza" /> 
  	<meta name="keywords" content="notas, faculdade, alunos" />
  	<meta name="description" content="Descrição do site" />
    <title>Sistema de Controle de Notas - HOME</title>
    <link rel="stylesheet" type="text/css" href="includes/design/estilo.css" />
    
    <script type="text/javascript" src="includes/js/jquery-1.11.2.js"></script>
    <script type="text/javascript" src="includes/js/funcoes.js" charset="iso-8859-1"></script>
    
    <style type="text/css">
		
		p{margin-left: 45px;}
		
		input  {
			color: #616475;
			border-radius: 2px;
			border:solid 1px #999999;
		}
		
		#quadro-login{
			border: 2px solid #000099;
			border-radius: 50px;
			margin-top: 9%;
			margin-left: 38%;
			width: 345px;
			height: 305px;
		}
		
		#div-logo{
			padding-left: 27%;
			paddin-top: 10%;
			margin-top: 11px;
		}
		
		#footer{margin-top: 50px;}
		
		#div-form{padding-left: 30%;}
		
		#div-senha{margin-top: 9px;}
		
		#div-botao input {padding: 5px 10px 5px 10px}
		
		#footer{margin-top: 13%;}
		
		#div-botao{
			padding-top: 30px;
			padding-left: 32px;
		}
	</style>
</head>

<body>
	<section id="quadro-login">
    	<div id="div-logo">
        <a href="Index.php">
        	<img id="logo-sistema" alt="logo do sistema com link que irá para a pagina inicial" src="images/logo-login.png" width="160" height="100">
        </a>
        </div>
        <div id="div-form">
        	<form id="formulario-login" action="Entrar.php" method="post">
            	<div id="div-usuario">
                    <p>Usuário</p>
                    <input type="text" id="usuario" name="usuario" autofocus="autofocus" autocomplete="off">
            	</div>
                <div id="div-senha">
                    <p> Senha</p>
                    <input type="password" id="senha" name="senha">
                    <div id="div-botao">
                    	<input type="submit" id="btn-logar" value="Entrar">
            		</div>
                </div>
            </form>
        </div>
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
                <li><a href="Index.php" title="Clique Aqui para Acessar a Página Inicial">Home</a></li>
                <li><a href="#" title="Clique Aqui para Conhecer a Graduação">Graduação</a></li>
                <li><a href="#" title="Clique Aqui para Conhecer a Pós-Graduação">Pós-Graduação</a></li>
                <li><a href="#" title="Clique Aqui para Conhecer os Cursos Intensivos">Intensivo</a></li>
                <li><a href="Sobre.php" title="Sobre o Sistema de Controle de Notas">Sobre</a></li>
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

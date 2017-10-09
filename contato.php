<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1, shrink-to-fit=no" />
	<meta name="author" content="U9 SystemFox Web" />
	<link rel="icon" href="imagens/favicon.ico">
	
	<title>SystemFox</title>
	
	<!-- Css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/gsdk.css" />
	<link rel="stylesheet" href="css/style.css" />
	
	<!--     Font Awesome     -->
    <link  rel="stylesheet" href="fonts/font-awesome.css">
	<link  rel="stylesheet" href="fonts/verlag-book.css">
	
	<!-- Jquery -->
	<script src="js/jquery.min.js"></script>
	
  </head>

  <body>
	
	<!-- Navbar / Barra de Navegação -->
		
	<?php include_once "estrutura/navbar.php"; ?>
	
	<!-- Content / Conteúdo -->
	
	<div class="banner">
	<img src="assets/img/contato-banner.jpg" alt="Contato">
	</div>
	
	<div class="container">
		<div class="row">
		
			<h2> Contato </h2>
			<div class="separator-container">
				<div class="separator line-separator"> ∎ </div>
			</div>
			
			<h3 class="sub-titulo"> Nos envie uma mensagem para solicitar um orçamento, tirar dúvidas ou nos dar sugestões :) </h3>
			
				<form class="form-horizontal" action="" method="post" name="dados" onSubmit="return enviardados();">
				  <div class="form-group">
					<label for="inputNome" class="col-sm-2 control-label">Nome *</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" name="tx_nome" id="inputNome" placeholder="Nome" >
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="inputTelefone" class="col-sm-2 control-label">Telefone *</label>
					<div class="col-sm-4">
					  <input type="number" class="form-control" name="tx_telefone" id="inputTelefone" placeholder="Telefone" >
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="inputEmail" class="col-sm-2 control-label">Email *</label>
					<div class="col-sm-4">
					  <input type="email" class="form-control" name="tx_email" id="inputEmail" placeholder="Email" >
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="inputAssunto" class="col-sm-2 control-label">Assunto *</label>
					<div class="col-sm-4">
					  <input type="text" class="form-control" name="tx_assunto" id="inputAssunto" placeholder="Assunto" >
					</div>
				  </div>
				  
				  <div class="form-group">
					<label for="inputMensagem" class="col-sm-2 control-label">Mensagem *</label>
					<div class="col-sm-4">
					  <textarea class="form-control" name="tx_mensagem" id="inputMensagem"> </textarea>
					</div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <input class="btn btn-success" name="submit" type="submit" value="Enviar">
					</div>
				  </div>
				</form>
			
		</div>
	</div>
	
	<!-- Footer / Rodapé -->
	
	<footer>
	<?php include_once "estrutura/footer.php"; ?>
	</footer>
	
	
	<!-- Scripts -->

	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- Validação Formulário -->
	
	<script language="JavaScript" >
		function enviardados(){
		 
		if(document.dados.tx_nome.value=="" || document.dados.tx_nome.value.length < 3)
		{
		alert( "Preencha o campo NOME corretamente!" );
		document.dados.tx_nome.focus();
		return false;
		}
		
		if(document.dados.tx_telefone.value=="" || document.dados.tx_telefone.value.length < 8)
		{
		alert( "Preencha o campo TELEFONE corretamente!" );
		document.dados.tx_telefone.focus();
		return false;
		}
		 
		if( document.dados.tx_email.value=="" || document.dados.tx_email.value.indexOf('@')==-1 || document.dados.tx_email.value.indexOf('.')==-1 )
		{
		alert( "Preencha o campo E-MAIL corretamente!" );
		document.dados.tx_email.focus();
		return false;
		}
		
		if (document.dados.tx_assunto.value=="")
		{
		alert( "Preencha o campo Assunto!" );
		document.dados.tx_assunto.focus();
		return false;
		}
		 
		if (document.dados.tx_mensagem.value=="")
		{
		alert( "Preencha o campo MENSAGEM!" );
		document.dados.tx_mensagem.focus();
		return false;
		}
		 
		if (document.dados.tx_mensagem.value.length < 20 )
		{
		alert( "É necessario preencher o campo MENSAGEM com mais de 20 caracteres!" );
		document.dados.tx_mensagem.focus();
		return false;
		}
		 
		return true;
		}
		 
	</script>

  </body>
  
 </html>
<html>
	<head>
		<meta charset = "UTF-8"/>
		<title> </title>
		<link rel = "stylesheet" type = "text/css" href = "exec.css"/>
		<link rel="stylesheet" type="text/css" href="slide_css.css"/>
	</head>
	<body>
		<div id ="wrapper">
			<div id = "header">
			
			
			
			</div><!--/header-->
			
			
			<div id ="menu">
				<ul class="drop_menu">
					<li><a href ="Home.php">HOME </a></li>
					<li><a href ="camisetas.php">Camisetas </a>
						
					</li>
					<li><a href ="acessorios.html">Acessorios </a>

					</li>
					<li><a href ="contato.php">Contato </a></li>
				
				</ul>
				
				
			</div><!--/nav-->
			<div id = "content">
				<BR>
				<BR>
				<BR>
				<BR>
				<BR>			
			
				<div class="box">
				
					<form method = "post" action = "caixatexto.php">
					Nome: <input type= "text" size= "30"
									name= "txtNome">
					
					<br>
					<br>
					Digite seu e-mail: <input type="text"  name="email"/>
					<br>
					<br>		
					
					<input type="radio" name="sex" value="masculino"> Masculino

					<input type="radio" name="sex" value="feminino"> Feminino			
					<br>
					<br>
					Assunto :<input type="textarea" class="input_text" name="assunto"/>
					<br>
					<br>		
					Sugestão:
					<br>
			
					<textarea class="message" name="feedback" ></textarea> 
					
					<br>
					<br>
					<input type= submit value= "Enviar">
					<br>
				</div>
			
			
			</div><!--/content-->
			
			<div id = "sidebar">
				
			
			

			
			</div><!--/sidebar-->
			
			<div id = "footer">
				<br>
			
			
			</div><!--/footer-->

		</div><!-- / wrapper -->
	</body>
</html>
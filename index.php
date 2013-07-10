<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<?php require_once 'classes/mundo.class.php'; require_once 'classes/personagem.class.php';?>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
	<title>RPG Word</title>
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/index.css" />
	<link rel="stylesheet" href="css/custom.css" />
	<script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>

<div class="row">
	<div class="large-9 columns">
		<div class="panel">
				<?php
				$mundo = new Mundo();
				echo $mundo->menu();
				echo utf8_encode('Área: '.$mundo->area().'mº <br /><br />');
				?>
		</div>
	</div>	
	
	<div class="large-3 columns">
		<div class="panel">
			<h1 align="center">MAP World</h1>
			
		</div>	
	</div>	
</div>
	

<div class="row">
		<div class="large-12 columns">
			<div class="panel">
			<?php 
				//echo 'Personagem'.$elemento->nome.' na coordenada '.$elemento->posicao_atual().'<br />';	
				
				if(isset($_GET['p'])):
					$p = $_GET['p'];
					echo 'Comando: '.$p.'<br />';
					$elemento = new Personagem("Maickon", 1, 1, $mundo->personagem[0]);
					$mundo->movimento($p,$elemento);
				else:
					$p = '';
					$elemento = new Personagem("Maickon", 2, 2, $mundo->personagem[0]);
					$elemento->inicializa_x();
					$elemento->inicializa_y();
					$mundo->movimento($p, $elemento);
				endif;
				
				print $mundo->visualizar_sala();
			?>
			</div>
		</div>
</div>			
	<script>
		document.write('<script src=' +
		('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
		'.js><\/script>')									
	</script>
  
  <script src="js/foundation.min.js"></script>
  <!---->
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
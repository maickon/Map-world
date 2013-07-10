<?php

class Mundo{
	
	public $espaco;
	public $grama = "<img src='land/2.png' />";
	public $parede_nat = array("<img src='land/43.png' class='b_e' />",		//0
							   "<img src='land/41.png' class='b_i'/>",		//1
							   "<img src='land/37.png' class='q_s_e' />",	//2
							   "<img src='land/44.png' class='b_s' />",		//3
							   "<img src='land/38.png' class='q_s_d'/>",	//4
							   "<img src='land/42.png' class='b_d'/>",		//5
							   "<img src='land/40.png' class='q_i_e'/>",	//6
							   "<img src='land/39.png' class='q_i_d'/>");	//7
	
	public $agua = "<img src='land/49.png' />";
	public $personagem = array("<img src='characters/guerreiro.png' />","<img src='characters/guerreiro.png' />");
	
	function __construct(){
		//Matriz 18x10
		//2 - grama
		//3 - parede
		//1 - agua
		$this->espaco = array(
						array($this->parede_nat[2],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[3],$this->parede_nat[4]),
						array($this->parede_nat[0],$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->parede_nat[5]),
						array($this->parede_nat[0],$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->parede_nat[5]),
						array($this->parede_nat[0],$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->parede_nat[5]),
						array($this->parede_nat[0],$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->parede_nat[5]),
						array($this->parede_nat[0],$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->parede_nat[5]),
						array($this->parede_nat[0],$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->parede_nat[5]),
						array($this->parede_nat[0],$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->parede_nat[5]),
						array($this->parede_nat[0],$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->grama,$this->parede_nat[5]),
						array($this->parede_nat[6],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[1],$this->parede_nat[7]),						
					 );
					 
		/*
		 * primeira e ultima coluna invalida 
		 * primeira e ultima linha invalida
		 * 
		 */			 
	}				

	function visualizar_sala(){
		
			for($yIndex = 0; $yIndex < count($this->espaco); $yIndex++){
				
				for($xIndex = 0; $xIndex < count($this->espaco[$yIndex]); $xIndex++){
					
					print $this->espaco[$yIndex][$xIndex];
				}
				echo "<br />";
			} 
		
			 
	}
	
	
	function inserir_elemento($personagem){
		$inserido = 0;
		for($yIndex = 0; $yIndex < count($this->espaco); $yIndex++){
				for($xIndex = 0; $xIndex < count($this->espaco[$yIndex]); $xIndex++){
					if($this->espaco[$yIndex][$xIndex] == "<img src='2.png' />" and $inserido == 0){
							$this->espaco[$yIndex][$xIndex] = $personagem;
							$posicao = $this->espaco[$yIndex][$xIndex];
							//print $elemento->posicao;
							$inserido = 1;
						}						
				}
			} 
		}
	
	function area(){
		$area = 0;
		for($yIndex = 0; $yIndex < count($this->espaco); $yIndex++):
				for($xIndex = 0; $xIndex < count($this->espaco[$yIndex]); $xIndex++):
					$area = $area + 1.5;
				endfor;
		endfor;
		return $area;			
	}
	function inserir_elemento_por_coordenada(Personagem $personagem){
		if(($personagem->x > 10 || $personagem->x < 1) || ($personagem->y > 16 || $personagem->y < 1)):
			echo 'Entrada invalida !';
			exit();
		else:
			$inserido = 0;
			for($yIndex = 0; $yIndex < count($this->espaco); $yIndex++):
					for($xIndex = 0; $xIndex < count($this->espaco[$yIndex]); $xIndex++):
						if($this->espaco[$yIndex][$xIndex] == $this->espaco[$personagem->x-1][$personagem->y-1] and $inserido == 0):
							if($this->espaco[$personagem->x-1][$personagem->y-1] == $this->personagem[0]):
								echo 'Este espaço está acupado !';
								exit();
							else:	
								$this->espaco[$personagem->x-1][$personagem->y-1] = $personagem->img;
								//$posicao = $this->espaco[$yIndex][$xIndex];
								//print $posicao;
								$inserido = 1;
							endif;
						endif;						
					endfor;		
			endfor; 
		endif;	
	}
		
	function menu(){
		
		return '
		<ul class="button-group radius">
			<li><a href="index.php?p=cima" 	class="button secondary">Cima</a></li>
			<li><a href="index.php?p=baixo" 	class="button secondary">Baixo</a></li>
			<li><a href="index.php?p=frente" 	class="button secondary">Frente</a></li>
			<li><a href="index.php?p=tras" 	class="button secondary">Tras</a></li>
		</ul>';
	}
	
	function movimento($comando, Personagem $personagem_aux){		
		switch($comando):
			case 'tras':
						$posx = $personagem_aux->retornar_posx();
						$posy = $personagem_aux->retornar_posy(); 
						$x = '('.$posx.')';
						$y = '('.$posy.')';
						$novo_e = new Personagem("maickon", $posx, $posy, "<img src='characters/guerreiro.png' />");
						$novo_e->tras();
						$this->inserir_elemento_por_coordenada($novo_e);
				break;
			case 'baixo':
						$posx = $personagem_aux->retornar_posx();
						$posy = $personagem_aux->retornar_posy(); 
						//echo 'X('.$posx.')---';
						//echo 'Y('.$posy.')';
						$novo_e = new Personagem("maickon", $posx, $posy, "<img src='characters/guerreiro.png' />");
						$novo_e->baixo();
						$this->inserir_elemento_por_coordenada($novo_e);
				break;
			case 'frente':
						$posx = $personagem_aux->retornar_posx();
						$posy = $personagem_aux->retornar_posy(); 
						//echo '('.$posx.')---';
						//echo '('.$posy.')';
						$novo_e = new Personagem("maickon", $posx, $posy, "<img src='characters/guerreiro.png' />");
						$novo_e->frente();
						$this->inserir_elemento_por_coordenada($novo_e);
				break;
			case 'cima':
						$posx = $personagem_aux->retornar_posx();
						$posy = $personagem_aux->retornar_posy(); 
						//echo '('.$posx.')---';
						//echo '('.$posy.')';
						$novo_e = new Personagem("maickon", $posx, $posy, "<img src='characters/guerreiro.png' />");
						$novo_e->cima();
						$this->inserir_elemento_por_coordenada($novo_e);
				break;			
			default:$personagem = new Personagem("Maickon", 2, 2, "<img src='characters/guerreiro.png' />");
					$personagem->x_aux = 1;
					$personagem->y_aux = 1;
					$this->inserir_elemento_por_coordenada($personagem);	
		endswitch;
	}
}


?>
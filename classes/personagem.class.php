<?php

class Personagem{
	public $nome;
	public $x;
	public $y;
	public $img;
	
	function __construct($nome,$x,$y,$img){
		$this->nome = $nome;
		$this->x = $x;
		$this->y = $y;
		$this->img = $img;
	}
	
	function posicao_atual(){
		return $this->x.'x'.$this->y;
	}
	
	function inicializa_x(){
		$arquivo = "pos_x.txt";
		if(!$abrir = fopen($arquivo, "w")):
			echo "Erro abrindo arquivo($arquivo)"; 
			exit; 
		endif;
		
		if(!fwrite($abrir, 1)):
			print "Erro escrevendo no arquivo($arquivo)";
			exit;
		endif; 
		fclose($abrir); 
	}
	function inicializa_y(){	
		$arquivo = "pos_y.txt";
		if(!$abrir = fopen($arquivo, "w")):
			echo "Erro abrindo arquivo($arquivo)"; 
			exit; 
		endif;
		
		if(!fwrite($abrir, 1)):
			print "Erro escrevendo no arquivo($arquivo)";
			exit;
		endif; 
		fclose($abrir);
	}
	function cima(){
		$arquivo = "pos_x.txt";
		if(!$abrir = fopen($arquivo, "w")):
			echo "Erro abrindo arquivo($arquivo)"; 
			exit; 
		endif;
		// diminuir o X faz o personagem subir (-x sobe)
		if(($this->x-1)<2 || ($this->x-1) >9):
			$this->x = $this->x;
		else:	
			$this->x = $this->x-1;
		endif;
		if(!fwrite($abrir, $this->x)):
			print "Erro escrevendo no arquivo($arquivo)";
			exit;
		endif; 
		fclose($abrir); 
	}
	
	function baixo(){
		$arquivo = "pos_x.txt";
		if(!$abrir = fopen($arquivo, "w")):
			echo "Erro abrindo arquivo($arquivo)"; 
			exit; 
		endif;
		// aumentar o X faz descer o personagem (+x desce)
		if(($this->x+1)<1 || ($this->x+1) >9):
			$this->x = $this->x;
		else:
			$this->x = $this->x+1;
		endif;
		if(!fwrite($abrir, $this->x)):
			print "Erro escrevendo no arquivo($arquivo)";
			exit;
		endif; 
		fclose($abrir); 
	}
	
	function frente(){
		$arquivo = "pos_y.txt";
		if(!$abrir = fopen($arquivo, "w")):
			echo "Erro abrindo arquivo($arquivo)"; 
			exit; 
		endif;
		if(($this->y+1)<1 || ($this->y+1) >16):
			$this->y = $this->y;
		else:
			$this->y = $this->y+1;
		endif;
		//aumentar o Y faz andar p/ frente
		if(!fwrite($abrir, $this->y)):
			print "Erro escrevendo no arquivo($arquivo)";
			exit;
		endif; 
		fclose($abrir);
	}
	
	function tras(){
		$arquivo = "pos_y.txt";
		if(!$abrir = fopen($arquivo, "w")):
			echo "Erro abrindo arquivo($arquivo)"; 
			exit; 
		endif;
		if(($this->y-1)<2 || ($this->y-1) >16):
			$this->y = $this->y;
		else:
			$this->y = $this->y-1;
		endif;
		//diminuir o Y faz andar p/ tras
		if(!fwrite($abrir, $this->y)):
			print "Erro escrevendo no arquivo($arquivo)";
			exit;
		endif; 
		fclose($abrir);
	}
	function retornar_posy(){
		$file = fopen("pos_y.txt", "r");
		while(!feof($file)):
			$buffer = fgets($file, 4096);
			return $buffer;
		endwhile;
		fclose($file);	
	}
	
	function retornar_posx(){
		$file = fopen("pos_x.txt", "r");
		while(!feof($file)):
			$buffer = fgets($file, 4096);
			return $buffer;
		endwhile;
		fclose($file);	
	}
}
?>
<?php
/************* Escalares **************/
$nome = "Fenrir Fenris";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

$idade = 7;
var_dump($idade);
if(is_integer($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";

$altura = 0.70;
var_dump($altura);
if(is_double($altura)):
    echo "É um double";
else:
    echo "Não é um double";
endif;
echo "<hr>";

$muitoLindo = true;
var_dump($muitoLindo);
if(is_bool($muitoLindo)):
    echo "É um boolean";
else:
    echo "Não é um boolean";
endif;
echo "<hr>";

/************* Compostos **************/

$magic = array("Planicie", "Floresta", "Montanha"
, 100, 34.0, true);
var_dump($magic);
if(is_array($magic)):
    echo "É um array";
else:
    echo "Não é um arrya";
endif;
echo "<hr>";

class Cliente{
    private $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Leonam Sousa");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";
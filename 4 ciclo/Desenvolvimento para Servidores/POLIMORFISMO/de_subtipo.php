<html>
<head>
<title>Online PHP Script Execution</title>
</head>
<body>
<?php
//DE SUBTIPOS
interface Brincavel{
    //PARA MOSTRAR (USAR) A CONSTANTE ABAIXO
    //NAO DEVE SER INSTANCIADO, E SIM
    //CHAMADO COMO MEMBRO DA INTERFACE
    //NAO EH USADO NUNCA COM O $this.
    const NRO_BRINKS_DIA = 3;
    function brincar();
}

abstract class Animal{
    
    public function dormir(){
        echo "ZZZZZZzzzz";
    }
    
    abstract public function emitirSom();
    
}

class Cachorro extends Animal 
               implements Brincavel{
    public function brincar(){
        echo "brincou como dog...";
    }
    
    public function emitirSom(){
        echo "Au Au";
    }
    
}

class Urso extends Animal{
    public function emitirSom(){
        echo "Arrrrrrrrrrrrrrrrgs";
    }
}

class Floresta{
    //$p aceitara qq objeto oriundo
    // de uma classe marcada como
    //extends Animal
    public function perigo(Animal $p){
        $p->emitirSom();
        $p->dormir();
        //$p->brincar(); Nao vale para todos
        //os animais.
    }
    
}

$c = new Cachorro;
$u = new Urso;
$f = new Floresta;
//$f->perigo(5);

echo Brincavel::NRO_BRINKS_DIA;



?>
</body>
</html>
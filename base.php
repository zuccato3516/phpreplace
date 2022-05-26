<?php   
class EjemploClase{
  
  
    private $a;
    private $b;
    private $c;
    private $d;
    private $e;
    private $f;
    private $g;
    private $soyUnArreglo= [];

    //Clase constructora con valores
    public function __construct($A, $B, $C, $D,$E, $F, $G){
        $this->a = $A;
        $this->b = $B;
        $this->c = $C;
        $this->d = $D;
        $this->e = $E;
        $this->f = $F;
        $this->g = $G;
       
    }
    //Get`s de los atributos
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
    public function getC(){
        return $this->c;
    }    
    public function getD(){
        return $this->d;
    }  
    public function getE(){
        return $this->e;
    }  
    public function getF(){
        return $this->f;
    }  
    public function getG(){
        return $this->g;
    } 
    public function getArreglo(){
        return $this->soyUnArreglo;
    }

    //Set`s de los atributos
    public function setA($nuevoA){
         $this->a = $nuevoA;
    }
    public function setB($nuevoB){
          $this->b = $nuevoB;
    } 
    public function setC($nuevoC){
         $this->c = $nuevoC;
    }   
    public function setD($nuevoD){
        $this->d = $nuevoD;
   } 
    public function setE($nuevoE){
        $this->e = $nuevoE;
    } 
    public function setF($nuevoF){
        $this->f = $nuevoF;
    } 
    public function setG($nuevoG){
        $this->g = $nuevoG;
    } 
    public function setArreglo($nuevoArreglo){
        $this->soyUnArreglo = $nuevoArreglo;
    }

}

?>
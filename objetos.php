<?php

//codigoflow.net

class sumar {

    public $x;
    public $y;

    function __construct($x, $y) {  //Constructor
        $this->x = $x;
        $this->y = $y;
    }

    function sum() {
        return $this->x + $this->y;
    }

    function mult($u, $v) {
        return $u * $v;
    }

}

$ob = new sumar(4, 4); //Intsancio un Objeto de la Clae tipo Suma

echo $ob->sum(), '<br>'; //Obtengo la suma
echo $ob->mult(3, 4);   //Obtengo el producto
?>
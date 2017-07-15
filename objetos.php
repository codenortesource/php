<pre>
&lt;?php
//cn
class sumar {

    public $x;
    public $y;

    function __construct($x, $y) {  //Constructor
        $this-&gt;x = $x;
        $this-&gt;y = $y;
    }

    function sum() {
        return $this-&gt;x + $this-&gt;y;
    }

    function mult($u, $v) {
        return $u * $v;
    }

}

$ob = new sumar(4, 4); //Intsancio un Objeto de la Clae tipo Suma

echo $ob-&gt;sum(), &#039;&lt;br&gt;&#039;; //Obtengo la suma
echo $ob-&gt;mult(3, 4);   //Obtengo el producto
?&gt;

</pre>

 <?php

class Persona {

//cn
    public $nom;
    public $ced;

    function __construct($nom, $ced) {
        $this->nom = $nom;
        $this->ced = $ced;
    }

    function getNom() {
        return $this->nom;
    }

    function getCed() {
        return $this->ced;
    }

    function setNom($nomb) {
        $this->nom = $nomb;
    }

    function setCed($cedu) {
        $this->ced = $cedu;
    }

    function ImprimePersona() {
        return $this->getNom() . ',' . $this->getCed();
    }

}

//defino una 2 clase que herdara 2 atributos de la clase Persona

class Estudiante extends Persona { 

    public $cole;
    public $curs;

    function __construct($nom, $ced, $cole, $curs) {
        parent::__construct($nom, $ced); //heredo los 2 campos.
        $this->cole = $cole;
        $this->curs = $curs;
    }

    function getCole() {
        return $this->cole;
    }

    function getCurs() {
        return $this->curs;
    }

    function ImprimeEstudiante() {
        return $this->ImprimePersona() . ',' . $this->cole . ',' . $this->curs;
    }

}

$est = new Estudiante('Maximo', '1003090212', 'Imbabura', '1 Curso');

echo $est->nom . '<br />';
echo $est->ced . '<br />';
echo $est->cole . '<br />';
echo $est->curs . '<br />';

?>

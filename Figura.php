<?php
include './Forma.php';

abstract class Figura implements Forma{
    private $cor;
    
    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
        return $this;
    }
    abstract public function area();
    abstract public function perimetro();
}

?>

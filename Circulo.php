<?php
include './Figura.php';
class Circulo extends Figura{
    private $raio;
    
    public function getRaio() {
        return $this->raio;
    }

    public function setRaio($raio) {
        $this->raio = $raio;
        return $this;
    }

    public function area() {
        return pi() * pow($this->raio, 2);
    }

    public function perimetro() {
        return 2*$this->raio *  pi();
    }
}

?>

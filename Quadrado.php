<?php
require_once './Figura.php';
class Quadrado extends Figura {

    private $lado;

    public function getLado() {
        return $this->lado;
    }

    public function setLado($lado) {
        $this->lado = $lado;
        return $this;
    }

    public function area() {
        return $this->lado * $this->lado;
    }

    public function perimetro() {
        return $this->lado * 4;
    }

}
?>

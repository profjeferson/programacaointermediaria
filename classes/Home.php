<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author jeferson
 */
class Home extends Animal{
    private $idade;
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }
    public function alimentar() {
        echo "Animal mamifero alimentando-se ";
    }
}

?>

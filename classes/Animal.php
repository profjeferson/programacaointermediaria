<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Animal
 *
 * @author jeferson
 */
class Animal {
    private $especie;
    private $nome;
    public function getEspecie() {
        return $this->especie;
    }

    public function setEspecie($especie) {
        $this->especie = $especie;
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }
    
    public function alimentar(){
        echo 'Animal alimentando-se';
    }


}

?>

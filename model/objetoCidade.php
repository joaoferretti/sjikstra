<?php

class cidade {

    private $codigo;
    private $descricao;
    private $destinos = [];

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($iCodigo) {
        $this->codigo = $iCodigo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($sDescricao) {
        $this->descricao = $sDescricao;
    }

    public function getDestinos() {
        return $this->destinos;
    }

    public function setDestinos($aDestinos) {
        $this->destinos = $aDestinos;
    }

}
?>
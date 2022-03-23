<?php
class IMP{
    public function calcula(Orcamento $orcamento){
        return $orcamento->getValor() * 0.3;
    }
}
?>
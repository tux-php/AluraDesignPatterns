<?php
abstract class TemplateDeImpostoCondicional implements IImposto
{
    public final function calcula(Orcamento $orcamento)
    {
        if ($this->DeveUsarOMaximo($orcamento)) {
            return $this->taxacaoMaxima($orcamento);
        } else {
            return $this->taxacaoMinima($orcamento);
        }
    }

    public abstract function DeveUsarOMaximo($orcamento);

    public abstract function taxacaoMinima($orcamento);

    protected abstract function taxacaoMaxima($orcamento);
}

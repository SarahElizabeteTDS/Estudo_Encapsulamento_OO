<?php

class Liquidificador
{
    //atributos
    private $cor;
    private $marca;
    private $voltagem;
    private $capacidade;

    public function __construct($cor, $marca, $voltagem, $capacidade)
    {
        $this->cor = $cor;
        $this->marca = $marca;
        $this->voltagem = $voltagem;
        $this->capacidade = $capacidade;
    }

    //metodos
    function ligar()
    {
        print "Ligado!\n";
        $this->girarMotor();
    }

    function desligar()
    {
        print "Desligado!\n";
        $this->pararMotor();
    }
    
    function inverter()
    {
        print "Invertido!\n";
    }

    private function girarMotor()
    {
        print "Girando!\n";
    }

    private function pararMotor()
    {
        print "Parado!\n";
    }

    //GETs e SETs
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }
}

//programa principal

$liq = new Liquidificador("Vermelho", "Eletrolux", "220V", "2L");

$liq->ligar();
$liq->inverter();
$liq->desligar();

print "A cor do liquidificador é: " . $liq->getCor() . "\n";

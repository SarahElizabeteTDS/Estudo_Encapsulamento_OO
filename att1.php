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
    
    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor): self
    {
        $this->cor = $cor;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca): self
    {
        $this->marca = $marca;

        return $this;
    }

    public function getVoltagem()
    {
        return $this->voltagem;
    }

    public function setVoltagem($voltagem): self
    {
        $this->voltagem = $voltagem;

        return $this;
    }

    public function getCapacidade()
    {
        return $this->capacidade;
    }

    public function setCapacidade($capacidade): self
    {
        $this->capacidade = $capacidade;

        return $this;
    }
}

//programa principal

$liq = new Liquidificador("Vermelho", "Eletrolux", "220V", "2L");

$liq->ligar();
$liq->inverter();
$liq->desligar();

print "A cor do liquidificador é: " . $liq->getCor() . "\n";

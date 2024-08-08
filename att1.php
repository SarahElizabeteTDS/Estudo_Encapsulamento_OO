<?php

class Pessoas
{
    //atributos
    private $nome;
    private $endereco;
    private $cidade;
    private $UF;
    private $altura;

    //metodos
    public function getApresentacao()
    {
        return "Olá Mundo, sou " . $this->nome . ", resido no endereço " . $this->endereco . ", " . $this->cidade . "-" . $this->UF . " e possuo uma altura de " . $this->altura . "m!\n\n";
    }

    //GETs and SETs
    
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getUF()
    {
        return $this->UF;
    }

    public function setUF($UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;

        return $this;
    }
}

//programa principal

$pessoa0 = new Pessoas();
$pessoa0->setNome("Felipe");
$pessoa0->setEndereco("Rua 12");
$pessoa0->setCidade("Santa Terezinha de Itaipu");
$pessoa0->setUF("Paraná");
$pessoa0->setAltura(1.88);

$pessoa1 = new Pessoas();
$pessoa1->setNome("Sarah");
$pessoa1->setEndereco("Rua 22");
$pessoa1->setCidade("Santa Terezinha de Itaipu");
$pessoa1->setUF("Paraná");
$pessoa1->setAltura(1.72);

print $pessoa0->getApresentacao();
print $pessoa1->getApresentacao();

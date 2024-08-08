<?php

class Aluno
{
    //atributos
    private $nome;
    private $nota1;
    private $nota2;

    //metodos
    public function calcularMedia($nota1, $nota2)
    {
        return ($nota1 + $nota2)/2;
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

    public function getNota1()
    {
        return $this->nota1;
    }

    public function setNota1($nota1): self
    {
        $this->nota1 = $nota1;

        return $this;
    }

    public function getNota2()
    {
        return $this->nota2;
    }

    public function setNota2($nota2): self
    {
        $this->nota2 = $nota2;

        return $this;
    }
}

//programa principal

$aluno0 = new Aluno();
$aluno0->setNome("Felipe");
$aluno0->setNota1(7);
$aluno0->setNota2(10);

$aluno1 = new Aluno();
$aluno1->setNome("Sarah");
$aluno1->setNota1(10);
$aluno1->setNota2(10);

$aluno2 = new Aluno();
$aluno2->setNome("Walmonn");
$aluno2->setNota1(2);
$aluno2->setNota2(5);

print $aluno0->getNome() . " é média:" . $aluno0->calcularMedia($aluno0->getNota1(), $aluno0->getNota2()) . "\n\n";
print $aluno1->getNome() . " é média:" . $aluno1->calcularMedia($aluno1->getNota1(), $aluno1->getNota2()) . "\n\n";
print $aluno2->getNome() . " é média:" . $aluno2->calcularMedia($aluno2->getNota1(), $aluno2->getNota2()) . "\n\n";

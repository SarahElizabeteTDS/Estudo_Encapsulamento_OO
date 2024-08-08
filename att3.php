<?php

class Livros
{
    //atributos
    private $titulo;
    private $autor;
    private $genero;
    private int $numPaginas;

    //metodos
    public function getDados()
    {
        return "O titulo do livro é: " . $this->titulo . ". Seu autor é o(a): " . $this->autor . ". Ele é do gênero: " . $this->genero . ". E possui " . $this->numPaginas . " páginas.\n\n";
    }

    //GETs and SETs

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getNumPaginas()
    {
        return $this->numPaginas;
    }

    public function setNumPaginas($numPaginas): self
    {
        $this->numPaginas = $numPaginas;

        return $this;
    }
}

//programa principal

function compararLivros($livro1,$livro2,$livro3)
{
    if ($livro1 > $livro2 && $livro1 > $livro3) 
    {
        return $livro1;
    }
    else if ($livro2 > $livro1 && $livro2 > $livro3){
        return $livro2;
    }
    else {
        return $livro3;
    }

}

$livro1 = new Livros();
$livro1->setTitulo("Capitães de Areia")->setAutor("Jorge Amado")->setGenero("Literatura Brasileira")->setNumPaginas(283);

$livro2 = new Livros();
$livro2->setTitulo("O Alquimista")->setAutor("Paulo Coelho")->setGenero("Literatura Brasileira")->setNumPaginas(248);

$livro3 = new Livros();
$livro3->setTitulo("O Avesso da Pele")->setAutor("Jeferson Tenório")->setGenero("Literatura Brasileira")->setNumPaginas(181);

if (compararLivros($livro1->getNumPaginas(), $livro2->getNumPaginas(), $livro3->getNumPaginas()) == $livro1->getNumPaginas()) 
{
    print $livro1->getDados();
}else if(compararLivros($livro1->getNumPaginas(), $livro2->getNumPaginas(), $livro3->getNumPaginas()) == $livro2->getNumPaginas()){
    print $livro2->getDados();
}else{
    print $livro3->getDados();
}

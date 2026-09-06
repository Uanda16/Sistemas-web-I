
<?php

class Aluno {

    private $nome;
    private $nota1;
    private $nota2;
    private $nota3;
    private $faltas;
    private $media;

    
    public function getNome()
    {
        return $this ->nome;
    }
    public function getNota1()
    {
        return $this ->nota1;
    }
    public function getNota2()
    {
        return $this ->nota2;
    }
    public function getNota3()
    {
        return $this ->nota3;
    }
    public function getFaltas()
    {
        return $this ->faltas;
    }
    public function getMedia(){
        return $this ->media;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setNota1($nota1)
    {
        $this ->nota1 = $nota1;
    }
    public function setNota2($nota2)
    {
        $this ->nota2 = $nota2;
    }
    public function setNota3($nota3)
    {
        $this ->nota3 = $nota3;
    }
    public function setFaltas($faltas)
    {
        $this ->faltas = $faltas;
    }
    public function setMedia($media){
        $this ->media = $media;
    }

    public function calcularMedia() {
        $media = ($this->nota1 + $this->nota2 + $this->nota3) / 3;
        return $media;
    }

    public function calcularPresenca() {
        $totalAulas = 80;
        $aulasAssitidas = $totalAulas - $this->faltas;
        return ($aulasAssitidas / $totalAulas) * 100;
    }

    public function mostrarResultado() {
        if($this->calcularMedia() < 5) {
            echo("Aluno reprovado! 😢");

        }else if($this->calcularMedia() > 5 and $this->calcularMedia() <= 7 and $this->calcularPresenca() <= 75) {
            echo("Aluno em Recuperação! 😒");

        }else if($this->calcularMedia() > 7 and $this->calcularPresenca() >= 75) {
            echo("Aluno Aprovado! 😎");

        }else{
            echo ("Aluno Reprovado por Falta! 😓");
        }
    }

}
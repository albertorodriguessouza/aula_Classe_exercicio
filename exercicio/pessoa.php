<?php

class Carro
{
    //atributo_caracteriasticas
    public string $nome;
    public  int $idade;
    public int $peso;
    public bool $nacionalidade;
    public bool $cor;
    //metodo - abilidades
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }
  
    public function setPeso(float $peso): void
    {
        $this->peso = $peso;
    }

    public function setNacionalidade(string $nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function setCor(int $cor): void
    {
        $this->cor = $cor;
    }
}
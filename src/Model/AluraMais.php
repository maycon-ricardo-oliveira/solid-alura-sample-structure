<?php

namespace Alura\Solid\Model;

class AluraMais extends Video implements Pontuavel, Assistivel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        $slug =  new Slug($this->categoria);

        return  'http://videos.alura.com.br/' . $slug;
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}

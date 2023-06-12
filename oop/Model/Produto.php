<?php

namespace oop\Model;


class Produto
{
    private $id, $nome, $descricao;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->nome = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($n)
    {
        $this->nome = $n;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($d)
    {
        $this->nome = $d;
    }
}

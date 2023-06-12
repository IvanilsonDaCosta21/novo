<?php

namespace oop\Model;


class ProdutoDao
{
    public function create(Produto $p)
    {

        $query = "INSERT INTO produtos (nome, descricao) VALUES (:nome, :descricao)";
        $statement = Conexao::getConn()->prepare($query);
        $statement->binValue(':nome', $p->getNome());
        $statement->binValue(':descricao', $p->getDescricao());
        $statement->execute();
    }

    public function read()
    {
        $query = "SELECT nome, descricao FROM produtos";
        $statement = Conexao::getConn()->prepare($query);
        $statement->execute();
        $contar = $statement->rowCount();
        if ($contar > 0) :
            return $resultdo =  $statement->fecthAll(\PDO::FETCH_OBJ);
        endif;
    }

    public function update(Produto $p)
    {
    }

    public function delete(Produto $p)
    {
    }
}

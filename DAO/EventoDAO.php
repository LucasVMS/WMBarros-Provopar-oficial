<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

// FAMOSO CRUD
class EventoDAO extends Conexao
{

    public function CadastrarEvento($nome_evento, $data_inicio, $hora_inicio, $data_fim, $hora_fim, $obs)
    {
        if (
            trim($nome_evento) == '' || trim($data_inicio) == '' || trim($hora_inicio) == '' || trim($data_fim) == '' ||
            trim($hora_fim) == ''
        ) {
            return 0;
        }

        $conexao = parent::retornaConexao();

        $comando_sql = ' INSERT INTO tb_evento
                        (nome_evento, data_inicio, hora_inicio, data_fim, hora_fim, obs)
                        VALUES (?,?,?,?,?,?)';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_evento);
        $sql->bindValue(2, $data_inicio);
        $sql->bindValue(3, $hora_inicio);
        $sql->bindValue(4, $data_fim);
        $sql->bindValue(5, $hora_fim);
        $sql->bindValue(6, $obs);
        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return -1;
        }
    }

    public function ConsultarEvento()
    {


        $conexao = parent::retornaConexao();

        $comando_sql = 'SELECT id,
                               nome_evento,
                               data_inicio,
                               hora_inicio,
                               data_fim,
                               hora_fim
                          FROM tb_evento
                      ORDER BY nome_evento';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function AlterarEvento(
        $idEvento,
        $nome_evento,
        $data_inicio,
        $hora_inicio,
        $data_fim,
        $hora_fim,
        $obs
    ) {
        if (
            trim($idEvento) == '' || trim($nome_evento) == '' || trim($data_inicio) == '' || trim($hora_inicio) == '' || trim($data_fim) == '' ||
            trim($hora_fim) == ''
        ) {
            return 0;
        }

        $conexao = parent::retornaConexao();

        $comando_sql = ' UPDATE tb_evento
                            SET nome_evento = ?,
                                data_inicio = ?,
                                hora_inicio = ?,
                                data_fim = ?,
                                hora_fim = ?,
                                obs = ?
                          WHERE id = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $nome_evento);
        $sql->bindValue(2, $data_inicio);
        $sql->bindValue(3, $hora_inicio);
        $sql->bindValue(4, $data_fim);
        $sql->bindValue(5, $hora_fim);
        $sql->bindValue(6, $obs);
        $sql->bindValue(7, $idEvento);

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return -1;
        }
    }

    public function ExcluirEvento($idEvento)
    {
        if ($idEvento == '')
            return 0;
        $conexao = parent::retornaConexao();
        $comando_sql = 'DELETE
                          FROM tb_evento
                         WHERE id = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);
        $sql->bindValue(1, $idEvento);
        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return -5;
        }
    }
}

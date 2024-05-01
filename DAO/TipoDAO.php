<?php

require_once 'UtilDAO.php';
require_once 'Conexao.php';

class TipoDAO extends Conexao
{

    public function CadastrarTipo($tipo)
    {

        if (trim($tipo) == '') {
            return 0;
        }

        // 1 passo: criar uma variavel que receberá o obj de conexao
        $conexao = parent::retornaConexao();

        // 2 passo: criar uma variavel que receberá o texto do comando SQL que deverá ser executado no BD
        $comando_sql = 'INSERT INTO tb_tipo
                        (nome) values (?)';

        //3 passo: criar um obj que será configurado e levado no BD  para ser executado        
        $sql = new PDOStatement();

        //4 passo: colocar dentro do obj $sql a conexao preparada para executar o comando_sql
        $sql = $conexao->prepare($comando_sql);

        //5 passo: verificar se no comando_sql eu tenho ? para ser configurado. Se tiver, configurar os bindValues
        $sql->bindValue(1, $tipo);

        try {

            //6 passo: executar no BD
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            //echo $ex->getMessage();
            return -1;
        }
    }


    public function ConsultarTipo()
    {

        $conexao = parent::retornaConexao();

        $comando_sql = 'SELECT nome, id
                          FROM tb_tipo ORDER BY nome';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    }

    public function AlterarTipoDoacao($tipo_doacao, $idTipo_doacao)
    {
        if (trim($tipo_doacao) == '') {
            return 0;
        }

        $conexao = parent::retornaConexao();
        $comando_sql = 'UPDATE tb_tipo
                           SET nome = ?
                         WHERE id = ?';

        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $tipo_doacao);
        $sql->bindValue(2, $idTipo_doacao);

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return -1;
        }
    }

    public function ExcluirTipoDoacao($idTipo_doacao)
    {
        if ($idTipo_doacao == '')
            return 0;

        $conexao = parent::retornaConexao();
        $comando_sql = 'DELETE FROM tb_tipo
                            WHERE id = ?';
        $sql = new PDOStatement();
        $sql = $conexao->prepare($comando_sql);
        $sql->bindValue(1, $idTipo_doacao);

        try {
            $sql->execute();
            return 1;
        } catch (Exception $ex) {
            return -1;
        }
    }
}

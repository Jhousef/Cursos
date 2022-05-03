<?php
//FAZENDO CONEXÃO COM O BANCO DE DADOS.

$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$banco = 'curso_mysqli';

//CONEXÃO
$conexao = @mysqli_connect($servidor, $usuario, $senha, $banco) or die ('não foi possivel conectar no banco de dados.');

// ------- CONSULTAS SIMPLES -------
//INSERINDO OS DADOS.
$qry = " insert into clientes (cliente, email, fone, endereco) values('Jhou', 'jho@gmai.com', '98500', 'rua nova') ";

//ATUALIZANDO DADOS.
$qryUpdate = " UPDATE clientes set fone = '984181114' where id_cliente = 5 ";

//DELETANDO REGISTRO
$qryDelete = " DELETE FROM clientes where id_cliente = 6 ";

//O RESULTADO DA CONEXÃO E DADOS INSERIDOS.
$resultado = @mysqli_query($conexao, $qryDelete);

if($resultado){
    echo 'Query realizado com sucesso.';
} else{
    echo 'falha na tentativa de Query.';
}

?>
<?php


/*conexão com banco de dados*/
$servidor = "localhost";
$porta = 5432;
$bancoDeDados = "agenda";
$usuario = "postgres";
$senha = "root";

$conexao = pg_connect("host=$servidor port=$porta dbname=$bancoDeDados user=$usuario password=$senha");
if(!$conexao) {
    die("Não foi possível se conectar ao banco de dados.");
} else {
   echo ("");
}

/*POST PARA SALVAR ARQUIVOS*/
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$data = $_POST['dia'];
$hora = $_POST['hora'];

$grava = pg_query("INSERT INTO atividades (nome,descricao,dia,hora) VALUES ('$nome','$descricao','$data','$hora')");
if ($nome == "" || $descricao == "" || $data == "" || $hora =="") {
    echo "Todos os campos são obrigatórios.";
}



$consulta = "SELECT * FROM atividades";
$con = pg_query($consulta);



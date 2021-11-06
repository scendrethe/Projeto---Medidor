<?php

require_once "conexao_pdo.php";

$post = $_POST['data']['associado'];


foreach($post as $chave => $valor){ 
    if(empty($valor)) { 
        die("O campo $chave ficou vazio. Favor preencher.");
    }
}

try {	
	$stmt = $conexao->prepare("INSERT INTO tbassociado(nome, glicemia, cep, logradouro, cidade, estado, bairro, data_nascimento, tipo_diabetes) VALUES ('$post[nome]','$post[glicemia]','$post[cep]','$post[logradouro]','$post[cidade]','$post[estado]','$post[bairro]', '$post[data_nascimento]', '$post[tipo_diabetes]')");
	$stmt->execute();
	$conexao->exec($stmt);
  		echo "Cadastrado(a) com sucesso!";
} catch(PDOException $e) {
  	echo $sql . $e->getMessage();
}

$conexao = null;

?>



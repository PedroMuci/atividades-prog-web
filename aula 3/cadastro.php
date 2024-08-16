<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'] ?? '';
    $sobrenome = $_POST['sobrenome'] ?? '';
    $email = $_POST['email'] ?? '';
    $data_nascimento = $_POST['data_nascimento'] ?? '';
    $sexo = $_POST['sexo'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    $cep = $_POST['cep'] ?? '';
    $cor_favorita = $_POST['cor_favorita'] ?? '';
    $estado = $_POST['estado'] ?? '';

    
    $linha = "Nome: $nome\nSobrenome: $sobrenome\nEmail: $email\nData de Nascimento: $data_nascimento\nSexo: $sexo\nEndereço: $endereco\nCEP: $cep\nCor Favorita: $cor_favorita\nEstado: $estado\n\n";

   
    $arquivo = 'dados.txt';

   
    if (file_put_contents($arquivo, $linha, FILE_APPEND | LOCK_EX)) {
        echo "Dados armazenados com sucesso!";
    } else {
        echo "Erro ao armazenar os dados!";
    }
} else {
    echo "Nenhum dado foi enviado.";
}
?>
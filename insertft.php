<?php
    $nome= $_POST["nome_completo"]; 
    $telefone= $_POST["email"]; 
    $endereco= $_POST["cpf"]; 
    $cep= $_POST["endereco"]; 

    echo "O nome do cliente é $nome. Seu telefone é $telefone <br>
          Seu endereco é $endereco com cep $cep";
    
?>
<?php
    $nome= $_POST["nome_completo"]; 
    $telefone= $_POST["email"]; 
    $endereco= $_POST["cpf"]; 
    $cep= $_POST["endereco"]; 

    echo "O nome do cliente � $nome. Seu telefone � $telefone <br>
          Seu endereco � $endereco com cep $cep";
    
?>
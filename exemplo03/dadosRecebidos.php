<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        echo "<h2>Dados Recebidos!</h2>";
        echo "Seja bem-vindo(a) $nome! <br>";
        echo "E-mail cadastrado: $email.";

    } else {
        echo "<h2>Nenhum dado recebido!</h2>";
    }

?>
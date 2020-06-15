<?php
$nome_servidor = "sql10.freesqldatabase.com";
        $nome_usuario = "sql10346919";
        $senha = "8XrIakDaaq";
        $nome_banco = "sql10346919";

        $conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);
$sql = "select escrita as escritaD from ususario where nome='a'";

        $resultado = $conecta->query($sql);
       while($linha = $resultado->fetch_assoc()) {
                $destro=$linha["escritaD"];
            }
        
        $sql2 = "select count(escrita) as escritaD from ususario where escrita='$destro'";
        $resultado2 = $conecta->query($sql2);
       while($linha2 = $resultado2->fetch_assoc()) {
                $destro=$linha2["escritaD"];
            }

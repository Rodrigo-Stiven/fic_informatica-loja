<?php
    $sql = "SELECT * FROM produtos";
    include "conexao.php";
    $resposta = "<option value='#'>selecione...</option>";
        if ($resultado = mysqli_query($con, $sql)) {
            while ($lh = mysqli_fetch_assoc($resultado)) {
            $resposta .= "<option value='".$lh['id_produtos']."'>".$lh['marca']." ".$lh['modelo']." ".$lh['descricao']."</optin>";
            }

        echo $resposta;
    }
?>
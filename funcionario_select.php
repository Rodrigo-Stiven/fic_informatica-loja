<?php
    $sql = "SELECT * FROM funcionarios";
    include "conexao.php";
    $resposta = "<option value='#'>selecione...</option>";
        if ($resultado = mysqli_query($con, $sql)) {
            while ($lh = mysqli_fetch_assoc($resultado)) {
            $resposta .= "<option value='".$lh['id_funcionario']."'>".$lh['nome']." ".$lh['sobrenome']."</optin>";
            }

        echo $resposta;
    }
?>

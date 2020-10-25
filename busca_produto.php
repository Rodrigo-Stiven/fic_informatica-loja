<?php
    $sql = "SELECT * FROM produtos";
    include "conexao.php";
    $resposta = "";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_produto']."</td>";
            $resposta .= "<td>".$lh['marca']."</td>";
            $resposta .= "<td>".$lh['modelo']."</td>";
            $resposta .= "<td>".$lh['descricao']."</td>";
            $resposta .= "<td>".$lh['data_fabricacao']."</td>";
            $resposta .= "<td>".$lh['preco']."</td>";
            $resposta .= "<td>".$lh['quantidades_estoque']."</td>";
            $resposta .= "</tr>";
        }
        echo $resposta;
    }
?>
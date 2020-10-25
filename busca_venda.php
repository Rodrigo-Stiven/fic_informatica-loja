<?php
    $sql = "SELECT * FROM vendas";
    include "conexao.php";
    $resposta = "";
    if($resultado = mysqli_query($con,$sql)){
        while($lh = mysqli_fetch_assoc($resultado)){
            $resposta .= "<tr>";
            $resposta .= "<td>".$lh['id_venda']."</td>";
            $resposta .= "<td>".$lh['cliente']."</td>";
            $resposta .= "<td>".$lh['funcionario']."</td>";
            $resposta .= "<td>".$lh['produto']."</td>";
            $resposta .= "<td>".$lh['data_venda']."</td>";
            $resposta .= "<td>".$lh['preco']."</td>";
            $resposta .= "<td>".$lh['data_garantia']."</td>";
            $resposta .= "</tr>";
        }
        echo $resposta;
    }
?>
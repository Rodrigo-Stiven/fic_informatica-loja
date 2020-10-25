<?php
    if(isset($_POST['campo_marca'])){
        $marca = $_POST['campo_marca'];
        $modelo = $_POST['campo_modelo'];
        $descricao = $_POST['campo_descricao'];
        $data_fabricacao = $_POST['campo_data_fabricacao'];
        $preco = $_POST['campo_preco'];
        $quantidades_estoque = $_POST['campo_quantidades_estoque'];
        $sql = "INSERT INTO produtos(marca,modelo,descricao,data_fabricacao,preco,quantidades_estoque)VALUES('$marca','$modelo','$descricao','$data_fabricacao','$preco','$quantidades_estoque')";
        include "conexao.php";
        if (mysqli_query($con, $sql)) {
            mysqli_close($con);
            echo "ok";
        }else{
            echo "Erro: " . $sql . "<br>" . mysqli_error($con);
        }

    }else{
        echo "erro";
    }
?>
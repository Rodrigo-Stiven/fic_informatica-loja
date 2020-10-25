<?php
    if(isset($_POST['campo_cliente'])){
        $cliente = $_POST['campo_cliente'];
        $funcionario = $_POST['campo_funcionario'];
        $produto = $_POST['campo_produto'];
        $data_venda = $_POST['campo_data_venda'];
        $preco = $_POST['campo_preco'];
        $data_garantia = $_POST['campo_data_garantia'];
        $sql = "INSERT INTO vendas(cliente,funcionario,produto,data_venda,preco,data_garantia)VALUES('$cliente','$funcionario','$produto','$data_venda','$preco','$data_garantia')";
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
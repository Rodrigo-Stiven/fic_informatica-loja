$(document).ready(function(){

    $('#conteudo').on('submit','#formCliente',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_cliente.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formCliente').each(function(){
                        this.reset();
                    });
                    alert("O Cliente foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('submit','#formFuncionario',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_funcionario.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formFuncionario').each(function(){
                        this.reset();
                    });
                    alert("O Funcionario foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('submit','#formVenda',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_venda.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formVenda').each(function(){
                        this.reset();
                    });
                    alert("A Venda foi cadastrada com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $('#conteudo').on('submit','#formProduto',function(e){
        e.preventDefault();
        var formulario = $(this).serialize();
        $.ajax({
            type: "post",
            url: "ins_Produto.php",
            data: formulario,
            dataType: "text",
            success: function (response) {
                if(response == "ok"){
                    $('#formProduto').each(function(){
                        this.reset();
                    });
                    alert("O Produto foi inserido com sucesso!");
                }else{
                    alert(response);
                }
            }
        });
    });

    $("#conteudo").on('click','#btn_bscClientes', function (e) {

        e.preventDefault();

        $.ajax({

            type: "post",

            url: "busca_cliente.php",

            data: "busca",

            dataType: "text",

            success: function (response) {

                $('#tblClientes').html(response);

            }

        });

    });

    $('#conteudo').on('click','#btn_bscFuncionario',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_funcionario.php",
            data: "busca",
            dataType: "text",
            success: function (response) {
                $('#tblFuncionario').html(response);
            }
        });
    });

    $('#conteudo').on('click','#btn_bscProduto',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_Produto.php",
            data: "busca",
            dataType: "text",
            success: function (response) {
                $('#tblProduto').html(response);
            }
        });
    });

    $('#conteudo').on('click','#btn_bscVenda',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "busca_venda.php",
            data: "busca",
            dataType: "text",
            success: function (response) {
                $('#tblVenda').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpNm',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "cliente_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpNm').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpNm2',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "funcionario_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpNm2').html(response);
            }
        });
    });

    $('#conteudo').on('focus','#cmpNm3',function(e){
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "produto_select.php",
            data: "buscar",
            dataType: "text",
            success: function (response) {
                $('#cmpNm3').html(response);
            }
        });
    });

});
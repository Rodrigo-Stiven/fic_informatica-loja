<h1>INSERIR VENDA</h1>
<br>
<form id="formVenda" method="post">
    <div class="col-lg-8 col-md-8 col-sm-12 col-lg-pull-2 col-md-pull-2 col-lg-push-2 col-md-push-2">
            <div class="form-group">
                <select name="campo_cliente" id="cmpNm" class="form-control" >
                    <option value="#">Selecione o CLIENTE</option>
                </select>
            </div>
            <div class="form-group">
                <select name="campo_funcionario" id="cmpNm2"  class="form-control">
                    <option value="#">Selecione o FUNIONARIO</option>
                </select>
            </div>
            <div class="form-group">
                <select name="campo_produto" id="cmpNm3"  class="form-control">
                    <option value="#">Selecione o PRODUTO</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text"  class="form-control"  name="campo_data_venda" id="cmpDv" placeholder="Data de Venda">
            </div>
            <div class="form-group">
                <input type="text" name="campo_preco" id="cmpPrc" class="form-control"  placeholder="Preço">
            </div>
            <div class="form-group">
                <input type="text"  class="form-control"  name="campo_data_garantia" id="cmpDg" placeholder="Data de Garantia">
            </div>
        
            <button id="ed_submit" type="submit" value="SALVAR" class="btn ed_btn ed_orange pull-left">Salvar</button>
       </div>
</form>



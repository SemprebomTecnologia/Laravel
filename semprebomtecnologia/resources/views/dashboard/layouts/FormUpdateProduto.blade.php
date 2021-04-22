<form name="CadProduto" method="GET" action="update_produto" >
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome</label>
        <input class="form-control" id="NameProd" type="text" placeholder="Nome do Produto">
    </div>

    <div class="d-md-flex flex-row bd-highlight">
        <div class="w-50 p-3">      
            <div class="form-group">
                <label for="exampleFormControlSelect2">Grupo</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        
        <div class="w-50 p-3">
            <div class="form-group">
                <label for="exampleFormControlSelect2">SubGrupo</label>
                <select class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>        
        </div>        
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Descricão do Produto</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" maxlength="300"> </textarea>
    </div>

    <button type="button" class="btn btn-success">salvar</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Fazer login</button>


<!-- 
<div class="w-25 p-3" style="background-color: red;">Largura de 25%</div>
<div class="w-50 p-3" style="background-color: yellow;">Largura de 50%</div>
<div class="w-75 p-3" style="background-color: blue;">Largura de 75%</div>
<div class="w-100 p-3" style="background-color: green;">Largura de 100%</div>
<div class="w-auto p-3" style="background-color:black;">Largura automática</div> -->

</form>


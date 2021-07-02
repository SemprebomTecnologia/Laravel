<div class="wrapper ">

    <div class="sidebar" data-color="orange" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    
          Tip 2: you can also add an image using data-image tag
        -->
        <a href="../admin.php" class="logo">
            <div  class="simple-text logo-normal">
                SemprebomTecnologia
            </div>
        </a>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item  ">
                    <a class="nav-link" href="../produto/listaProduto.php">
                        <i class="material-icons">dashboard</i>
                        <p>Produtos</p>
                    </a>
                </li>
                <li class="nav-item active ">
                    <a class="nav-link" href="./listaUsuario.php">
                        <i class="material-icons">person</i>
                        <p>Usuarios</p>
                    </a>
                </li>
            </ul>
        </div>  
    </div>


    <div class="content" >
        <div class="container-fluid" >
            <div class="row" >
                <div class="col-lg-10" style="float: none; margin: 0 auto;padding-left: 12%;" >
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title">Editar perfil do usuario</h4>
                            <p class="card-category">Cadastrar Usuario para uso do sistema</p>
                        </div>
                        <div class="card-body">
                            <form name="FrmcadastroUsuario" method="POST" action="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Empresa</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Nome</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">sobrenome</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Confirme o Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>                                        
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Endere&ccedil;o</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Telefone</label>
                                            <input type="tel" class="form-control">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Cidade</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">

                                            <select class="form-control selectpicker" id="selectEstado">
                                                <option selected value=""> SELECIONE UM ESTADO</option>
                                                <option value="PR" >PR</option>
                                                <option value="SC" >SC</option>
                                                <option value="CE" >CE</option>
                                                <option value="RJ" >RJ</option>
                                                <option value="RS" >RS</option>                                                    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">CEP</label>
                                            <input type="number" class="form-control">
                                        </div>
                                    </div>
                                </div> 

                                <button type="submit" class="btn btn-warning pull-left">Inserir</button>
                                <button type="reset"  class="btn btn-warning pull-right">Cancelar</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
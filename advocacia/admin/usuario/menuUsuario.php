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
                            <h4 class="card-title ">Lista de Produtos</h4>
                            <p class="card-category">Lista de produtos cadastrados no Sistemas</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        Login
                                    </th>
                                    <th>
                                        Op&ccedil;&atilde;o                                                                    
                                    </th>
                                    </thead>                                    
                                    <tbody>
                                        <tr>
                                            <td>
                                                1
                                            </td>
                                            <td>
                                               bolsonaro
                                            </td>
                                            <td>
                                                bolsonaro2019
                                            </td>
                                           
                                            <td>
                                                <a href="../admin.php?prdutoid=12&codbarra=12312" class="simple-text">Editar </a>

                                                <a href="../admin.php?prdutoid=12&codbarra=12312" class="simple-text">Excluir </a>    
                                            </td>
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>                                
                               <button type="submit"  class="btn btn-warning pull-right">Novo</button>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

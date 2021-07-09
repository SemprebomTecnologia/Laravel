<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  SIS-FACIL - Sistema de Gerenciamento Comercial 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
    
    
    
        <div class="content" style="text-align: center; width: 70%; height: auto; margin-left: auto; margin-right: auto; padding-top: 100px;">
            <div class="container-fluid" >
              <div class="row">
                <div class="col-md-11">
                  <div class="card">
                    <div class="card-header card-header-primary">
                      <p class="card-category">SIS-FACIL - Sistema de Gerenciamento Comercial</p>
                    </div>
                    <div class="card-body">
                      <form name="loginSistema"  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Usuario</label>
                              <input type="text" class="form-control" name="usuario">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label class="bmd-label-floating">Senha</label>
                              <input type="password" class="form-control"  name="senha">
                            </div>
                          </div>

                        </div>


                        <button type="submit" class="btn btn-primary  ">Entrar</button>
                        <button type="reset" class="btn btn-primary">Sair</button>



                        <div class="clearfix"></div>
                      </form>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
      <div>    
  <div class="wrapper ">
   
       <div class="col-md-4">
           <button  class="btn btn-primary btn-block d-none " id="meuElemento" onclick="demo.showNotification('top','left', 'Por Favor Verifique seu Usuario e Senha')">Top Right</button>
       </div>
      
      
      

 	<?php
        
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        if ( (isset($_POST) && $_POST != NULL  ) ) {	
            
		if (!(empty($_POST['usuario']) && empty($_POST['senha']) ) ){

                    $a = 'tettt ';
                    $b =
                    //Echo $_SERVER['DOCUMENT_ROOT'].getcwd().'diretorio ; <br> ';
                    
                    $filename = '../admin/sys/class/usuario.class.php';


                    if (file_exists($filename)) {
                        echo "The file $filename exists";
                         
                        include_once($filename);
                    } else {
                        echo "The file $filename does not exist <br>";
                       
                    }

                    
                    //inlude_once('../admin/sys/class/usuario.class.php');  
                    $test = new Usuario();                    
                    //$login = $test->VerificaLogin($_POST['usuario'], $ss);  
                    $login = $test->VerificaLogin($_POST['usuario'], $_POST['senha']);  
                   
                    
                    
                    //var_dump($login);
                    
                    if (!($login == FALSE)){
                        echo ' errado';
                    }else{
                     echo" <script> 
                                $(document).ready(function() { demo.showNotification('top','left', 'Por Favor Verifique seu Usuario e Senha') });
                           </script>
                         ";  

                    }
                     
		}
  	}
	?> 
          

               
       
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>

  <script> 
        $(document).ready(function() { demo.showNotification('top','left', 'Por Favor Verifique seu Usuario e Senha') });
   </script>
  
</body>

</html>
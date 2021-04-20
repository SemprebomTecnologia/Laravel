<?php  
   if(isset($_POST['submit'])){
        //var_dump($_GET);

        $user = $_GET['txtUser'];
        $pass = $_GET['inputPassword'];

        echo "User Has submitted the form and entered this name : <b> $user </b>";
        echo "<br>You can use the following a password $pass."; 
    }



?>



	<!--- Navbar --->
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container">
			<a class="navbar-brand text-white" href="#"><i class="fa fa-graduation-cap fa-lg mr-2"></i>SEMPREBOM TECNOLOGIA</a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon" ></span>
			</button>

			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item pl-1 active">
						<a class="nav-link" href="home"><i class="fa fa-home fa-fw mr-1"></i>Home</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="#"><i class="fa fa-info-circle fa-fw mr-1"></i>Sobre mim</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="#"><i class="fa fa-phone fa-fw fa-rotate-180 mr-1"></i>Contato</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="foods"><i class="fa fa-user-plus fa-fw mr-1"></i>Foods</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
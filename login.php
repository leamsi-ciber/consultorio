<?php
session_start();
include('libreria/includes.php');
conexion::instancia();

$hey = "";
if(isset($_SESSION['user'])){
    header("location:index.php"); 
}
if($_POST)
{
    $username = $_POST['username'];
    $pass = $_POST['password'];
   $pasmd5 = md5($pass);
  
    $user = new Usuario();
    $confirm = $user->Verificar($username, $pasmd5);
    
    if(!$confirm)
    {
        $hey = "Usuario o contraseña incorrecta hermano :)";
    }else 
    {
     header("location: index.php"); 
     }
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Consultorio M&C</title>
        <link rel="shortcut icon" href="./images/favicon.png" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="card bg-dark text-blue">
    <img src="media/consul.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action=" ">
                                        <?php
                                            echo isset($hey)? $hey: '';
                                            
                                        ?>
                                            <div class="form-group"><label class="small mb-1" for="text">Usuario</label><input class="form-control py-4" id="text" name="username" type="text" placeholder="username" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" name="password" type="password" placeholder="Contraseña" /></div>
                                            <div class="center-align"><button type="submit" class="btn btn-primary">Login</button></div>
										</form>
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
        </div>
        </div>
    </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Consultorio M&C 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
    </body>
</html>
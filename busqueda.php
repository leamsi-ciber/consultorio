<?php 
session_start();
include('libreria/includes.php');
include('libreria/componentes/header.php');
if(isset($_SESSION['user'])){


    $cedula=$_REQUEST['cedula'];

    $con=conexion::instancia();
    $sql ="select * from paciente where cedula = '$cedula'";
    $result=  mysqli_query($con,$sql);
  
}
else {
    header("Location:index.php");
}


?>
<div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Pacientes Registrados</h4>
                        <div>
                        <a  href="registropacientes.php" class="btn btn-primary btn-fw">Nuevo Paciente</a>
                        </div><br>
                        
                        <table class="table table-dark">
                        <thead>
                            <tr>
                                
                                <th></th>
                                <th>Cedula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                              
                                <th>Fecha de Nacimiento</th>
                                <th>Tipo de sangre</th>
                                <th>Sexo</th>
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
   
                            

   

                                                        
                            foreach($result as $data)
                            {  
                                 
                                
                                    echo "
                                    
                                    <tr>
                                    
                                    ";?>

                                        <td><img <?php if($data['sexo']=='f'){echo "src='images/faces-clipart/pic-2.png'";}else if($data['sexo']=='m'){echo"src='images/faces-clipart/pic-1.png'";}?>/></td>
                                        <?php
                                        echo"
                                        <td>{$data['cedula']}</td>
                                        <td>{$data['nombre']}</td>
                                        <td>{$data['apellido']}</td>
                                        <td>{$data['Fecha_na']}</td>
                                        <td>{$data['sangre']}</td>
                                        <td>{$data['sexo']}<td>
                                        
                                    </tr>
                                    
                                    
                                    ";
                                } if($data==null) 
                                {
                                    echo"No hay Paciente Registrado con esa cedula";
                              //  header("Location:registropacientes.php");
                                }
                            
                            ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
    </div>
          </div>
 </div>
<?php

include('libreria/componentes/footer.php');
?>
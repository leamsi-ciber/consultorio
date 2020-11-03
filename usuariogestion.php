
<?php
session_start();
include('libreria/includes.php');
include('libreria/componentes/header.php');
if(isset($_SESSION['user'])){

    $user = new Usuario();
    $result = $user->Consultar();

    if(isset($_GET['del']))
    {
        $user->Id = $_GET['del'];
        $user->Eliminar();
       
    }
    
}
else {
    header("Location:index.php");
}


?>



                    <div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Usuarios</h4>
                        <div>
                        <a  href="registrousuario.php" class="btn btn-primary btn-fw">Nuevo Usuario</a>
                        </div><br>
                        <table class="table table-dark">
                        <thead>
                            <tr>
                            <th> # </th>
                            <th> Nombre </th>
                            <th> Apellido</th>
                            <th> Username </th>
                            <th>Tipo</th>
                            <th></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            $con=conexion::instancia();
                            $sql ="select * from usuarios where Tipo_user !=1";
                          $result=  mysqli_query($con,$sql);
                           

                            
                            $count = 0;

                                foreach($result as $data)
                                {
                                    $count++;
                                    
                                    echo "
                                    
                                    <tr >
                                        
                                        <td>{$data['id']}</td>
                                        <td>{$data['nombre']}</td>
                                        <td>{$data['apellido']}</td>
                                        <td>{$data['usuario']}</td>";
                                        ?>
                                        <td><?php if($data['Tipo_user']==2){echo"Asistente";}if($data['Tipo_user']==3){echo"Medico";}?></td>
                                        <?php
                                        echo"
                                        <td><a class='btn btn-warning btn-fw' href='edituser.php?ced={$data['id']}'>
                                        Edit
                                        </a>
                                        </td>
                                        <td>
                                        <a class='btn btn-danger btn-fw' href='usuariogestion.php?del={$data['id']}'>
                                    Eliminar
                                        </a>
                                        </td>
                                    </tr>
                                    
                                    
                                    ";
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
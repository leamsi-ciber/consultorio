<?php
session_start();
include('libreria/includes.php');
include('libreria/componentes/header.php');
if(isset($_SESSION['user'])){

 
  
}
else {
    header("Location:index.php");
}


?>


<div class="col-lg-8 grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Visitas</h4>
                        <div>
                        <a  href="registrovisita.php" class="btn btn-primary btn-fw">Nueva Visita</a>
                        </div><br>
                        
                        <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> ID Paciente</th>
                                <th>Fecha</th>
                                <th> Motivo</th>
                               
                                <th> Receta de medicamentos</th>
                                <th>Fecha de próxima visita</th>
                                <th></th>
                           
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            
                            $con=conexion::instancia();
                            $sql ="select * from visitas";
                          $result=  mysqli_query($con,$sql);
                           
                        
                            
                            $count = 0;

                                foreach($result as $data)
                                {
                                    $count++;
                                    
                                    echo "
                                    
                                    <tr>
                                        
                                        <td>{$count}</td>
                                        <td>{$data['idpaciente']}</td>
                                        <td>{$data['fecha']}</td>
                                        <td>{$data['motivo']}</td>
                                    
                                        <td>{$data['receta']}</td>
                                        <td>{$data['fecha_p']}</td>
                                        <td><a class='btn btn-primary btn-fw' href='impresion.php?imp={$data['id']}'><i class='icon-docs'></i> Imprimir receta</a>
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
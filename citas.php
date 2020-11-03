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
                        <h4 class="card-title">Citas</h4>
                        <div>
                        <a  href="registrocitas.php" class="btn btn-primary btn-fw">Nueva Cita</a>
                        </div><br>
                        
                        <table class="table table-dark">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th>Fecha</th>
                                <th> Hora</th>
                                <th> Duracion</th>
                                <th>Tipo Consulta</th>
                           
                                <th></th>
                           
                            </tr>
                            
                        </thead>
                        <tbody>
                            <?php
                            
                            $con=conexion::instancia();
                            $sql ="select * from cita";
                          $result=  mysqli_query($con,$sql);
                           
                        
                            
                            $count = 0;

                                foreach($result as $data)
                                {
                                    $count++;
                                    
                                    echo "
                                    
                                    <tr>
                                        
                                        <td>{$count}</td>
                                     
                                        <td>{$data['fecha']}</td>
                                        <td>{$data['hora']}</td>
                                    
                                        <td>{$data['duracion']}</td>";?>

                                        <td><?php if($data['tipo_consulta']==1){echo"Maxima";} else if($data['tipo_consulta']==2){echo"Media";} else if($data['tipo_consulta']==3){echo"Baja";}else{echo"Personal";}?></td>
                                      
                                        <?php
                                        echo"
                                        <td><a class='btn btn-primary btn-fw' href='impresion2.php?imp={$data['id']}'><i class='icon-docs'></i> Imprimir Cita</a>
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